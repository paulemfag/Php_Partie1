<?php
$page = 'Exercice 4';
include '../header.php';
?>
<?php
$string = 'Paul';
$init = 18;
$float = 158.25478;
$bol = true;
?>
<p><?= 'Je m\'appelle ' . $string . ', j\'ai ' . $init . ' ans et je pèse ' . $float . ' kilos. Dans moins de ' . $bol . ' an j\'aurais 19 ans.';
?></p>
<?php include '../footer.php'; ?>
