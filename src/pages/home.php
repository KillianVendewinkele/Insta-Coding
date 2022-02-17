
<?php 
$title="Home";
ob_start() ?>
<div class="container-fluid">
  <div class="row justify-content-center">
            <div class="col-6">
                        <h1 class="display-4"> <?php if (isset($_SESSION['user'])) {
                        echo ("Bonjour"." ".$_SESSION['user']);
                        }else{
                        
                            }?> </h1>
            </div>
            <div class="col-6">
                <h2>Want to add a new picture?</h2>
                 <a href="/Create"><button class="btn btn-primary">Add a picture</button></a>
            </div>
            
            <?php 

                foreach($_SESSION["idPost"] as $value) {
                     

                    ?>
                    <div class="card-wrapper mt-5 col-lg-4 col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-img-wrapper">
                    <img class="card-img-top" src="<?=  $value ?>" alt="Card image cap">
                    </div>
                    <div class="card-body ">
                        <p><?= $value ?> &hearts;</p>
                        <p><?= $value ?>></p>
                    <div class="card-content">
                        <p class="card-text">Comments</p>
                        <a href="#" class="btn btn-default">Add a comment</a>
                    </div>
                    </div>
                </div>
            </div>
               <?php }
            ?>
            
  </div>
</div>

    
  
 
    <style>
        .card-wrapper {
        margin-bottom: 30px;
        }
        .card-image .card .card-img-wrapper {
        height: 100%;
        }
        .card-image .card .card-body {
        display: none;
        }
        .card-image-title-description .card .card-img-wrapper {
        max-height: 160px;
        }
        .card-image-title-description .card {
        position: relative;
        min-height: 300px;
        }
        .card-image-title-description .card .card-body {
        height: auto;
        position: relative;
        top: 0;
        margin-bottom: -70px;
        }
        .card-image-title-description .card:hover .card-body {
        top: -70px;
        }
        .card-image-title-description .card .card-body .card-title {
        margin-bottom: .75rem;
        }
        .card {
        display: inline-block;
        position: relative;
        overflow: hidden;
        min-height: 400px;
        height: 100%;
        }
        .card:hover {
        box-shadow: 8px 12px 31px -10px #ab98ab;
        }
        .card-img-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50%;
        overflow: hidden;
        }
        .card-img-wrapper img {
        transition: 1.5s ease;
        }
        .card:hover .card-img-wrapper img {
        transform: scale(1.15);
        }
        .card-body .card-title {
        margin-bottom: calc(50% + 20px);
        transition: 1.5s ease;
        }
        .card:hover .card-body .card-title {
        margin-bottom: .75rem;
        }

        .card-body {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 50%;
        background-color: #fff;
        transition: 1.5s ease;
        }
        .card-content {
        left: 0;
        right: 0;
        overflow: hidden;
        width: 100%;
        height: auto;
        transition: 1.5s ease;
        }
        .card:hover .card-body {
        height: 80%;
        }
        .card:hover .card-content {
        bottom: 0;
        }
        body {
        margin: 0;
        background-image: linear-gradient(to right, #ECE9E6 , #FFFFFF);
        }
    </style>
<?php $content = ob_get_clean(); ?>

