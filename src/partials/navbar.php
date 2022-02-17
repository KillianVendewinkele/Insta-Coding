<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">InstaCoding</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <form method="post" action="/actions/searchTag.php">
                    <select name="tag" id="tag">
                      <option value="">-- Select tag --</option>
                      <option value="food">#food</option>
                      <option value="sport">#sport</option>
                      <option value="humour">#humour</option>
                      <option value="lifestyle">#lifestyle</option>
                      <option value="tiktok">#tik tok</option>
                      <option value="selfie">#selfie</option>
                    </select>
                     <button type="submit" class="btn btn-warning"><i class="bi bi-search"></i></button>
        </form>
      </li>
      <li class="nav-item">
      <?php if(isset($_SESSION['search'])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['search'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['search']);
                                } 
                                ?>

      </li>
    </ul>
     <?php if(empty($_SESSION['user'])){
      ?>
      
       <?php }else{?>
 <a class="nav-link disabled" href="/Logout">Logout</a>
       <?php } ?>
  </div>
</nav>

