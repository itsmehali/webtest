<?php
session_start();
?>

<header>
    <nav class="nav-main">
        <div class="btn-toggle-nav"></div>
        <ul hidden>
            <li><a href="index.php">Home</a></li>
            <li><a href="austriagallery.php">Gallery</a></li>
            <li><a href="vienna.php" target="_blank">Vienna</a></li>
            <li><a href="#">asd</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <?php if (! empty($_SESSION)): ?>
            <div class="nav.logout">
                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </div>
        <?php else: ?>
            <div class="nav.login">
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                    <!--<button type="submit" name="signup-submit">Register</button>-->
                </form>
                <div class="nav.login"><a href="signup.php">Signup</a>
                </div>
            </div>
        <?php endif; ?>
    </nav>

    <aside class="nav-sidebar">
        <ul>
            <li><span>Projects</span></li>
            <li><a href="https://www.euronews.com/tag/austrian-politics" target="_blank" >Austria Politik</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Energy_in_Austria" target="_blank"  >Energy resources</a></li>
            <li><a href="https://www.austria.org/political-parties" target="_blank" >Political parties</a></li>
            <li><a href="vienna.php" target="_blank">Vienna</a></li>
            <li><a href="https://oe3.orf.at/" target="_blank">Oe3</a></li>
        </ul>
    </aside>
    <script defer src="js/main.js"></script>

</header>
