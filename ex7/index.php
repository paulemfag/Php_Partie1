<?php
$page = 'Exercice 4';
$firstname = 'Paul-Emmanuel';
$lastname = 'Fagot';
$age = 18;
include '../header.php';
?>
<p><?= 'Bonjour ' . $lastname . ' ' . $firstname . ' tu as ' . $age . ' ans.';?></p>
<?php include '../footer.php'; ?>
