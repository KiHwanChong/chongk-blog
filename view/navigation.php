<?php
//this navigation is for the authenticated user
    require_once(__DIR__ . "/../model/config.php");
?>
<nav>
    <ul>
        <li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>
        <li><a href="<?php echo $path . "controller/logout-user.php" ?>">Logout</a></li>
        <li><a href="<?php echo $path . "changePW.php" ?>">Change Passwords</a></li>      
        <li><a href="<?php echo $path . "index.html" ?>">Portfolio</a></li>
    </ul>
</nav>