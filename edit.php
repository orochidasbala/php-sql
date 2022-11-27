<?php
require "./databases/config.php";
$id = $_REQUEST['id'];

$query = "select * from books where id=$id";
$results = $db_connection->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/style.css">
</head>

<body>
    <form class="ctn" action="./databases/query/update.php" method="POST">
        <?php foreach ($results as $result) : ?>
            <div class="blk">
                <label>ID</label>
                <input type="text" name="id" value="<?= $result['id']; ?>">
            </div>
            <div class="blk">
                <label>Title</label>
                <input type="text" name="title" value="<?= $result['title']; ?>">            
            </div>
            <div class="blk">
                <label>Author</label>
                <input type="text" name="author" value="<?= $result['author']; ?>">
            </div>
            <div class="blk">
                <label>Language</label>
                <input type="text" name="language" value="<?= $result['language']; ?>">
            </div>
            <input type="submit" value="update">
        <?php endforeach; ?>
    </form>
</body>

</html>