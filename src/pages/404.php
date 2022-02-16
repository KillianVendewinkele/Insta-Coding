<?php ob_start() ?>
 		<h1>404 Error</h1>
         <p>The page you are looking for is not found.</p>
         <p>Don’t worry you’ll find your way.</p>
<?php $content = ob_get_clean(); 
require(__DIR__.'/../src/partials/template.php'); ?>