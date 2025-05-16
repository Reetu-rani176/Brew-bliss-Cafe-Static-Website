<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Brew Bliss Cafe</title>
    <meta name="description" content="Latest news and updates from Brew Bliss Cafe.">
    <link rel="stylesheet" href="style.css">
    <style>
        .page-container {
            max-width: 800px;
            margin: 3rem auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            padding: 2.5rem 2rem;
        }
        .page-container h1 {
            color: #6e330b;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .page-container p {
            color: #333;
            font-size: 1.1rem;
            line-height: 1.7;
            text-align: center;
        }
        @media (max-width: 600px) {
            .page-container { padding: 1rem; }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="page-container">
        <h1>News</h1>
        <p>Stay tuned for the latest news and updates from Brew Bliss Cafe. New menu items, events, and more will be posted here soon!</p>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html> 