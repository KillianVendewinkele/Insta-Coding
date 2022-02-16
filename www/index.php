
<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
   case '/' :
        require __DIR__ . '/../src/pages/login.php';
        break;
    case '/login' :
        require __DIR__ . '/../src/pages/login.php';
        break;
    case '/Login' :
        require __DIR__ . '/../src/pages/login.php';
        break;
    case '/Create' :
        require __DIR__ . '/../src/pages/addPost.php';
        break;
   default:
        require __DIR__ . '/../src/views/pages/404.php';
        break;
    
}?>
