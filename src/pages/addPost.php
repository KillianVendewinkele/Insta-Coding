<?php 
$title="Creating";ob_start() ?>
    <div>
        <h2>Add a post efficiently!</h2>
        <?php if(isset($_SESSION['post_error'])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['post_error'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['post_error']);
                                } 
                                ?>
        <form method="post" action="/actions/post.php">
            <label name="post_title">Post title</label>
            <input type="text" id="post_title" name="post_title" ></input>
            <label name="post_picture">Choose your picture</label>
            <input type="url" id="post_picture" name="post_picture" ></input>
            <select name="tag" id="tag">
                <option value="">-- Select tag --</option>
                <option value="food">#food</option>
                <option value="sport">#sport</option>
                <option value="humour">#humour</option>
                <option value="lifestyle">#lifestyle</option>
                <option value="tiktok">#tik tok</option>
                <option value="selfie">#selfie</option>
            </select>
            <input type="submit" class="submit_button" value="Envoyer"></input>
        </form>
    </div>
<?php $content = ob_get_clean(); ?>