<?php
session_start();
require_once 'db_connect.php';

header('Content-Type: application/json');

file_put_contents('debug_add_to_cart.txt', 'User ID: ' . ($_SESSION['user_id'] ?? 'NOT SET') . PHP_EOL, FILE_APPEND);

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Please login to add items to cart']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

$item_id = $_POST['item_id'] ?? '';

if (empty($item_id)) {
    echo json_encode(['success' => false, 'message' => 'Missing required parameters']);
    exit();
}

try {
    // Check if item exists in menu_items
    $stmt = $pdo->prepare("SELECT id FROM menu_items WHERE id = ?");
    $stmt->execute([$item_id]);
    if (!$stmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'Invalid menu item']);
        exit();
    }

    // Check if item already exists in cart
    $stmt = $pdo->prepare("SELECT cart_id, quantity FROM cart WHERE user_id = ? AND item_id = ?");
    $stmt->execute([$_SESSION['user_id'], $item_id]);
    $cart_item = $stmt->fetch();

    if ($cart_item) {
        // Update quantity if item exists
        $stmt = $pdo->prepare("UPDATE cart SET quantity = quantity + 1 WHERE cart_id = ?");
        $stmt->execute([$cart_item['cart_id']]);
    } else {
        // Add new item to cart
        $stmt = $pdo->prepare("INSERT INTO cart (user_id, item_id, quantity) VALUES (?, ?, 1)");
        $stmt->execute([$_SESSION['user_id'], $item_id]);
    }

    echo json_encode(['success' => true]);
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?> 