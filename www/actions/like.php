<?php
    session_start();
    require_once __DIR__.'/../../src/db.php'; 
    include_once __DIR__ . '/../../src/pages/home.php';

    if(empty($_POST['val']) ||empty($_POST['idPost'])) {
    
    header("Location: http://127.0.0.1:12001/Home ");
    }
    $sql = 'UPDATE post SET likes = :likes WHERE idPost = :idPost';
    $query = $db->prepare($sql);
    $query->execute([
	    ':likes'=> 1,
        ':idPost'=>$_POST['idPost'],
]);
    header("Location: http://127.0.0.1:12001/Home ");

    //header ('location: /Home');

?>
