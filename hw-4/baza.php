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

    $Tabela2 = "CREATE TABLE IF NOT EXISTS tabelaFilmova (
        idF INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        naslovF VARCHAR(255) NOT NULL,
        oFilmu VARCHAR(255) NOT NULL,
        zanr VARCHAR(255) NOT NULL,
        scenario VARCHAR(255) NOT NULL,
        direktori VARCHAR(255) NOT NULL,
        producenti VARCHAR(255) NOT NULL,
        glumci VARCHAR(255) NOT NULL,
        produkcija VARCHAR(255) NOT NULL,
        poster VARCHAR(255) NOT NULL,
        trajanje INT(255) NOT NULL,
        ocena VARCHAR(255) NOT NULL,
        brojOcena INT(255) NOT NULL
    )";

    if ($connect->query($Tabela2) === TRUE) {
    // echo "Table Tabela2 created successfully";
    } else {
    echo "Error creating table: " . $connect->error;
    }


    $stmt1 = $connect->prepare("INSERT INTO tabelaFilmova (naslovF, oFilmu, zanr, scenario, direktori, producenti, glumci, produkcija, poster, trajanje, ocena, brojOcena) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt1->bind_param("ssssssssssss", $naslovF, $oFilmu, $zanr, $scenario, $direktori, $produkcija, $glumci, $godina, $poster, $trajanje, $ocena, $brojOcena);
    $naslovF = "Star Wars: Episode IV - A New Hope";   //change with movie title
    $oFilmu = "Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire."; //change with movie description
    $zanr = " Action, Adventure, Fantasy"; //change with movie genre
    $scenario = "George Lucas"; //change with movie screenplay
    $direktori = "George Lucas";  //change with movie director(s)
    $produkcija = "Lucasfilm Ltd.";  //change with movie production
    $glumci = " Mark Hamill, Harrison Ford, Carrie Fisher";  //change with movie starring
    $godina = "1977";  //change with movie release year
    $poster = "new_hope.png";  //change with movie picture name (picture is in ./images/)
    $trajanje = 121;  //change with movie duration
    $ocena = 0;  //change with movie grade (initialy 0)
    $brojOcena = 0;     //change with movie numOfGrades (initialy 0)
    $stmt1->execute(); 
    $stmt1->close();








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