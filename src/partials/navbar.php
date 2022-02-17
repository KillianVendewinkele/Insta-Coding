<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <img
        src="https://cdn.pixabay.com/photo/2021/07/27/08/20/instagram-icon-6496194_1280.png"
        alt="aa"
        style="width: 5%"
    />
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02"
        aria-expanded="false"
        aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                        <form method="post" action="/actions/searchTag.php">
                          <div class="col-12">
                              <select class="form-select " style="width:80%;height:50px;"name="tag">
                                  <option selected value="all">All</option>
                                  <option value="food">#food</option>
                                  <option value="sport">#sport</option>
                                  <option value="humour">#humour</option>
                                  <option value="lifestyle">#lifestyle</option>
                                  <option value="tiktok">#tik tok</option>
                                  <option value="selfie">#selfie</option>
                              </select>
                               <button type="submit" style="height:10%;height:50px;" class="btn btn-light">
                                  <i class="bi bi-search " style="font-size:1,5rem;"></i>
                              </button>
                          </div>
                      </form>
                </div>
                <div class="col-4">
                    <div class="row justify-content-end">
                        <div class="col-3">
                            <i class="bi bi-bell-fill" style="font-size: 2rem"></i>
                        </div>
                        <div class="col-3">
                            <i class="bi bi-chat-dots"style="font-size: 2rem"></i>
                        </div>
                        <div class="col-6">
                            <?php if(empty($_SESSION['user'])){
                            ?>

                            <?php }else{?>
                            <a class="nav-link disabled" href="/Logout"
                                ><i class="bi bi-box-arrow-in-left"></i
                                >Logout
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
