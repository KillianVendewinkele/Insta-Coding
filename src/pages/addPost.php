<?php 
$title="Creating";ob_start() ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                    <h2>Add a post efficiently!</h2>
                
            </div>
            <div class="col-12">
                    <?php if(isset($_SESSION['post_error'])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['post_error'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['post_error']);
                                } 
                                ?>
            </div>
            <div class="col-12">
                <form method="post" action="/actions/post.php">
                    <div class="form-group">
                        <label>Post title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="post_title" placeholder="Choose a description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter your url</label>
                        <input type="password" class="form-control" name="post_picture" placeholder="Url please">
                    </div>
                    <div class="form-group">
                        <select name="tag" id="tag">
                                    <option value="">-- Select tag --</option>
                                    <option value="food">#food</option>
                                    <option value="sport">#sport</option>
                                    <option value="humour">#humour</option>
                                    <option value="lifestyle">#lifestyle</option>
                                    <option value="tiktok">#tik tok</option>
                                    <option value="selfie">#selfie</option>
                                </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-12">
                <a href="/Home"><button class="btn btn-dark">Back to the home</button></a>
            </div>
        </div>
    </div>
   
    
<?php $content = ob_get_clean(); ?>