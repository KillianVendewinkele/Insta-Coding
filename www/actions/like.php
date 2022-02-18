<?php
    session_start();
    require_once DIR.'/../../src/db.php'; 
    include_once DIR . '/../../src/pages/home.php';

    if($isliked) {
            $sql = 'UPDATE post SET likes = :likes WHERE idPost = :idPost';
            $query = $db->prepare($sql);
            $query->execute([
                ':likes' => $_SESSION['likes']-1,
                ':idPost' => $_POST['idPost']
            ]);
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['likes'] = $_SESSION['likes']-1;
            $isliked = false;
    }
    else if (!$isliked) {
            $sql = 'UPDATE post SET likes = :likes WHERE idPost = :idPost';
            $query = $db->prepare($sql);
            $query->execute([
                ':likes' => $_SESSION['likes']+1,
                ':idPost' => $_POST['idPost']
            ]);
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['likes'] = $_SESSION['likes']+1;
            $isliked = true;
            $value['likes']= $_SESSION['likes'];
    }

    var_dump($_POST);
    //header ('location: /Home');

?>
