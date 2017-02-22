<?php
require 'header.php';
require '../functions/functions.php';
session_start();

?>

<?php
$personnage = $_SESSION['personnage'];
echo 'Bonjour ' ,$personnage->afficherName(), ',<br>Votre classe est \'' ,$personnage->afficherClasse(), '\',<br>Et voici vos statistiques : <br>PV :' ,
$personnage->afficherPv(), '<br>EXP : ', $personnage->afficherXp();
 ?>

<a href="salle.php"><button type="button" name="button">Commencer</button></a>
<?php
require 'footer.php';
?>
