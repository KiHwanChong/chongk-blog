<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Change Passwords</h1>

<form method="post" action="<?php echo $path . "controller/create-newPW.php"; ?>">
    <div>
        <label for="password">Current Password: </label>
        <input type="password" name="password" />
    </div>
    
    <div>
        <label for="password">New Password: </label>
        <input type="password" name="npassword" />
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
    
</form>