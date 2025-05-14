<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Brew Bliss Cafe - Contact Us</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="contact-container">
        <h1>Contact Us</h1>
        
        <div class="contact-content">
            <section class="contact-info">
                <h2>Get in Touch</h2>
                <div class="info-item">
                    <h3>Address</h3>
                    <p>123 Coffee Street<br>Brew City, BC 12345</p>
                </div>
                <div class="info-item">
                    <h3>Hours</h3>
                    <p>Monday - Friday: 7am - 8pm<br>
                    Saturday - Sunday: 8am - 6pm</p>
                </div>
                <div class="info-item">
                    <h3>Contact</h3>
                    <p>Phone: (555) 123-4567<br>
                    Email: info@brewblisscafe.com</p>
                </div>
            </section>

            <section class="contact-form">
                <h2>Send us a Message</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="submit-button">Send Message</button>
                </form>
            </section>
        </div>
    </section>

    <style>
    .contact-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    .contact-container h1 {
        text-align: center;
        color: #6e330b;
        margin-bottom: 2rem;
    }

    .contact-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
    }

    .contact-info, .contact-form {
        background: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .contact-info h2, .contact-form h2 {
        color: #6e330b;
        margin-bottom: 1.5rem;
    }

    .info-item {
        margin-bottom: 1.5rem;
    }

    .info-item h3 {
        color: #6e330b;
        margin-bottom: 0.5rem;
    }

    .info-item p {
        color: #666;
        line-height: 1.6;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        color: #6e330b;
        margin-bottom: 0.5rem;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 0.8rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
    }

    .submit-button {
        background-color: #6e330b;
        color: white;
        padding: 0.8rem 1.5rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .submit-button:hover {
        background-color: #8b4120;
    }

    @media (max-width: 768px) {
        .contact-content {
            grid-template-columns: 1fr;
        }
    }
    </style>
</body>
</html> 