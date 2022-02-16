<?php
    session_start();

    require_once __DIR__ . "/../../db.php";

    $sql = 'SELECT email, password FROM users WHERE email = :email AND password = :password';
    $query = $db->prepare($sql);

    $query->execute([
	    ':email' => $_POST['email'],
        ':password' => hash("sha256", $_POST['password'])
    ]);

    $data = $query->fetch(PDO::FETCH_ASSOC);

    if($data) {
        $_SESSION['user'] = $_POST['username'];
        echo "Connexion réussie! Vous allez être redirigé vers la page d'accueil.";
        header ("Location: /../../src/pages/home.php");
    }
    else {
        echo "Mot de passe incorrect. Veuillez réessayer dans 10 heures.";
    }
?>