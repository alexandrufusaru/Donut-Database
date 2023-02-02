<?php

include "conexiune_baza_date.php";

echo "<h2>Sortare descrescatoare pret gogosi: </h2>";

$sql = "SELECT * FROM tabel_gogosi ORDER BY 'Pret_Gogoasa' DESC";

$result = $mysqli->query($sql);

include "afisare_tabel_date.php";

?>

<a href="index.php">Inapoi la pagina principala</a> 