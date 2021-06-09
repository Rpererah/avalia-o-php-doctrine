<?php
include __DIR__.'/../header.php';
?>

    <form method="post" enctype="multipart/form-data" action="/teste2" >
        <!-- MAX_FILE_SIZE deve preceder o campo input -->
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        Enviar esse arquivo: <input accept="image/*" name="userfile" type="file" />
        <button class="btn btn-primary mb-3">Testar</button>
    </form>

<?php
include __DIR__.'/../footer.php';
?>
