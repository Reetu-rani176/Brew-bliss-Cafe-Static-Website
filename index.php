<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Brew Bliss Cafe - Home</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="HomePic">
        <article class="content">
            <h1 style="font-size:90px; margin-bottom: 20px;">Brew Bliss Cafe</h1>
            <p>- The Perfect Fix for Your Cravings -</p>
        </article>
    </section>

    <section class="container">
        <article class="box box1">
            Latte
            <section class="info-box">
                <h3 style="margin-top: 70px;">Latte</h3>
                <p style="font-size: 15px; padding: 20px;">A Latte is a creamy coffee with espresso and steamed milk, topped with a light foam. It has a smooth, mild flavor.</p>
                <button class="order-button" style="width:max-content; background-color: #6e330b; color: white;">Order Now</button>
            </section>
        </article>
        <article class="box box2">
            Cappuccino
            <section class="info-box">
                <h3 style="margin-top: 70px;">Cappuccino</h3>
                <p style="font-size: 15px; padding: 20px;">Cappuccino has a bold espresso flavor balanced with creamy, steamed milk and a frothy foam topping. It's slightly bitter with a smooth, rich texture.</p>
                <button class="order-button" style="width:max-content; background-color: #6e330b; color: white;">Order Now</button>
            </section>
        </article>
        <article class="box box3">
            Espresso
            <section class="info-box" >
                <h3 style="margin-top: 70px;">Espresso</h3>
                <p style="font-size: 15px; padding:20px;">Espresso is a strong, concentrated coffee with a bold, rich flavor. It's slightly bitter, with hints of chocolate, caramel, and sometimes fruity acidity, topped with a smooth layer of crema.</p>
                <button class="order-button" style="width:max-content; background-color: #6e330b; color: white;">Order Now</button>
            </section>
        </article>
    </section>
    
    <section class="New">
        <section style="padding:10px;">
        <h3>
            A Little About Brew Bliss
        </h3>
        "Brew Bliss Cafe is your go-to haven for exceptional coffee, good vibes, and a peaceful atmosphere. Our carefully crafted drinks and inviting ambiance make it the perfect place to relax, work, or meet friends. Come for the coffee, stay for the bliss!"
    </section>
    </section>
    
    <footer class="footer">
        <article class="content">
            <section class="social-icons">
                <a href="#"><img src="Images/facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="Images/twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="Images/instagram-icon.png" alt="Instagram"></a>
                <a href="#"><img src="Images/youtube-icon.png" alt="YouTube"></a>
            </section>
            <section style="padding-top: 20px;">
                <a href="#">About</a>
                <a href="#">News</a>
                <a href="#">Content Guide</a>
                <a href="#">Underground Store</a>
                <a href="#">Privacy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Advertising</a>
                <a href="#">Jobs</a>
            </section>
            <p style="padding-top: 20px;">© 2025 Brew Bliss Cafe - Goodbye Cravings -</p>
        </article>
    </footer>

    <section id="orderModal" class="modal">
        <article class="modal-content">
            <span class="close">&times;</span>
            <h2>Order Placed!</h2>
            <p>Your order has been successfully placed. Enjoy your drink!</p>
        </article>
    </section>

    <script>
        var modal = document.getElementById("orderModal");
        var buttons = document.querySelectorAll('.order-button');
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