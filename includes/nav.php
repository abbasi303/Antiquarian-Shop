<nav class="navbar">
    <div class="link-container">
        <a href="/">
            <img class="nav-logo" src="/../assets/nav-logo.png" />
        </a>
        <div class="links-right">
            <a href="#">Products</a>
            <a href="/../api/login.php">Log in</a>
            <a href="/../api/logout.php">Log out</a>
            <a href="/../api/register.php">Register</a>
            <a href="/../api/bookrequest.php">Bookrequest</a>


            <a href="#"><?= isset($user) ? $user['fname'].' '.$user['lname'] : 'Guest' ?></a>
        </div>
    </div>
    <img class="nav-tail" src="/../assets/nav-tail.svg" />
</nav>
