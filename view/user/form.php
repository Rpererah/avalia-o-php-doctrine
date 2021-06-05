<?php
include __DIR__.'/../header.php';
?>
<div class="container">
    <form action="/realiza-cadastro" method="post">
<div class="mb-3">
    <label for="user" class="form-label">Usuario</label>
    <input type="text" name="user" id="user" class="form-control" />
</div>
    <div class="mb-3">
        <label for="psw" class="form-label">Senha</label>
        <input type="password" name="psw" id="psw" class="form-control" />
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" />
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">foto</label>
        <input type="text" name="photo" id="photo" class="form-control" />
    </div>
    <div class="mb-3">
        <input type="hidden" name="type" id="type" class="form-control" value="0" />
    </div>

<div class="mb-3">
    <button class="btn btn-primary mb-3">Cadastro</button>
</div>
    </form>
</div>
<?php
include __DIR__.'/../footer.php';
?>
