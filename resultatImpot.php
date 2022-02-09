<?php

require_once("impot.php");


$a = new impot($_POST["name"],$_POST["income"]);

$a->AfficheImpot();

?>

<form action="index.php">

    <p><input type="submit" value="retour"></p>

</form>