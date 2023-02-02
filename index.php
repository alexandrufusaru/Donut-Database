<html>

<header>
	<h1>Lucru cu gogosile</h1>
</header>

<body>

<?php   //php = OOP language

include "conexiune_baza_date.php";

//include "afisare_tabel_date.php";

?>

<div>
<form action="adaugare_gogoasa.php">
  <br>
  <h3>------------Adaugare-----------</h3>
  Nume: <br>
  <input type="text" name="nume_nou"><br>

  Stele: <br>
  <input type="text" name="rating_nou"><br>

  Pret: <br>
  <input type="text" name="pret_nou"><br>

  Descriere: <br>
  <input type="text" name="descriere_noua"><br>

  <input type="submit" value="Submit">
</form>
</div>

<div>
<form action="cauta_cuvant.php">
  <br>
  <h3>------------Cautare-----------</h3>
  Dati numele gogosii cautate:<br>
  <input type="text" name="keyword"><br>

  <input type="submit" value="Submit">
</form>
</div>

<div>
<form action="sortare_descrescatoare_pret.php">
<br>
  <h3>------------Sortare-----------</h3>
  Sortare descrescatoare pret: <br>
  <input type="submit" value="Submit">
</form>
</div>

<div>
<form action="stergere_gogoasa.php">
<br>
  <h3>------------Stergere-----------</h3>
  Dati numele gogosii de sters: <br>
  <input type="text" name="gogoasa_stearsa"><br>

  <input type="submit" value="Submit">
</form>
</div>>
   
</body>

</html>