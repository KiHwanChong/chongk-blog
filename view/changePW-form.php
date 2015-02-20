<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Change Passwords</h1>

<!--it connects this page to the create-newPW page-->
<form method="post" action="<?php echo $path . "controller/create-newPW.php"; ?>">
    <!--each div provides a box for inputting username, password, and new password-->
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>
    
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div>    
    <div>
        <label for="password">New Password: </label>
        <input type="password" name="npassword" />
    </div>
    <!--submit this information to create-newPW page-->
    <div>
        <button type="submit">Submit</button>
    </div>
    
</form>