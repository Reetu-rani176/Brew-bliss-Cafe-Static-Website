<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the story behind Brew Bliss Cafe - our journey, values, and commitment to serving exceptional coffee and creating memorable experiences for our customers.">
    <meta name="keywords" content="Brew Bliss Cafe story, cafe history, coffee shop about, cafe team, coffee craftsmanship, cafe values, coffee experience, cafe mission, coffee culture, cafe heritage">
    <meta name="author" content="Brew Bliss Cafe Team">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="About Brew Bliss Cafe - Our Story & Values">
    <meta property="og:description" content="Learn about Brew Bliss Cafe's journey, our passionate team, and our commitment to exceptional coffee and customer experience.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brewblisscafe.com/about">
    <link rel="canonical" href="https://brewblisscafe.com/about">
    <link rel="stylesheet" href="style.css">
    <title>About Brew Bliss Cafe - Our Story & Values | About Us</title>
    <style>
        .about-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .about-section {
            background: #fff;
            padding: 3rem;
            margin-bottom: 3rem;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .about-section h2 {
            color: #6e330b;
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .about-section p {
            color: #333;
            line-height: 1.8;
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        .about-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .value-card {
            background: #f9f5f2;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
        }

        .value-card h3 {
            color: #6e330b;
            margin-bottom: 1rem;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .team-member {
            text-align: center;
        }

        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .team-member h3 {
            color: #6e330b;
            margin-bottom: 0.5rem;
        }

        .team-member p {
            color: #666;
            font-style: italic;
        }

        .sourcing-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: center;
        }

        .sourcing-image {
            width: 100%;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .about-section {
                padding: 2rem;
            }

            .sourcing-section {
                grid-template-columns: 1fr;
            }

            .team-member img {
                width: 150px;
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="about-container">
        <div class="about-section">
            <h2>Our Story</h2>
            <img src="Images/OurStory.jpg" alt="Brew Bliss Cafe Story" class="about-image">
            <p>Founded in 2020, Brew Bliss Cafe began as a dream to create more than just a coffee shop – we wanted to create a haven where people could find their perfect blend of comfort, community, and exceptional coffee. What started as a small corner cafe has grown into a beloved gathering place, but our commitment to quality and community remains unchanged.</p>
            <p>Our journey began when our founder, Sarah Chen, combined her passion for coffee with her vision of creating a space where everyone feels welcome. After years of traveling the world, learning from coffee farmers, and perfecting brewing techniques, she brought her expertise back home to create Brew Bliss Cafe.</p>
        </div>

        <div class="about-section">
            <h2>Our Mission</h2>
            <p>At Brew Bliss Cafe, our mission is simple yet profound: to serve exceptional coffee while creating a warm, welcoming environment where connections are made and moments are cherished. We believe that every cup of coffee should be an experience – one that delights the senses and brings people together.</p>
            <p>We're committed to:</p>
            <ul>
                <li>Sourcing the finest coffee beans from sustainable farms</li>
                <li>Training our baristas to craft the perfect cup every time</li>
                <li>Creating a space where everyone feels at home</li>
                <li>Supporting our local community and global coffee farmers</li>
            </ul>
        </div>

        <div class="about-section">
            <h2>Our Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <h3>Quality</h3>
                    <p>We never compromise on the quality of our coffee, ingredients, or service. Every cup is brewed with care and attention to detail.</p>
                </div>
                <div class="value-card">
                    <h3>Sustainability</h3>
                    <p>We're committed to sustainable practices, from sourcing ethically grown coffee to using eco-friendly packaging and reducing waste.</p>
                </div>
                <div class="value-card">
                    <h3>Community</h3>
                    <p>We believe in building strong relationships with our customers, employees, and the community we serve.</p>
                </div>
                <div class="value-card">
                    <h3>Innovation</h3>
                    <p>We constantly explore new brewing methods and flavors while respecting traditional coffee craftsmanship.</p>
                </div>
            </div>
        </div>

        <div class="about-section">
            <h2>Our Coffee Journey</h2>
            <div class="sourcing-section">
                <img src="Images/Sourcing.png" alt="Coffee Sourcing" class="sourcing-image">
                <div>
                    <p>Our coffee journey begins at the source. We work directly with coffee farmers in regions like Ethiopia, Colombia, and Costa Rica, ensuring fair trade practices and sustainable farming methods. Our beans are carefully selected, roasted to perfection in small batches, and brewed with precision to bring out their unique flavors.</p>
                    <p>From the moment the coffee cherry is picked to the final pour into your cup, we maintain strict quality control to ensure you experience the perfect balance of flavors in every sip.</p>
                </div>
            </div>
        </div>

        <div class="about-section">
            <h2>Meet Our Team</h2>
            <p>Behind every great cup of coffee is a team of passionate individuals dedicated to creating the perfect experience for our customers. Our team of expert baristas and staff members are not just coffee enthusiasts – they're coffee artists who take pride in their craft.</p>
            <div class="team-grid">
                <div class="team-member">
                    <img src="Images/pro-4.jpg" alt="Sarah Chen">
                    <h3>Sarah Chen</h3>
                    <p>Founder & Head Barista</p>
                </div>
                <div class="team-member">
                    <img src="Images/pro1.jpg" alt="Michael Rodriguez">
                    <h3>Michael Rodriguez</h3>
                    <p>Coffee Roaster</p>
                </div>
                <div class="team-member">
                    <img src="Images/pro-2.jpg" alt="Emma Thompson">
                    <h3>Emma Thompson</h3>
                    <p>Pastry Chef</p>
                </div>
                <div class="team-member">
                    <img src="Images/pro-3.jpg" alt="David Kim">
                    <h3>David Kim</h3>
                    <p>Store Manager</p>
                </div>
            </div>
        </div>

        <div class="about-section">
            <h2>Our Commitment to Excellence</h2>
            <p>At Brew Bliss Cafe, we believe that excellence is in the details. From the temperature of the water to the grind size of the beans, every aspect of our coffee preparation is carefully considered. Our baristas undergo extensive training to master various brewing methods, ensuring that each cup meets our high standards.</p>
            <p>We're constantly evolving and learning, attending coffee workshops and competitions to stay at the forefront of coffee culture. Our commitment to excellence extends beyond our coffee – it's reflected in our customer service, our atmosphere, and our dedication to creating memorable experiences for everyone who walks through our doors.</p>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html> 