<?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "12345";
        $dBase = "bazaPodataka";

        $connect = new mysqli($servername, $username, $password, $dBase);

        $idZaBrisanje =  $_SESSION['idF'];

        $selected = "DELETE FROM tabelaFilmova WHERE idF=$idZaBrisanje";

        if ($connect->query($selected) === TRUE) {
        //echo "Record deleted successfully";
        } else {
        //echo "Error deleting record: " . $connectForDelete->error;
        }
        $connect->close();
    }


    header("Location:naslovnaZaAdmina.php");
?>