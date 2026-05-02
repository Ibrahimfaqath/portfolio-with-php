<link rel="stylesheet" href="style/header.css">
<nav class="navbar">
    <p>Ibrahim</p>

    <div class="menu-toggle">☰</div>

    <div class="nav-menu">
    <a href="#home">Home</a>
    <a href="#about">About Me</a>
    <a href="#portfolio">My Portfolio</a>

    <a href="http://wa.me/6282130208960" target="_blank" class="btn">Contact Me</a>

    <?php if (isset($_SESSION['login'])): ?>
        <a href="logout.php" class="btn">Logout</a>
    <?php else: ?>
        <a href="login.php" class="btn">Login</a>
    <?php endif; ?>    
    </div>
</nav>
   
