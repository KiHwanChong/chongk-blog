<?php
     require_once(__DIR__ . "/../model/config.php");
     
     //select the posts from the table
     $query = "SELECT * FROM posts";
     $result = $_SESSION["connection"]->query($query); 
     $dir = __DIR__ . "/../uploads/";
     $file_display = array('jpg', 'jpeg', 'png', 'gif');

     
     
     //echo out all posts selected above, enabling users to watch the posts.
     if($result) {
         while($row = mysqli_fetch_array($result)) {
             echo "<div class = 'post'>";
             echo "<h2>" . $row['title'] . "</h2>";
             echo "<br/ >";
             echo "<p>" . $row['post'] . "</h1>";
             echo "<br/>";          
             echo "<h3>" . $row['date'] . "</h3>";
             echo "</div>";

         }
     }
     
    
    if ( file_exists( $dir ) == false ) {
       echo 'Directory \'', $dir, '\' not found!';
    } else {
       $dir_contents = scandir( $dir );

        foreach ( $dir_contents as $file ) {
           $file_type = strtolower( end( explode('.', $file ) ) );
           if ( ($file !== '.') && ($file !== '..') && (in_array( $file_type, $file_display)) ) {
              echo '<img src="file_viewer.php?file=', base64_encode($dir . '/' . $file), '" alt="', $file, '"/>';
           break;
           }
        }
    }
    
    
   
     ?>
<div>
    <img src="../uploads/">
</div>
