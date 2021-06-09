<?php


include __DIR__.'/../header.php';
?>
    <form enctype="multipart/form-data" action="/realiza-cadastro<?=isset($user) ? "?id=".$user->getIdUser(): "";?>" method="post">
<div class="mb-3">
    <label for="user" class="form-label">Usuario</label>
    <input type="text" name="user" id="user" class="form-control"value="<?=isset($user) ? $user->getNameUser() : ""; ?>"/>
</div>
        <?=isset($user) ? "" :'
    <div class="mb-3">
        <label for="psw" class="form-label">Senha</label>
        <input type="password" name="psw" id="psw" class="form-control"/>
    </div>'
    ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?=isset($user) ? $user->getEmailUser() : ""; ?>" />
    </div>
    <div class="mb-4">
        <label for="photo" class="form-label">foto</label>
        <input type="file"  accept=”image/*”  name="userfile" id="userfile" class="form-control" value="<?=isset($user) ? $user->getPhotoUser() : ""; ?>" />
    </div>

<div class="mb-3">
    <button class="btn btn-primary mb-3"><?=isset($user) ? "Alterar Informacoes": "Cadastrar"; ?></button>
</div>
    </form>

<?php
include __DIR__.'/../footer.php';
?>
