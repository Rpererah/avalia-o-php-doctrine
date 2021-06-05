<?php
include __DIR__.'/../header.php';
?>
<?php
foreach ($users as $user) :
?>
<ul>
    <li>
        <?= $user->getNameUser(); ?>
    </li>
    <li>
        <?= $user->getEmailUser(); ?>
    </li>
</ul>
<?php endforeach; ?>

<?php
include __DIR__.'/../footer.php';
?>
