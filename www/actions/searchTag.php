<?php 
session_start();

require_once __DIR__.'/../../src/db.php'; 

if( empty($_POST['tag']) ){
    $sql = 'SELECT * FROM post';
    $query = $db->prepare($sql);
    $data = $query->fetch(PDO::FETCH_ASSOC);

    $_SESSION['idPost']=$data;


    ////header("Location: http://127.0.0.1:12001/Home "
    var_dump($_SESSION['idPost']);
    die();
}

$sql = 'SELECT * FROM post WHERE tag = :tag';
$query = $db->prepare($sql);

$query->execute([
	':tag' => $_POST['tag'],
]);
$data = $query->fetch(PDO::FETCH_ASSOC);

$_SESSION['idPost']=$data;
var_dump($_SESSION['idPost']);
