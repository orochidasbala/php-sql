<?php 

    require "../config.php";

    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $author = $_REQUEST['author'];
    $language = $_REQUEST['language'];

    $query = "update books set title='$title', author='$author', language='$language' where id=$id";
    // die(var_dump($query));
    
    if($db_connection->exec($query)) {
        header("Location: /");
    } else {
        echo "Failed";
    }