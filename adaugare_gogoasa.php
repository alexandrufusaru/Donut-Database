<?php

include "conexiune_baza_date.php";

$nume_gogoasa_noua= $_GET["nume_nou"];
$stele_gogoasa_noua= $_GET["rating_nou"];
$pret_gogoasa_noua= $_GET["pret_nou"];
$descriere_gogoasa_noua= $_GET["descriere_noua"];

echo "<h2>Adaugare gogoasa: $nume_gogoasa_noua</h2>";

$sql = "INSERT INTO tabel_gogosi (ID_Gogoasa, Nume_Gogoasa, Stelute_Gogoasa, Pret_Gogoasa, Detalii_Gogosi)  VALUES (NULL,'$nume_gogoasa_noua','$stele_gogoasa_noua','$pret_gogoasa_noua','$descriere_gogoasa_noua')";
$result = $mysqli->query($sql);

include "afisare_tabel_date.php";

?>

<a href="index.php">Inapoi la pagina principala</a> 