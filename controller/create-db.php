<?php
   require_once(__DIR__ . "/../model/config.php");
  
   //creating posts. NOT NULL prevents an empty box. title's characters are less than 255. 
   //inserting date in the posts
   $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
           . "id int(11) NOT NULL AUTO_INCREMENT,"
           . "title varchar(255) NOT NULL,"
           . "post text NOT NULL,"
           . "date varchar(255) NOT NULL,"
           . "PRIMARY KEY (id))");
   
   //if it creates posts successfully, echo out it is successful. if not, echo out error occurs 
   if($query) {
       echo "<p>Succesfully created table: posts</p>";
   }
   else {
       echo "<p>" . $_SESSION["connection"]->error . "</p>";
   }
   
   //creating users. the characters of username, email, password, and salt are less than 30, 50, 128, and 128, respectively.
    $query = $_SESSION["connection"]->query("CREATE TABLE users ("
           . "id int(11) NOT NULL AUTO_INCREMENT,"
           . "username varchar(30) NOT NULL,"
           . "email varchar(50) NOT NULL,"
           . "password char(128) NOT NULL, "
           . "salt char(128) NOT NULL, "
           . "PRIMARY KEY (id))");
    
    if($query) {
        echo "<p>Successfully created table: users</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }