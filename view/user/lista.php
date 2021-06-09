<?php
include __DIR__.'/../header.php';
?>
<a href="/cadastro" class="btn btn-primary mb-2">Adicionar Usuario</a>
<table class="table table-sm table-secondary">
    <tr style="text-align: center; vertical-align:middle !important" scope="col">
        <th>ID</th>
        <th>UserName</th>
        <th>Email</th>
        <th>Type</th>
        <th>photo</th>
        <th colspan="2">Opcoes</th>
    </tr>
    <?php
    foreach ($users as $user) :
    ?>
    <tr style="text-align: center; vertical-align:middle !important" scope="col">
        <td class="table-info justify-content-center "><?= $user->getIdUser(); ?></td>
        <td class="table-info justify-content-center"><?= $user->getNameUser(); ?></td>
        <td class="table-info justify-content-center"><?= $user->getEmailUser(); ?></td>
        <td class="table-info justify-content-center"><?= $user->isTypeUser(); ?></td>
        <td class="table-info justify-content-center"><img width="100" height="100" src="./../images/users/<?=$user->getPhotoUser();?>"/></td>
        <td class="table-info justify-content-center"><a href="/atualiza?id=<?=$user->getIdUser()?>" class="btn btn-info btn-sm">Alterar</a></td>
        <td class="table-info justify-content-center"><a href="/deletar?id=<?=$user->getIdUser()?>" class="btn btn-danger btn-sm">Excluir</a></td>
    </tr>
    <?php endforeach; ?>
</table>





<?php
include __DIR__.'/../footer.php';
?>
