<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/../style/style.css"/>
</head>
<body>
    <?php require_once __DIR__ . "/../partials/navbar.php" ?>
    <div>
        <h2>Add a post efficiently!</h2>
        <form method="get" action="">
            <label name="post_title">Post title</label>
            <input type="text" id="post_title" name="post_title" required></input>
            <label name="post_picture">Choose your picture</label>
            <input type="file" id="post_picture" name="post_picture" required></input>
        </form>
    </div>
    <?php require_once __DIR__ . "/../partials/footer.php" ?>
</body>
</html>