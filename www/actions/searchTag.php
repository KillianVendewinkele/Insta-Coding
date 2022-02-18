<?php 
session_start();

require_once __DIR__.'/../../src/db.php'; 

if(($_POST['tag']!= "all")){
    $sql = 'SELECT url,contenu,likes, idPost FROM post WHERE tag = :tag';
    $query = $db->prepare($sql);

    $query->execute([
        ':tag' => $_POST['tag'],
    ]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION['idPost']=$data;
    shuffle($_SESSION['idPost']);
    header("Location: http://127.0.0.1:12001/Home");
    die();
}

$sql = 'SELECT url, contenu,likes,idPost FROM post ';
    $query = $db->prepare($sql);
    $query->execute([]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION['idPost']=$data;
    shuffle($_SESSION['idPost']);


    header("Location: http://127.0.0.1:12001/Home");

//var_dump($_SESSION['idPost']['0']['likes']);