<?php if (isset($_POST) && !empty($_POST) ): ?>
<?php 

require_once "Regisztralt.php";
$regisztralt = new Regisztralt(
    $_POST['Rendszam'],
    $_POST['Gyarto'],
    $_POST['Vizsgaztatva'],
    $_POST['Tipus'],
    $_POST['Uzembehelyezes'],
    $_POST['Ulohely']
);

require_once "Adatbazis.php";
$adatbazis = new Adatbazis();
$adatbazis->regisztracio($regisztralt);

?>
<?php endif; ?>
