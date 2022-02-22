<?php 
$title="Settings";

// Afficher tout les utilisateurs pour l'admin
        $sql ='SELECT * FROM `users` WHERE roles ="users"';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listUsers = $query->fetchAll(PDO::FETCH_ASSOC);
        
ob_start() ?>
<?php if ($_SESSION['user']['roles']=="admin") { ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <!-- Button trigger modal -->
            <button
                type="button"
                class="btn btn-outline-info btn-lg float-left"
                data-toggle="modal"
                data-target="#exampleModal"
            >
                Settings Admin
            </button>

            <!-- Modal -->
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">
                                Table of users
                            </h4>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-hover">
                                <thead>
                                    <?php foreach ($listUsers as $key =>
                                    $value) { ?>
                                    <tr>
                                        <th scope="col"><?= $value['id'] ?></th>
                                        <th scope="col">
                                            <?= $value['pseudo'] ?>
                                        </th>
                                        <th scope="col">
                                            <?= $value['email'] ?>
                                        </th>
                                    </tr>
                                </thead>
                                <?php  } ?>
                            </table>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="col-12">
            <form action="" method="post">
                <div class="form-group row">
                    <input type="file" name="file" id="file" />
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Email</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="email"
                            class="form-control"
                            id="inputEmail3"
                            placeholder="Email"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Password</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="password"
                            class="form-control"
                            id="inputPassword3"
                            placeholder="Password"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</div>

    
<script>
    function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').after('<img src="'+e.target.result+'" width="450" height="300"/>');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
      
   
<?php $content = ob_get_clean(); ?>