<?php
session_start();
require_once 'db_connect.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

$cart_id = $_POST['cart_id'] ?? null;

if (!$cart_id) {
    echo json_encode(['success' => false, 'message' => 'Missing cart ID']);
    exit();
}

try {
    // Verify the cart item belongs to the user
    $stmt = $pdo->prepare("SELECT user_id FROM cart WHERE cart_id = ?");
    $stmt->execute([$cart_id]);
    $cart_item = $stmt->fetch();

    if (!$cart_item || $cart_item['user_id'] != $_SESSION['user_id']) {
        echo json_encode(['success' => false, 'message' => 'Invalid cart item']);
        exit();
    }

    // Remove the item
    $stmt = $pdo->prepare("DELETE FROM cart WHERE cart_id = ?");
    $stmt->execute([$cart_id]);

    echo json_encode(['success' => true]);
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error']);
}
?> 