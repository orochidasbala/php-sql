<?php
require "./databases/config.php";

if (!isset($_REQUEST['id'])) {
    header("Location: /");
    die();
} else {
    if (!filter_var($_REQUEST['id'], FILTER_VALIDATE_INT)) {
        header("Location: /");
        die();
    } else {
        $id = filter_var($_REQUEST['id'], FILTER_VALIDATE_INT);

        $query = "select * from books where id = :id limit 1";
        $results = $db_connection->prepare($query);
        $results->execute([
            'id' => $id
        ]);
        $result = $results->fetch();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="./databases/query/update.php" method="POST">
            <hr>
            <div class="form-group mt">
                <label class="text-primary" for="id">ID</label><br>
                <input type="text" readonly class="form-control mt" name="id" value="<?= $result['id']; ?>">
                <hr>
            </div>
            <div class="form-group mt">
                <label class="text-primary" for="title">Title</label><br>
                <input type="text" name="title" class="form-control mt" value="<?= $result['title']; ?>">
                <hr>
            </div>
            <div class="form-group mt">
                <label class="text-primary" for="author">Author</label><br>
                <input type="text" name="author" class="form-control mt" value="<?= $result['author']; ?>">
                <hr>
            </div>
            <div class="form-group mt">
                <label class="text-primary" for="language">Language</label><br>
                <input type="text" name="language" class="form-control mt" value="<?= $result['language']; ?>">
                <hr>
            </div>
            <input type="submit" value="update" class="btn btn-primary">
        </form>
    </div>
</body>

</html>