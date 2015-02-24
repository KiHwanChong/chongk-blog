<?php
    require_once(__DIR__ . "/../model/config.php");

    //setting up title and post, which should be filtered into proper formats
    //date does not need anythting but its own format (year, month, day, hour, minute, and second)
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    $date = date('Y-m-d H:i:s');
    
    //creating posts, inserting title and post. And date...
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post', date = '$date'");
    
    if($query) {
        echo "<p>Successfully inserted posts: $title</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    
    ?>

<nav>
    <ul>
        <li><a href="<?php echo $path . "index.php" ?>">Go back to home</a></li>
    </ul>
</nav>