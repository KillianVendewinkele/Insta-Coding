<?php 
session_start();

require_once __DIR__.'/../../src/db.php'; 

if( isset($_POST['tag']) ){
    $sql = 'SELECT url,contenu,likes FROM post WHERE tag = :tag';
    $query = $db->prepare($sql);

    $query->execute([
        ':tag' => $_POST['tag'],
    ]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION['idPost']=$data;
    header("Location: http://127.0.0.1:12001/Home");
    die();
}

$sql = 'SELECT url,contenu,likes FROM post ORDER BY RAND () LIMIT ';
    $query = $db->prepare($sql);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION['idPost']=$data;


    //header("Location: http://127.0.0.1:12001/Home");
    var_dump($_SESSION['idPost']);
    die();
//var_dump($_SESSION['idPost']['0']['likes']);