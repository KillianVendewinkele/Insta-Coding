
<?php
session_start();
$content =" ";

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
   case '/' :
        require __DIR__ . '/../src/pages/login.php';
        break;
    case '/Login' :
        require __DIR__ . '/../src/pages/login.php';
        break;
    case '/Home' :
        require __DIR__ . '/../src/pages/home.php';
        break;
    case '/Create' :
        require __DIR__ . '/../src/pages/addPost.php';
        break;
        case '/Logout' :
        require __DIR__ . '/../www/actions/logout.php';
        break;
   default:
        http_response_code(404);
        require __DIR__ . '/../src/pages/404.php';
        break;
    
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title><?= $title ?></title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"defer ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>
    <script src="//code.jquery.com/jquery-2.1.4.js"></script>
    <link rel="stylesheet" href="/src/style/style.css"/>
</head>
  <style>
  #fond{
      margin-top:30px;
      height:1000px;
  }
  </style>
<body style="margin-top:100px;">
<?php require_once __DIR__ . "/../src/partials/navbar.php" ?>
 <section id="fond">
<?php if($content == " "){
        echo $content;
}else{
    echo $content;
} ?>
</section>
</body>
<footer>
<?php require(__DIR__ . '/../src/partials/footer.php'); ?>
</footer>
</html>
