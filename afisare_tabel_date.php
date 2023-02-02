<?php

$sql = "SELECT ID_Gogoasa, Nume_Gogoasa, Stelute_Gogoasa, Pret_Gogoasa, Detalii_Gogosi FROM tabel_gogosi";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Numar: " . $row["ID_Gogoasa"]. "</br> - Nume: " . $row["Nume_Gogoasa"]. "</br> - Numar stelute: " . $row["Stelute_Gogoasa"]. "</br> - Pret: " .$row["Pret_Gogoasa"].  "</br> - Detalii: " .$row["Detalii_Gogosi"]. "<br>";
	}
} 
else 
{
  echo "0 results";
}

?>