<?php
require "../config.php";

if ($_REQUEST['author']) {
    $bookname = $_REQUEST['bookname'];
    $author = $_REQUEST['author'];
    $language = $_REQUEST['language'];

    $create = "insert into books (title,author,language) values ('$bookname','$author','$language')";

    if ($db_connection->exec($create)) {
        echo "Query OK";
    } else {
        echo "Failed";
    }

    header("Location: /");
}
