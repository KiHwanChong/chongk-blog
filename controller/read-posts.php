<?php
     require_once(__DIR__ . "/../model/config.php");
     
     //select the posts from the table
     $query = "SELECT * FROM posts";
     $result = $_SESSION["connection"]->query($query);
     
     
     //echo out all posts selected above, enabling users to watch the posts.
     if($result) {
         while($row = mysqli_fetch_array($result)) {
             echo "<div class = 'post'>";
             echo "<h2>" . $row['title'] . "</h2>";
             echo "<br/ >";
             echo "<p>" . $row['post'] . "</h1>";
             echo "<br/>";          
             echo date('Y-m-d H:i:s');
             echo "</div>";
             
                     
         }
     }