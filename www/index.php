<?php
session_start();
require_once __DIR__.'/../src/db.php'; 
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
    case '/Profil' :
        require __DIR__ . '/../src/pages/profil.php';
        break;
    case '/Comment' :
        require __DIR__ . '/../src/pages/comment.php';
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"  ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" ></script>
    <script src="//code.jquery.com/jquery-2.1.4.js"></script>
    <style>
        #fond{
        margin-top:30px;
        height:auto;
        }
        .card-wrapper {
        margin-bottom: 30px;
        }
        .card-image .card .card-img-wrapper {
        height: 100%;
        }
        .card-image .card .card-body {
        display: none;
        }
        .card-image-title-description .card .card-img-wrapper {
        max-height: 160px;
        }
        .card-image-title-description .card {
        position: relative;
        min-height: 300px;
        }
        .card-image-title-description .card .card-body {
        height: auto;
        position: relative;
        top: 0;
        margin-bottom: -70px;
        }
        .card-image-title-description .card:hover .card-body {
        top: -70px;
        }
        .card-image-title-description .card .card-body .card-title {
        margin-bottom: .75rem;
        }
        .card {
        display: inline-block;
        position: relative;
        overflow: hidden;
        max-height: 400px;
        max-width:400px;
        height: 100%;
        }
        .card:hover {
        box-shadow: 8px 12px 31px -10px yellow;
        }
        .card-img-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        overflow: hidden;
        }
        .card-img-wrapper img {
        transition: 1.5s ease;
        }
        .card:hover .card-img-wrapper img {
        transform: scale(1.15);
        }
        .card-body .card-title {
        margin-bottom: calc(50% + 20px);
        transition: 1.5s ease;
        }
        .card:hover .card-body .card-title {
        margin-bottom: .75rem;
        }

        .card-body {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 70px;
        background-color: #fff;
        transition: 1.5s ease;
        }
        .card-content {
        left: 0;
        right: 0;
        overflow: hidden;
        width: 100%;
        height: auto;
        transition: 1.5s ease;
        margin-top:3%;
        }
        .card:hover .card-body {
        height: 100%;
        }
        .card:hover .card-content {
        bottom: 0;
        
        }
         
        .card-img-top {
        width: 100%;
        height:100%;
        max-width: 400px;
        max-height: 400px;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
        overflow:scroll;
        }
        .com{
            width: 100%;
            height: 200px;
            overflow: scroll;
        }
        
       
    </style>
    
</head>
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
</html>
