<?php
//this navigation is for the user who is not authenticated yet
    require_once(__DIR__ . "/../model/config.php");
?>
<nav>
    <ul>
        <!--direct the user to login and register page-->
        <li><a href="<?php echo $path . "login.php" ?>">Login</a></li>
        <li><a href="<?php echo $path . "register.php" ?>">Register</a></li>
    </ul>
</nav>