<?php 
$title="Creating";ob_start() ?>
    <div>
        <h2>Add a post efficiently!</h2>
        <form method="get" action="">
            <label name="post_title">Post title</label>
            <input type="text" id="post_title" name="post_title" required></input>
            <label name="post_picture">Choose your picture</label>
            <input type="file" id="post_picture" name="post_picture" required></input>
        </form>
    </div>
<?php $content = ob_get_clean(); ?>