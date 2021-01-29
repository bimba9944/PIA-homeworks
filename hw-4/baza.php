<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dBase = "bazaPodataka";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $DB = "CREATE DATABASE IF NOT EXISTS bazaPodataka";

    if ($conn->query($DB) === TRUE) {
        // echo "Database created successfully <br/>"; 
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
    
    $connect = new mysqli($servername, $username, $password, $dBase);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    } 
    
    $Tabela1 = "CREATE TABLE IF NOT EXISTS tabelaClanova (
        id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ime VARCHAR(50) NOT NULL,
        prezime VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        username VARCHAR(50) NOT NULL,
        sifra VARCHAR(50) NOT NULL,
        tipNaloga VARCHAR(30) NOT NULL,
        logovanIliNe VARCHAR(30) NOT NULL
        
    )";

    if ($connect->query($Tabela1) === TRUE) {
        // echo "Table Tabela1 created successfully";
    } else {
        echo "Error creating table: " . $connect->error;
    }




    $stmt = $connect->prepare("INSERT INTO tabelaClanova (ime, prezime, email, username, sifra, tipNaloga, logovanIliNe) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $imeAdmina, $prezimeAdmina, $emailAdmina, $usernameAdmina, $sifraAdmina, $tipAdmin, $logovanAdmin);
    $imeAdmina = "Veljko";
    $prezimeAdmina = "Maksimovic";
    $emailAdmina = "maksa9944@hotmail.com";
    $usernameAdmina = "velja";
    $sifraAdmina = "12345";
    $tipAdmin = "admin";
    $logovanAdmin = "ne";
    
    //provera da li je admin ulogovan
    $provera = "SELECT email, username FROM tabelaClanova";
    $rezultat = $connect->query($provera);
    $brojac = 0;
    while($niz = $rezultat->fetch_assoc()) {
        if ($niz["email"] == $emailAdmina || $niz["username"] == $usernameAdmina){
            $brojac++;
        }
    }
    if($brojac==0){
        $stmt->execute();
    }
    else{
        $brojac = 0;
    }

    
    $stmt->close();

    $connect->close();


    

?>