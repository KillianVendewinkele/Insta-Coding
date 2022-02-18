<?php 
session_start();

require_once __DIR__.'/../../src/db.php'; 

if( empty($_POST['idPost']) || empty( $_POST['comment']) ){
    $_SESSION['comment_error']= "You can’t have empty comments try again.";
    header("Location: http://127.0.0.1:12001/Home ");
    die();
}
$sql = 'INSERT INTO comment(contenuCom, idPost,id ) VALUES (:contenu, :post, :id)';
$query = $db->prepare($sql);
$query->execute([
	':contenu' => $_POST['comment'],
	':post' => $_POST['idPost'],
	':id' => $_SESSION['id']
]);
$data = $query->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['comment_valide']="Your comment has been saved";
header("Location: http://127.0.0.1:12001/Home ");