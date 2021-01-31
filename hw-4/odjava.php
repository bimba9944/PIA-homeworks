<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "12345";
        $dBase = "bazaPodataka";

        $connect = new mysqli($servername, $username, $password, $dBase);

        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }

        $idZaOdjavu =  $_SESSION['id'];

        $status = "UPDATE tabelaClanova SET logovanIliNe='ne' WHERE id=$idZaOdjavu";
        if ($connect->query($status) === TRUE) {
            //nesto
        } else {
            //nesto
        }

        $select = "SELECT id, logovanIliNe FROM tabelaClanova WHERE id=$idZaOdjavu";
        $selected = $connect->query($select);
        if ($selected->num_rows > 0) {
            while($row = $selected->fetch_assoc()) {
                if($row["id"] == $idZaOdjavu){
                    $_SESSION['logovanIliNe'] = $row["logovanIliNe"];
                }
            }
        }

        $connect->close();

        header("Location:pocetna.php");
    }
?>