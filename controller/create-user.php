<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
    
    $hashedPassword = crypt($password, $salt);

    $checkU = $_SESSION["connection"]->query("SELECT username FROM users WHERE username = '$username'");
     
     if($checkU->num_rows >= 1) {
         $row = $checkU->fetch_array();
         
        if($row["username"] == '$username') {
             echo "<p>already existing username</p>";
             
         }
         else {
             echo "<p>already existing username</p>";
         }
     }
     else {
          $query = $_SESSION["connection"]->query("INSERT INTO users SET "
            . "email = '$email',"
            . "username = '$username',"
            . "password = '$hashedPassword',"
            . "salt = '$salt'");
          
         echo "<p>successfully created</p>";
     }
    
//    
//     if($query) {
//        echo "successfully created user: $username";
//    }
//    else {
//        echo "<p>" . $_SESSION["connection"]->error . "</p>";
//    }
//
//    