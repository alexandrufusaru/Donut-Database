<?php

include "conexiune_baza_date.php";

$nume_gogoasa_stearsa=$_GET["gogoasa_stearsa"];

echo "<h2>Stergere gogoasa: $nume_gogoasa_stearsa</h2>";

$sql = "DELETE FROM tabel_gogosi WHERE Nume_Gogoasa='$nume_gogoasa_stearsa'";
$result = $mysqli->query($sql);

include "afisare_tabel_date.php";

?>

<a href="index.php">Inapoi la pagina principala</a> 