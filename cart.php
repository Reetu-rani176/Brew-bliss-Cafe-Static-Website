<?php
session_start();
require_once 'db_connect.php';
// Debug: show user id
// echo "User ID: " . $_SESSION['user_id'] . "<br>";

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get cart items for the current user
try {
    $stmt = $pdo->prepare("
        SELECT c.*, m.name, m.price, m.image_url 
        FROM cart c 
        JOIN menu_items m ON c.item_id = m.id 
        WHERE c.user_id = ?
    ");
    $stmt->execute([$_SESSION['user_id']]);
    $cart_items = $stmt->fetchAll();
    
    // Calculate total
    $subtotal = 0;
    foreach ($cart_items as $item) {
        $subtotal += $item['price'] * $item['quantity'];
    }
    $gst = $subtotal * 0.13; // 13% GST
    $total = $subtotal + $gst;
} catch(PDOException $e) {
    $_SESSION['error'] = "Error loading cart: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Brew Bliss Cafe</title>
    <link rel="stylesheet" href="style.css">
    <style>
        html, body {
            height: 100%;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .cart-container {
            max-width: 700px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            background: #faf9f7;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.07);
            flex: 1 0 auto;
        }
        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        .cart-item {
            display: grid;
            grid-template-columns: 90px 1fr 90px;
            gap: 1.2rem;
            padding: 1.2rem 1rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            align-items: center;
        }
        .cart-item img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 6px;
        }
        .item-details {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }
        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin: 0.5rem 0;
        }
        .quantity-btn {
            padding: 0.2rem 0.7rem;
            border: 1px solid #ddd;
            background: #f5f5f5;
            cursor: pointer;
            border-radius: 4px;
            font-size: 1.1em;
        }
        .quantity-input {
            width: 45px;
            text-align: center;
            padding: 0.2rem;
            border-radius: 4px;
            border: 1px solid #ddd;
            background: #f9f9f9;
        }
        .remove-item {
            background: #411c03;
            color: #fff;
            border: none;
            border-radius: 7px;
            padding: 0.7rem 1.2rem;
            font-size: 1em;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-left: auto;
        }
        .remove-item:hover {
            background: #6e330b;
        }
        .cart-summary {
            margin-top: 2.5rem;
            padding: 1.2rem 1.5rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        .bill-details {
            margin: 1.2rem 0 0.5rem 0;
            padding: 1.2rem 1rem;
            background: #f4f1ed;
            border-radius: 7px;
        }
        .bill-details p {
            margin: 0.6rem 0;
        }
        .total {
            font-size: 1.3em;
            font-weight: bold;
            color: #6e330b;
            border-top: 1px solid #ddd;
            padding-top: 0.7rem;
            margin-top: 0.7rem;
        }
        .empty-cart {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 300px;
            text-align: center;
            padding: 3rem 1rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            margin: 3rem 0;
        }
        .empty-cart p {
            font-size: 1.3rem;
            color: #6e330b;
            margin-bottom: 1.5rem;
        }
        .empty-cart .btn {
            font-size: 1.1rem;
            padding: 0.7rem 2rem;
        }
        .error-message {
            color: #dc3545;
            margin-bottom: 1rem;
            padding: 0.5rem;
            background: #ffebee;
            border-radius: 4px;
        }
        .footer {
            flex-shrink: 0;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="cart-container">
        <h1>Your Cart</h1>
        
        <?php if (isset($_SESSION['error'])): ?>
            <div class="error-message">
                <?php 
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>

        <?php if (empty($cart_items)): ?>
            <div class="empty-cart">
                <p>Your cart is empty</p>
                <a href="menu.php" class="btn">Browse Menu</a>
            </div>
        <?php else: ?>
            <div class="cart-items">
                <?php foreach ($cart_items as $item): ?>
                    <div class="cart-item" data-cart-id="<?php echo $item['cart_id']; ?>">
                        <img src="<?php echo htmlspecialchars($item['image_url']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                        <div class="item-details">
                            <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                            <p class="price">$<?php echo number_format($item['price'], 2); ?></p>
                            <div class="quantity-controls">
                                <button class="quantity-btn minus">-</button>
                                <input type="number" class="quantity-input" value="<?php echo $item['quantity']; ?>" min="1" max="10">
                                <button class="quantity-btn plus">+</button>
                            </div>
                            <p class="item-total">Item Total: $<?php echo number_format($item['price'] * $item['quantity'], 2); ?></p>
                        </div>
                        <button class="remove-item" data-cart-id="<?php echo $item['cart_id']; ?>">Remove</button>
                    </div>
                <?php endforeach; ?>
                
                <div class="cart-summary">
                    <h3>Bill Summary</h3>
                    <div class="bill-details">
                        <p>Subtotal: $<?php echo number_format($subtotal, 2); ?></p>
                        <p>GST (13%): $<?php echo number_format($gst, 2); ?></p>
                        <p class="total">Total: $<?php echo number_format($total, 2); ?></p>
                    </div>
                    <form action="checkout.php" method="post" style="margin-top: 1.5rem;">
                        <button type="submit" class="btn checkout-btn">Proceed to Checkout</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Update quantity
            const quantityInputs = document.querySelectorAll('.quantity-input');
            quantityInputs.forEach(input => {
                input.addEventListener('change', function() {
                    updateCartItem(this.closest('.cart-item').dataset.cartId, this.value);
                });
            });

            // Remove item
            const removeButtons = document.querySelectorAll('.remove-item');
            removeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    removeCartItem(this.dataset.cartId);
                });
            });

            // Quantity buttons
            const minusButtons = document.querySelectorAll('.minus');
            const plusButtons = document.querySelectorAll('.plus');

            minusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.nextElementSibling;
                    if (input.value > 1) {
                        input.value = parseInt(input.value) - 1;
                        updateCartItem(this.closest('.cart-item').dataset.cartId, input.value);
                    }
                });
            });

            plusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    if (input.value < 10) {
                        input.value = parseInt(input.value) + 1;
                        updateCartItem(this.closest('.cart-item').dataset.cartId, input.value);
                    }
                });
            });
        });

        function updateCartItem(cartId, quantity) {
            fetch('update_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `cart_id=${cartId}&quantity=${quantity}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                } else {
                    alert('Error updating cart: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error updating cart');
            });
        }

        function removeCartItem(cartId) {
            if (confirm('Are you sure you want to remove this item?')) {
                fetch('remove_cart_item.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `cart_id=${cartId}`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Error removing item: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error removing item');
                });
            }
        }
    </script>
</body>
</html> 