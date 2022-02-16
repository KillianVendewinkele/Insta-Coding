<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Login</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"defer ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>
    <script src="//code.jquery.com/jquery-2.1.4.js"></script>
    <link rel="stylesheet" href="/../style/style.css"/>
</head>
<header>
    <?php require_once __DIR__ . "/../partials/navbar.php" ?>
</header>
<body style="margin-bottom:60px;">
     <div class="container">
        <div class="row">
            <div class="col-12">
                    <h2>Don't have any account?</h2>
            </div>
            <div class="col-12">
                <form method="post" action="">
                    <div class="form-group">
                        <label name="name">Your name</label>
                       <input type="text" class="form-text" name="name" placeholder="Write your name here" required>
                    </div>
                    <div class="col-12">
                         <label name="email">Email</label>
                        <input type="text" class="form-text" name="email" placeholder="Write your email here" required>
                    </div>
                    <div class="col-12">
                        <label name="password">Your password</label>
                        <input type="text" class="form-text" name="password" placeholder="Write your password here" required>
                    </div>
                    <button type="submit" class="btn btn-light">Submit</button>
                    </form>
            </div>
        </div>
     </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <h2>Already have an account?</h2>
            </div>
            <div class="col-12">
                <form method="post" action="">
                    <div class="col-12">
                         <label name="email">Your email</label>
                        <input type="text" class="form-text" name="email" placeholder="Write your email here" required> 
                    </div>
                    <div class="col-12">
                         <label name="password">Your password</label>
                        <input type="text" class="form-text" name="password" placeholder="Write your password here" required>
                    </div>
                    <button type="submit" class="btn btn-light">Submit</button>
                    </form>
            </div>
        </div>
     </div>

</body>
<footer>
<?php require_once __DIR__ . "/../partials/footer.php" ?>
</footer>
</html>