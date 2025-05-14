<!DOCTYPE html>
<nav class="navbar">
    <div class="nav-brand">
        <a href="index.php">Brew Bliss Cafe</a>
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="nav-buttons">
        <a href="#" class="nav-button" id="cartButton">Cart</a>
        <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
            <div class="user-menu">
                <span class="user-name">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                <a href="logout.php" class="nav-button">Logout</a>
            </div>
        <?php else: ?>
            <a href="login.php" class="nav-button">Login</a>
            <a href="register.php" class="nav-button">Register</a>
        <?php endif; ?>
    </div>
</nav>

<style>
.navbar {
    background-color: #6e330b;
    padding: 1rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.nav-brand a {
    color: white;
    text-decoration: none;
    font-size: 1.5rem;
    font-weight: bold;
}

.nav-links {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 2rem;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 1.1rem;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #ffd700;
}

.nav-buttons {
    display: flex;
    gap: 1rem;
    align-items: center;
}

.nav-button {
    background-color: white;
    color: #6e330b;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
}

.nav-button:hover {
    background-color: #ffd700;
    color: #6e330b;
}

.user-menu {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.user-name {
    color: white;
    font-size: 1.1rem;
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1001;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    border-radius: 10px;
    text-align: center;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        padding: 1rem;
    }

    .nav-links {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
        margin: 1rem 0;
    }

    .nav-buttons {
        flex-direction: column;
        width: 100%;
    }

    .nav-button {
        text-align: center;
    }

    .user-menu {
        flex-direction: column;
        width: 100%;
    }

    .user-name {
        margin-bottom: 0.5rem;
    }
}
</style>

<script>
document.getElementById('cartButton').addEventListener('click', function(e) {
    e.preventDefault();
    var modal = document.getElementById("orderModal");
    modal.style.display = "block";
});
</script> 