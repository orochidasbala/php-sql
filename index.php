<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Books</title>
</head>

<body>
    <div class="container">
        <h2 class="text-primary">Books Library For Programming</h2>
        <?php
        require "databases/config.php";
        // require "./addBook.php";
        require "databases/query/read.php";
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th id="sr">ID</th>
                    <th>TITLE</th>
                    <th>AUTHOR</th>
                    <th>LANGUAGE</th>
                    <th>EDIT</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result) : ?>
                    <tr>
                        <td><?= $result['id'] ?></td>
                        <td><?= $result['title'] ?></td>
                        <td><?= $result['author'] ?></td>
                        <td><?= $result['language'] ?></td>
                        <td><a href="./edit.php?id=<?= $result['id'];?>">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php
        require "./addBook.php";
        ?>
    </div>


</body>

</html>