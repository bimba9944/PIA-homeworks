<?php
    $dodajNaslovErr = $dodajZanrErr = $dodajScenaristuErr = $dodajDirektoreErr = $dodajProducenteErr = $dodajGlumceErr = $dodajGodinuErr = $dodajPosterErr = $dodajTrajanjeErr = $dodajOpisErr = "";
    $dodajNaslov = $dodajZanr = $dodajScenaristu = $dodajDirektore = $dodajProducente = $dodajGlumce = $dodajGodinu = $dodajPoster = $dodajTrajanje = $dodajOpis = "";
    $dodajOcenu = 10;
    $dodajBrojOcena = 1;
    $brojac = 0;

    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dBase = "bazaPodataka";

    $connect = new mysqli($servername, $username, $password, $dBase);

    $stmt = $connect->prepare("INSERT INTO tabelaFilmova (naslovF, oFilmu, zanr, scenario, direktori, producenti, glumci, produkcija, poster, trajanje, ocena, brojOcena) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $dodajNaslov, $dodajOpis, $dodajZanr , $dodajScenaristu, $dodajDirektore, $dodajProducente, $dodajGlumce, $dodajGodinu, $dodajPoster, $dodajTrajanje, $dodajOcenu, $dodajBrojOcena);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["dodajNaslov"])) {
            $dodajNaslovErr = "Required field";
        } else {
            $dodajNaslov = test_input($_POST["dodajNaslov"]);
            $brojac++;
        }

        if (empty($_POST["dodajZanr"])) {
            $dodajZanrErr = "Required field";
        } else {
            $dodajZanr = test_input($_POST["dodajZanr"]);
            $brojac++;
        }

        if (empty($_POST["dodajScenaristu"])) {
            $dodajScenaristuErr = "Required field";
        } else {
            $dodajScenaristu = test_input($_POST["dodajScenaristu"]);
            $brojac++;
        }

        if (empty($_POST["dodajDirektore"])) {
            $dodajDirektoreErr = "Required field";
        } else {
            $dodajDirektore = test_input($_POST["dodajDirektore"]);
            $brojac++;
        }

        if (empty($_POST["dodajProducente"])) {
            $dodajProducenteErr = "Required field";
        } else {
            $dodajProducente = test_input($_POST["dodajProducente"]);
            $brojac++;
        }

        if (empty($_POST["dodajGlumce"])) {
            $dodajGlumceErr = "Required field";
        } else {
            $dodajGlumce = test_input($_POST["dodajGlumce"]);
            $brojac++;
        }

        if (empty($_POST["dodajGodinu"])) {
            $dodajGodinuErr = "Required field";
        } else {
            $dodajGodinu = test_input($_POST["dodajGodinu"]);
            $brojac++;
        }

        if (empty($_POST["dodajPoster"])) {
            $dodajPosterErr = "Required field";
        } else {
            $dodajPoster = test_input($_POST["dodajPoster"]);
            $brojac++;
        }

        if (empty($_POST["dodajTrajanje"])) {
            $dodajTrajanjeErr = "Required field";
        } else {
            $dodajTrajanje = test_input($_POST["dodajTrajanje"]);
            $brojac++;
        }

        if (empty($_POST["dodajOpis"])) {
            $dodajOpisErr = "Required field";
        } else {
            $dodajOpis = test_input($_POST["dodajOpis"]);
            $brojac++;
        }
    }

    if ($brojac == 10){
        $stmt->execute();

        $brojac = 0;
        header("Location:naslovnaZaAdmina.php");

    }
    else {
        $brojac = 0;
    }
    
    $stmt->close();

    $connect->close();


?>