<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Brew Bliss Cafe - Menu</title>
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
        <div class="menu-category">
            <h2>Hot Coffee</h2>
            <p class="category-description">Start your day with our signature hot coffee selections, crafted with premium beans and perfect brewing techniques.</p>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="Images/Espersso.png" alt="Classic Espresso">
                    <h3>Classic Espresso</h3>
                    <p>Rich and bold single shot of espresso</p>
                    <p class="price">$2.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Espersso.png" alt="Double Espresso">
                    <h3>Double Espresso</h3>
                    <p>Two shots of our signature espresso</p>
                    <p class="price">$3.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Cappuccino.png" alt="Cappuccino">
                    <h3>Cappuccino</h3>
                    <p>Espresso with steamed milk and foam</p>
                    <p class="price">$4.00</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Latte.png" alt="Latte">
                    <h3>Latte</h3>
                    <p>Espresso with steamed milk and light foam</p>
                    <p class="price">$4.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Mocha-tea.png" alt="Mocha">
                    <h3>Mocha</h3>
                    <p>Espresso with chocolate and steamed milk</p>
                    <p class="price">$4.75</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Espersso.png" alt="Americano">
                    <h3>Americano</h3>
                    <p>Espresso with hot water</p>
                    <p class="price">$3.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="menu-category">
            <h2>Cold Coffee</h2>
            <p class="category-description">Refresh yourself with our selection of chilled coffee beverages, perfect for warm days or when you need a cool pick-me-up.</p>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="Images/iced-latte.jpg" alt="Iced Latte">
                    <h3>Iced Latte</h3>
                    <p>Espresso with cold milk over ice</p>
                    <p class="price">$4.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/cold-brew.png" alt="Cold Brew">
                    <h3>Cold Brew</h3>
                    <p>Slow-steeped coffee served over ice</p>
                    <p class="price">$4.75</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Frappuccino.png" alt="Frappuccino">
                    <h3>Frappuccino</h3>
                    <p>Blended coffee drink with whipped cream</p>
                    <p class="price">$5.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Iced-Mocha.png" alt="Iced Mocha">
                    <h3>Iced Mocha</h3>
                    <p>Espresso with chocolate and cold milk over ice</p>
                    <p class="price">$4.75</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="menu-category">
            <h2>Specialty Drinks</h2>
            <p class="category-description">Discover our unique creations that combine premium coffee with special flavors and ingredients for an extraordinary experience.</p>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="Images/caramel-macchiato.png" alt="Caramel Macchiato">
                    <h3>Caramel Macchiato</h3>
                    <p>Espresso with vanilla, steamed milk, and caramel drizzle</p>
                    <p class="price">$5.00</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Pumpkin-spice-latte.png" alt="Pumpkin Spice Latte">
                    <h3>Pumpkin Spice Latte</h3>
                    <p>Espresso with pumpkin spice and steamed milk</p>
                    <p class="price">$5.25</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Hazelnut-Latte.png" alt="Hazelnut Latte">
                    <h3>Hazelnut Latte</h3>
                    <p>Espresso with hazelnut syrup and steamed milk</p>
                    <p class="price">$4.75</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Vanilla-Bean-Frappuccino.png" alt="Vanilla Bean Frappuccino">
                    <h3>Vanilla Bean Frappuccino</h3>
                    <p>Blended vanilla drink with whipped cream</p>
                    <p class="price">$5.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="menu-category">
            <h2>Tea Selection</h2>
            <p class="category-description">Explore our carefully curated selection of teas, from classic black teas to soothing herbal infusions.</p>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="Images/earl-grey.png" alt="Earl Grey">
                    <h3>Earl Grey</h3>
                    <p>Classic black tea with bergamot</p>
                    <p class="price">$3.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/AsianTea.jpeg" alt="Green Tea">
                    <h3>Green Tea</h3>
                    <p>Light and refreshing Japanese green tea</p>
                    <p class="price">$3.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Chai-Latte.png" alt="Chai Latte">
                    <h3>Chai Latte</h3>
                    <p>Spiced tea with steamed milk</p>
                    <p class="price">$4.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Chamomile-tea.png" alt="Chamomile">
                    <h3>Chamomile</h3>
                    <p>Calming herbal tea</p>
                    <p class="price">$3.50</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="menu-category">
            <h2>Pastries & Snacks</h2>
            <p class="category-description">Complement your drink with our freshly baked pastries and delicious snacks, made with quality ingredients.</p>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="Images/Croissant.png" alt="Croissant">
                    <h3>Croissant</h3>
                    <p>Buttery, flaky pastry</p>
                    <p class="price">$3.50</p>
                    <p class="dietary-info"><span>🥐</span> Vegetarian</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Chocolate-Muffin.png" alt="Chocolate Muffin">
                    <h3>Chocolate Muffin</h3>
                    <p>Rich chocolate muffin with chocolate chips</p>
                    <p class="price">$3.75</p>
                    <p class="dietary-info"><span>🧁</span> Vegetarian</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Blueberry-Scone.png" alt="Blueberry Scone">
                    <h3>Blueberry Scone</h3>
                    <p>Buttery scone with fresh blueberries</p>
                    <p class="price">$3.50</p>
                    <p class="dietary-info"><span>🥐</span> Vegetarian</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Images/Almond-Biscotti.png" alt="Almond Biscotti">
                    <h3>Almond Biscotti</h3>
                    <p>Crunchy Italian cookies with almonds</p>
                    <p class="price">$3.25</p>
                    <p class="dietary-info"><span>🍪</span> Vegetarian</p>
                    <button class="order-btn">Add to Cart</button>
                </div>
            </div>
        </div>
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
                modal.style.display = "block";
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