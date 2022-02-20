<form method="post" action="/actions/like.php">
    <input type="hidden" name="idPost" value="<?= $value['idPost'] ?>">
    <a style="bottom:O;"href="#"> <button type="submit" class="btn btn-danger" name="val"value='<?= $value['likes']; ?>'> <?= $value['likes'] ?>&hearts; </button> </a>
</form>