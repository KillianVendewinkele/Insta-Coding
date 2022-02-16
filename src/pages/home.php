<?php ob_start() ?>
    <div>
        <h2>Want to add a new picture?</h2>
        <button type="button" href="/Create">Add a picture</button>
    </div>
<?php $content = ob_get_clean(); 
require(__DIR__.'/../src/partials/template.php');?>