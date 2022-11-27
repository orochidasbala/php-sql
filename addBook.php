<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <form action="databases/query/create.php" method="post">
        <div class="form-group">
            <input class="form-control mt" type="text" name="bookname" placeholder="book title">
            <input class="form-control mt" type="text" name="author" placeholder="author name">
            <input class="form-control mt" type="text" name="language" placeholder="language">

            <input class="btn btn-primary mt" type="submit" value="add book">
            <a class="btn btn-primary mt" href="https://drive.google.com/drive/folders/16yhltpJic74knyGJn9C-iJhF_sSNQwj8?usp=share_link">PDF Drive</a>
        </div>
    </form>
</body>

</html>