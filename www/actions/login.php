<?php 
session_start();

require_once __DIR__.'/../../src/db.php'; 

if( empty($_POST['email']) || empty( $_POST['password']) ){
    $_SESSION['login_error']= "Please enter an email and password .";
    header("Location: http://127.0.0.1:12001/Login ");
    die();
}

$email =filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
if($email == false){
    $_SESSION['login_error']= "Please enter a valid email.";
    header("Location: http://127.0.0.1:12001/Login ");
    die();
}
$password = hash('sha256',$_POST['password']);

$sql = 'SELECT * FROM users WHERE email = :email';
$query = $db->prepare($sql);

$query->execute([
	':email' => $email
]);
$data = $query->fetch(PDO::FETCH_ASSOC);

if (!$data) {
    $_SESSION['login_error']= "The email is not linked to any account.";
    header("Location: http://127.0.0.1:12001/Login ");
    die();
}
$sql = 'SELECT * FROM users WHERE email = :email';
$query = $db->prepare($sql);

$query->execute([
	':email' => $email
]);
$data = $query->fetch(PDO::FETCH_ASSOC);

if($data["password"] != $password){
   $_SESSION['login_error']= "Wrong password";
    header("Location: http://127.0.0.1:12001/Login ");
    
}else{

    $_SESSION['user']= $data['pseudo'];
    $_SESSION['id']= $data['id'];

    $sql = 'SELECT url, contenu,likes,idPost FROM post WHERE id = :id';
    $query = $db->prepare($sql);
    $query->execute([
        ':id' => $_SESSION['id']
    ]);
    $dataPost = $query->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['profil']=$dataPost;
    //Affiche le nombre de post  
        $sql = 'SELECT count(idPost) FROM post WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute([
            ':id' => $_SESSION['id']
        ]);
        $dataTotal = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['total']=$dataTotal;
         

    header("Location: http://127.0.0.1:12001/Home ");
}

 