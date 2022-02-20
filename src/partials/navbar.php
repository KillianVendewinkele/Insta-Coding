<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <img
        src="https://cdn.pixabay.com/photo/2021/07/27/08/20/instagram-icon-6496194_1280.png"
        alt=""
        style="width: 5%"
    />
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02"
        aria-expanded="false"
        aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
        <div class="container-fluid">
            <div class="row justify-content-end ">
              <?php if(empty($_SESSION['user'])){
                            ?>
                          <h1>InstaCoding</h1>
                            <?php }else{?>
                <div class="col-5 ">
                        <div class="col-12 ">
                            <a href="/Profil"><button class= "btn btn-default" ><i class="bi bi-person-fill" style="font-size:1rem;" >@<?= $_SESSION['user']['pseudo']?></i></button></a>    
                        </div>

                </div>
                <div class="col-5 ">
                        <form method="post" action="/actions/searchTag.php">
                          <div class="col-12">
                              <div class="row">
                                  <div class="col">
                                         <input type="text" name="tag" class="form-control"placeholder="Search"> 
                                  </div>
                                  <div class="col-0">
                                        <button type="submit" style="height:10%;height:50px;" class="btn btn-light">
                                  <i class="bi bi-search " style="font-size:1,5rem;"></i>
                              </button>
                                  </div>
                              </div>
                          </div>
                      </form>
                </div>
                <div class="col-2 ">
                    <div class="row justify-content-end ">
                        <div class="col-12 ">
                            <div class="dropdown dropleft">
                                <button class="btn " style="color:none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-gear-wide" style="font-size:2rem;"></i>
                                                                </button>
                                <div class="dropdown-menu">
                                         <a href="/Create"><button style="width:100%;" class="btn btn-none">Add a post</button></a>
                                          <a href="/Logout"><button style="width:100%;" class="btn btn-none">Logout</button></a>
                                </div>
                                </div>
                                                    

                                <?php }?> 
                        
                        </div>          
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
