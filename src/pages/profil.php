<?php 
$title="Profil";ob_start() ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 ">
                <div class="row">
                    <div class="col-5  ">
                    photo
                    </div>
                    <div class="col-6 ml-5 ">
                        <h1>Nombre de post:<?= $_SESSION['total']['count(idPost)'] ?></h1> 
                    </div>
                </div>
                
           </div>   
           <div class="col-2">
            <a href="/Home"><button class="btn btn-warning">Back</button></a>
           </div>
           <div class="col-12">
               <div class="container-fluid mt-4">
        <div class="row ">
            <div class="  col-12 ">
                <div class="row ">
                           <?php 
                               foreach($_SESSION["profil"] as $key => $value ) { ?>
                            <div class="card-wrapper  col-12 col-sm-6 col-md-3 ">
                                    <div class="card">
                                        <div class="card-img-wrapper"> 
                                            <img
                                                class="card-img-top"
                                                src="<?php echo  $value['url'] ; ?>"
                                                alt=""
                                                
                                            />
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                               
                                                <div class="col-12">
                                                    <p><?php echo $value['contenu'] ; ?></p>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <p class="card-text">Comments</p>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12  p-2 ">
                                        <div class="row ">
                                            <div class="col-4 ">
                                                 <a style="bottom:O;"href="#"><button class="btn btn-danger"><?php echo $value['likes'] ; ?> &hearts;</button></a>
                                            </div>
                                            <div class="col-6 ">
                                                <div class="row justify-content-start">
                                                    <form action="/actions/comment.php" method="post">
                                                        <div class="col-6 ">
                                                            <input type="hidden" name="idPost" value="<?= $value['idPost'] ?>">
                                                            <input type="text" name="comment">
                                                        </div>
                                                        <div class="col-6 ">
                                                            <button type="submit" class="btn btn-primary">Comments</button>
                                                    </div> 
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>       
                                    </div>
                                     
                            </div>
                            <?php } ?> 
                </div>
            </div> 
            
                <a href="#" style="left:0;bottom:0;;"><button class="btn btn-dark"><i class="bi bi-arrow-up-circle-fill" style=""></i></button></a>      
        </div>
</div>
           </div>
           

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
        max-height: 400px;
        max-width:400px;
        height: 100%;
        }
        .card:hover {
        box-shadow: 8px 12px 31px -10px yellow;
        }
        .card-img-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
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
        height: 75px;
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
        margin-top:3%;
        }
        .card:hover .card-body {
        height: 100%;
        }
        .card:hover .card-content {
        bottom: 0;
        }
        .card-img-top {
        width: 100%;
        height:100%;
        max-width: 400px;
        max-height: 400px;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
        }
        
       
    </style>
<?php $content = ob_get_clean(); ?>