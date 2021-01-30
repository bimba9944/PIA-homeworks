<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$servername = "localhost";
$username = "root";
$password = "12345";
$dBase = "bazaPodataka";

// Create connection
$conn = new mysqli($servername, $username, $password, $dBase);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT id, ime, prezime , logovanIliNe , tipNaloga FROM tabelaClanova";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["ime"]. "- Prezime " . $row["prezime"].  "- status: " . $row["logovanIliNe"].  "-tip naloga: "  . $row["tipNaloga"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql1 = "SELECT idF, naslovF FROM tabelaFilmova";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    echo "id: " . $row["idF"]. " - Name: " . $row["naslovF"].  "<br>";
  }
} else {
  echo "0 results";
}



$conn->close();






?>