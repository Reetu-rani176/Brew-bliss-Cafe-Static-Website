<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Brew Bliss Cafe - Your premier destination for artisanal coffee, gourmet pastries, and a cozy atmosphere. Experience exceptional coffee craftsmanship in the heart of the city.">
    <meta name="keywords" content="Brew Bliss Cafe, artisanal coffee, gourmet pastries, cafe, coffee shop, specialty coffee, coffee house, cafe menu, coffee drinks, pastries, desserts, cafe atmosphere, coffee experience">
    <meta name="author" content="Brew Bliss Cafe Team">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Brew Bliss Cafe - Artisanal Coffee & Gourmet Pastries">
    <meta property="og:description" content="Experience exceptional coffee craftsmanship and gourmet pastries in a cozy atmosphere at Brew Bliss Cafe.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brewblisscafe.com">
    <link rel="canonical" href="https://brewblisscafe.com">
    <link rel="stylesheet" href="style.css">
    <title>Brew Bliss Cafe - Artisanal Coffee & Gourmet Pastries | Home</title>
    <style>
        .container {
            display: flex;
            width: 100%;
            height: 400px;
            background-color: #ddd;
            overflow: hidden;
            position: relative;
        }

        .box {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            color: rgb(167, 167, 167);
            cursor: pointer;
            transition: background-color 0.5s ease-in-out, transform 0.5s ease-in-out, opacity 0.3s ease-in-out;
            text-align: center;
            position: relative;
        }

        .box1 { background-color: #2b0b04; }
        .box2 { background-color: #041d2f; }
        .box3 { background-color: #053005; }

        .box1:hover { background-image: url(Images/Latte.png); background-size: cover; background-position: center; color: transparent; }
        .box2:hover { background-image: url(Images/Cappuccino.png); background-size: cover; background-position: center; color: transparent; }
        .box3:hover { background-image: url(Images/Espersso.png); background-size: cover; background-position: center; color: transparent; }

        .box span {
            transition: opacity 0.3s ease-in;
        }

        .box:hover span {
            opacity: 0;
        }

        .info-box {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: rgb(167, 167, 167);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            text-align: center;
        }

        .box:hover .info-box {
            opacity: 1;
        }

        @media (max-width: 1100px) {
            .container { flex-direction: column; height: auto; }
            .box { height: 300px; }
        }
    </style>
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
        <article class="box box1" onclick="window.location.href='menu.php'">
            Latte
            <section class="info-box">
                <h3 style="margin-top: 70px;">Latte</h3>
                <p style="font-size: 15px; padding: 20px;">A Latte is a creamy coffee with espresso and steamed milk, topped with a light foam. It has a smooth, mild flavor.</p>
            </section>
        </article>
        <article class="box box2" onclick="window.location.href='menu.php'">
            Cappuccino
            <section class="info-box">
                <h3 style="margin-top: 70px;">Cappuccino</h3>
                <p style="font-size: 15px; padding: 20px;">Cappuccino has a bold espresso flavor balanced with creamy, steamed milk and a frothy foam topping. It's slightly bitter with a smooth, rich texture.</p>
            </section>
        </article>
        <article class="box box3" onclick="window.location.href='menu.php'">
            Espresso
            <section class="info-box">
                <h3 style="margin-top: 70px;">Espresso</h3>
                <p style="font-size: 15px; padding:20px;">Espresso is a strong, concentrated coffee with a bold, rich flavor. It's slightly bitter, with hints of chocolate, caramel, and sometimes fruity acidity, topped with a smooth layer of crema.</p>
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
            <section style="padding-top: 20px;">
                <a href="about.php">About</a>
                <a href="news.php">News</a>
                <a href="content_guide.php">Content Guide</a>
                <a href="underground_store.php">Underground Store</a>
                <a href="privacy.php">Privacy</a>
                <a href="terms.php">Terms of Use</a>
                <a href="advertising.php">Advertising</a>
                <a href="jobs.php">Jobs</a>
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
</body>
</html> 