<?php 
$title="Profil";
//Affiche toutes les publications de l'utilisateur connectés    
        $sql = 'SELECT url, contenu,likes,idPost,users.pseudo,tag FROM post,users WHERE users.id = :id AND post.id = users.id ';
    $query = $db->prepare($sql);
    $query->execute([
        ':id' => $_SESSION['user']['id']
    ]);
    $dataPost = $query->fetchAll(PDO::FETCH_ASSOC);
//Affiche le nombre de post  pour l(utilisateur connecter)
        $sql = 'SELECT count(idPost) FROM post WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute([
            ':id' => $_SESSION['user']['id']
        ]);
        $nbPost = $query->fetchAll(PDO::FETCH_ASSOC);
//Afficher les commentaires       
        $sql = 'SELECT comment.contenuCom,comment.timeCom,comment.idPost,comment.idComment, users.pseudo FROM `comment`, `users` WHERE comment.id = users.id  ';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listCom = $query->fetchAll(PDO::FETCH_ASSOC);

// Afficher tout les utilisateurs pour l'admin
        $sql ='SELECT * FROM `users` WHERE roles ="users"';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listUsers = $query->fetchAll(PDO::FETCH_ASSOC);
        
ob_start() ?>
 <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <?php require __DIR__.'/../../src/partials/result/commentResult.php'?>
             <?php require __DIR__.'/../../src/partials/result/deleteResult.php'?>
        </div>
        <div class="col-10">
            <div class="row">
                <div class="col-5">
                    <a href="/Profil"
                        ><button
                            style="background: #ffffff"
                            class="btn rounded-circle"
                        >
                            <i
                                class="bi bi-person-fill"
                                style="font-size: 4rem"
                            ></i></button
                    ></a>
                    @<?= $_SESSION['user']['pseudo']?>
                </div>
                <div class="col-6 ml-5">
                    <h4>
                        Publications:<?= $nbPost[0]['count(idPost)'] ?>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-2">
            <a href="/Home"><button class="btn btn-warning">Back</button></a>
        </div> 
    </div>
</div>
<?php if ($_SESSION['user']['roles']=="admin") { ?>
   
       <table class="table table-dark">
            <thead>
                <h1>Table of users</h1>
                <?php foreach ($listUsers as $key => $value) { ?>
                    <tr>
                    <th scope="col"><?= $value['id'] ?></th>
                    <th scope="col"><?= $value['pseudo'] ?></th>
                    <th scope="col"><?= $value['email'] ?></th>
                    </tr>
            </thead>
            <?php  } ?>
        </table>
 
<?php } ?>
 <div class="container-fluid mt-4">
    <div class="row ">
        <div class="col-12">
            <div class="row justify-content-center">
                <?php  
                    foreach($dataPost as $key =>$value ) { 
                        
                        require __DIR__.'/../../src/partials/card.php';
                     } 
                ?>
            </div>
        </div>
        <div class="col-12 mt-5">
            <a href="#" style="left: 0; bottom: 0"
                ><button class="btn btn-dark">
                    <i
                        class="bi bi-arrow-up-circle-fill"
                    ></i></button
            ></a>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>