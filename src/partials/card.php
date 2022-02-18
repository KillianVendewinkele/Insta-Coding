<div class="card-wrapper  col-12 my-5 col-sm-6 col-md-3 ">
                                <div class=" row align-items-end bg-dark">

                                     <?php if($_SESSION['role'] == "admin"){
                                         require __DIR__.'/../../src/partials/drop.php'; }
                                         ?>
                                </div>
                                 
                                    <div class="card">
                                        <div class="card-img-wrapper"> 
                                            <img
                                                class="card-img-top"
                                                src="<?php echo  $value['url'] ; ?>"
                                                alt=""
                                                
                                            />
                                        </div>https://e7.pngegg.com/pngimages/492/286/png-clipart-computer-icons-user-profile-avatar-avatar-heroes-monochrome.png
                                        <div class="card-body ">
                                            <div class="row">
                                               
                                                <div class="col-12">
                                                    <p><?php echo $value['contenu'] ; ?></p>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                               <h5 class="card-text">Comments</h5>
                                                <?php if($value['idPost'] == $com['idPost']) {?>
                                                    <?php $date = date_create($com['timeCom']);
                                                            ?>
                                                            <div class="container ">
                                                                <div class="row border border-secondary">
                                                                    <div class="col-6">
                                                                         <p style="font-size:1rem;font-weight: bold;">@<?= $com['pseudo'] ?></p>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p style="font-size:1rem;" ><?= $com['contenuCom'] ?></p>
                                                                    </div>
                                                                     <div class="col-7">
                                                                            <p><small><?=date_format($date, 'H:i d-m-Y');?></small></p>                     
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                
                                                            <?php }else{

                                                            }?>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12  p-2 mx-3 ">
                                        <div class=" col-10 bg-info">
                                             <?php if ($_SESSION['role'] == "admin") {
                                                  require __DIR__.'/../../src/partials/dropCom.php';
                                             } 
                                             ?>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-4 ">
                                                 <a style="bottom:O;" href="#" ><button class="btn btn-danger"><?php echo $value['likes'] ; ?> &hearts;</button></a>
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