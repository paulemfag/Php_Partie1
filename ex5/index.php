<?php
$page = 'Exercice 4';
include '../header.php';
$init = null;
?>
<p><?= 'Ceci est une variable init vide ' . $init ?></p>
<?php $init = 5; ?>
<p><?= 'Ceci est une variable init avec comme valeur ' . $init ?></p>
<?php include '../footer.php'; ?>
