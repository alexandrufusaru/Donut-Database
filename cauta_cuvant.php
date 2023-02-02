<?php
// Cauta o gogoasa dupa un cuvant

include "conexiune_baza_date.php";

$cuvant_cautat= $_GET["keyword"];
//echo $cuvant_cautat;

echo "<h2>Gogosi cu cuvantul $cuvant_cautat in nume: </h2>";


$sql = "SELECT ID_Gogoasa, Nume_Gogoasa, Stelute_Gogoasa, Pret_Gogoasa, Detalii_Gogosi FROM tabel_gogosi WHERE Nume_Gogoasa LIKE '%" . $cuvant_cautat . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Numar: " . $row["ID_Gogoasa"]. "</br> - Nume: " . $row["Nume_Gogoasa"]. "</br> - Numar stelute: " . $row["Stelute_Gogoasa"]. "</br> - Pret: " .$row["Pret_Gogoasa"].  "</br> - Detalii: " .$row["Detalii_Gogosi"]. "<br>";
  }
} else {
  echo "0 results";
}

?>

<a href="index.php">Inapoi la pagina principala</a>