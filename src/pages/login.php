x<?php 
$title="Login";
ob_start()?> 
<!-- Container Global -->
     <div class="container-fluid">
         <!-- Container to display on row -->
        <div class="row">
             <!-- Container to display the first form with this title -->
            <div class="col-12">
                 <!-- Container to display the title of the first form -->
                <div class="col-12">
                    <h2>Don't have any account?</h2>
                </div>
                 <!-- Container to display the first form -->
                <div class="col-12">
                     <!--To display error from the form -->
                                <?php if(isset($_SESSION['signup_error'])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['signup_error'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['signup_error']);
                                } 
                                ?>
                        <!-- The form -->
                        <form method="post" action="/actions/signup.php">
                            <div class="form-group">
                                <label for="">Your name</label>
                                <input type="text" class="form-control" class="form-control" name="name" placeholder="Write your name ">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" class="form-control" name="email" placeholder="Write your email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Your Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Write your Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
            <div class="col-12 mt-4">
                <!-- Container to display the title of the first form -->
                <div class="col-12">
                   <h2>Already have an account?</h2>
                </div>
                 <!-- Container to display the first form -->
                <div class="col-12">
                     <!--To display error from the form -->
                                <?php if(isset($_SESSION['login_error'])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['login_error'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['login_error']);
                                } 
                                ?>
                        <!-- The form -->
                        <form method="post" action="/actions/login.php">
                            <div class="form-group">
                                <label for="">Your Email</label>
                                <input type="text" class="form-control" class="form-control" name="email" placeholder="Write your email ">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" class="form-control" name="password" placeholder="Write your password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
            </div>
            
            </div>
     </div>
<?php $content = ob_get_clean(); ?>
