<?php
session_start();
require_once 'db_connect.php';

// Fetch all menu items from the database
$stmt = $pdo->query("SELECT * FROM menu_items WHERE is_available = 1 ORDER BY category, name");
$menu_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Group items by category
$categories = [];
foreach ($menu_items as $item) {
    $categories[$item['category']][] = $item;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore Brew Bliss Cafe's extensive menu featuring artisanal coffee, specialty drinks, gourmet pastries, and delicious snacks. Find your perfect coffee companion.">
    <meta name="keywords" content="Brew Bliss Cafe menu, coffee menu, specialty drinks, gourmet pastries, cafe food, coffee drinks, tea selection, cafe snacks, menu items, coffee prices, cafe menu">
    <meta name="author" content="Brew Bliss Cafe Team">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Brew Bliss Cafe Menu - Artisanal Coffee & Gourmet Food">
    <meta property="og:description" content="Discover our carefully crafted menu of artisanal coffee, specialty drinks, and gourmet food at Brew Bliss Cafe.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brewblisscafe.com/menu">
    <link rel="canonical" href="https://brewblisscafe.com/menu">
    <link rel="stylesheet" href="style.css">
    <title>Brew Bliss Cafe Menu - Artisanal Coffee & Gourmet Food | Menu</title>
    <style>
        .menu-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .menu-category {
            margin-bottom: 4rem;
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .menu-category h2 {
            color: #6e330b;
            border-bottom: 2px solid #6e330b;
            padding-bottom: 0.5rem;
            margin-bottom: 2rem;
            font-size: 1.8rem;
            text-align: center;
        }

        .category-description {
            text-align: center;
            color: #666;
            margin-bottom: 2rem;
            font-size: 1.1rem;
            line-height: 1.6;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .menu-item {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 1.5rem;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 450px;
            position: relative;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .menu-item h3 {
            color: #6e330b;
            margin-bottom: 0.5rem;
            font-size: 1.4rem;
        }

        .menu-item p {
            color: #666;
            margin-bottom: 1rem;
            font-size: 1rem;
            line-height: 1.4;
        }

        .menu-item .price {
            color: #6e330b;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .menu-item .order-btn {
            background-color: #6e330b;
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 1rem;
            font-weight: bold;
            margin-top: auto;
            width: 100%;
        }

        .menu-item .order-btn:hover {
            background-color: #8b4513;
        }

        .menu-item .dietary-info {
            font-size: 0.9rem;
            color: #666;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
        }

        .menu-item .dietary-info span {
            margin-right: 0.5rem;
        }

        .menu-item .placeholder-img {
            width: 100%;
            height: 250px;
            background-color: #f5f5f5;
            border-radius: 8px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .menu-grid {
                grid-template-columns: 1fr;
            }
            
            .menu-item {
                height: auto;
                min-height: 450px;
            }

            .menu-category {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="menu-container">
        <?php foreach ($categories as $category => $items): ?>
            <div class="menu-category">
                <h2><?= htmlspecialchars($category) ?></h2>
                <div class="menu-grid">
                    <?php foreach ($items as $item): ?>
                        <div class="menu-item">
                            <?php if (!empty($item['image_url'])): ?>
                                <img src="<?= htmlspecialchars($item['image_url']) ?>" alt="<?= htmlspecialchars($item['name']) ?>">
                            <?php else: ?>
                                <div class="placeholder-img">No Image</div>
                            <?php endif; ?>
                            <h3><?= htmlspecialchars($item['name']) ?></h3>
                            <?php if (!empty($item['description'])): ?>
                                <p><?= htmlspecialchars($item['description']) ?></p>
                            <?php endif; ?>
                            <p class="price">$<?= number_format($item['price'], 2) ?></p>
                            <?php if (!empty($item['dietary_info'])): ?>
                                <p class="dietary-info"><?= htmlspecialchars($item['dietary_info']) ?></p>
                            <?php endif; ?>
                            <button class="order-btn" data-item-id="<?= $item['id'] ?>">Add to Cart</button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <section id="orderModal" class="modal">
        <article class="modal-content">
            <span class="close">&times;</span>
            <h2>Added to Cart!</h2>
            <p>Your item has been added to your cart.</p>
        </article>
    </section>

    <script>
        var modal = document.getElementById("orderModal");
        var buttons = document.querySelectorAll('.order-btn');
        buttons.forEach(button => {
            button.onclick = function() {
                var itemId = this.getAttribute('data-item-id');
                fetch('add_to_cart.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: 'item_id=' + encodeURIComponent(itemId)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        modal.style.display = "block";
                    } else {
                        alert(data.message || 'Error adding item to cart');
                    }
                })
                .catch(error => {
                    alert('Error adding item to cart');
                });
            }
        });
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html> 