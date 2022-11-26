<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <title>Books</title>
</head>

<body>
    <h1>My Books Library</h1>
    <?php
        require "databases/config.php";
        require "./addBook.php";
        require "databases/query/read.php";
    ?>
    <table>
        <th id="sr">Sr.</th>
        <th>Book Title</th>
        <th>Author Name</th>
        <th>Language</th>


        <?php foreach ($results as $result) : ?>
            <tr>
                <td id="sr"><?= $result['id'] ?></td>
                <td id="name"><?= $result['title'] ?></td>
                <td id="author"><?= $result['author'] ?></td>
                <td id="language"><?= $result['language'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- <a href="addBook.php">Add New Book</a> -->
</body>

</html>