<!DOCTYPE html>
<nav class="navbar" role="navigation" aria-label="Main Navigation">
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
        <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
            <a href="cart.php" class="nav-button" id="cartButton">Cart</a>
            <div class="user-menu">
                <?php if(isset($_SESSION['user_name'])): ?>
                    <span class="user-name">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                    <span class="user-role">(<?php echo htmlspecialchars($_SESSION['user_role']); ?>)</span>
                <?php endif; ?>
                
                <?php if(isset($_SESSION['user_role'])): ?>
                    <?php if($_SESSION['user_role'] === 'admin'): ?>
                        <a href="admin/dashboard.php" class="nav-button admin-btn">Admin</a>
                    <?php elseif($_SESSION['user_role'] === 'member'): ?>
                        <a href="member/dashboard.php" class="nav-button member-btn">Member Area</a>
                    <?php endif; ?>
                <?php endif; ?>
                
                <a href="logout.php" class="nav-button">Logout</a>
            </div>
        <?php else: ?>
            <a href="login.php" class="nav-button">Login</a>
            <a href="register.php" class="nav-button">Register</a>
            <a href="admin/login.php" class="nav-button admin-btn">Admin Login</a>
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
    color: white;
    text-decoration: none;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.nav-button:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.user-menu {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.user-name {
    color: white;
    font-weight: bold;
}

.user-role {
    color: #ffd700;
    font-size: 0.9rem;
}

.admin-btn {
    background-color: #dc3545;
}

.admin-btn:hover {
    background-color: #c82333;
}

.member-btn {
    background-color: #28a745;
}

.member-btn:hover {
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

.admin-btn {
    background-color: #ffd700;
    color: #6e330b;
}

.admin-btn:hover {
    background-color: #ffed4a;
    color: #6e330b;
}
</style>

<script>
//document.getElementById('cartButton').addEventListener('click', function(e) {
//    e.preventDefault();
//    var modal = document.getElementById("orderModal");
//    modal.style.display = "block";
//});//
</script> 