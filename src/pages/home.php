
<?php 
$title="Home";
//Affiche toutes les publications    
        $sql = 'SELECT url, contenu,likes,idPost FROM post ';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listPost = $query->fetchAll(PDO::FETCH_ASSOC);

        shuffle($listPost);
 //Afficher les commentaires       
        $sql = 'SELECT comment.contenuCom,comment.timeCom,comment.idPost, users.pseudo FROM `comment`, `users` WHERE comment.id = users.id  ';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listCom = $query->fetchAll(PDO::FETCH_ASSOC);

ob_start() ?>

<div class="container-fluid ">
    <div class="row justify-content-end ">  
        <div class="col-7">
            <?php if(isset($_SESSION['comment_error'])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['comment_error'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['comment_error']);
                                } 
                                ?>
            <?php if(isset($_SESSION['comment_valide'])) { ?>
                                <div class="alert alert-success">
                                    <?= $_SESSION['comment_valide'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['comment_valide']);
                                } 
                                ?>
        </div>
    </div>
</div>
<div class="container-fluid mt-4">
        <div class="row ">
            <div class="  col-12 ">
                <div class="row ">
                        <?php 
                            foreach($listPost as $key => $value ) { 
                                require __DIR__.'/../../src/partials/card.php'; 
                            
                        }?> 
                </div>
            </div> 
            <div class="col-12 mt-5">
                 <a href="#" style="left:0;bottom:0;"><button class="btn btn-dark"><i class="bi bi-arrow-up-circle-fill" ></i></button></a> 
            </div>
                    
        </div>
</div>
  
 
    
<?php $content = ob_get_clean(); ?>

