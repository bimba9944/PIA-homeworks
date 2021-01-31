<!DOCTYPE html>
<html>
<head>
    <title>User page</title>
    <meta name="author" content="Veljko Maksimovic" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="pocetna.css">
    <script src="sajt.js"></script>
</head>
<body>
<?php
    session_start();
    $idClana =  $_SESSION['id'];
    $imeClaan = $_SESSION['ime'];
    $prezimeClana = $_SESSION['prezime'];
    $emailClana = $_SESSION['email'];
    $usernameClana = $_SESSION['username'];
    $sifraClana = $_SESSION['sifra'];
    $nalogClan = $_SESSION['tipNaloga'];
    $logovan = $_SESSION['logovanIliNe'];
    if($logovan == "ne"){
        header("Location:pocetna.php");
    }
    ?>

<div class="row"  id="heder">
        <div class="col-sm-3" >
            <div id="logo">IMDb</div>
        </div>

        <div id="meni" class="col-sm-3">
        <div class="dropdown">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
            Movies
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Comedy</a>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Drama</a>
            <a class="dropdown-item" href="#">Sci-Fi</a>
            <a class="dropdown-item" href="#">Horror</a>
            <a class="dropdown-item" href="#">Thriller</a>
            <a class="dropdown-item" href="#">Romance</a>
            <a class="dropdown-item" href="#">Mystery</a>
            <a class="dropdown-item" href="#">Crime</a>
            <a class="dropdown-item" href="#">Adventure</a>
            <a class="dropdown-item" href="#">Super hero</a>
        </div>
        </div>
        </div>

        
        <div class="col-sm-3" id="pretraga">
        <form>
            <input id="Pretraga" type="text" name="search" placeholder="Search..">
            <button id="pretrazi" type="button" onclick=""><i class="fa fa-search"></i></button>
        </form>
        </div>    
        <div class="col-sm-3" id="formica">
        <div id="user"><?php echo $usernameClana?></div>
        <form id="signout" action="odjava.php" method="POST"> 
            <input type="submit" class="btn btn-outline-warning" name="signout" value="Sign Out"/>
        </form>
        </div>
    </div>

    <?php

        $movieId = $_GET["uid"];
        $servername = "localhost";
        $username = "root";
        $password = "12345";
        $dBase = "bazaPodataka";

        $connect = new mysqli($servername, $username, $password, $dBase);

        $select = "SELECT idF, naslovF, oFilmu, zanr, scenario, direktori, producenti, glumci, produkcija, poster, trajanje, ocena, brojOcena FROM tabelaFilmova WHERE idF=$movieId";
        $selected = $connect->query($select);

        $selektovanId = "";

        if ($selected ->num_rows > 0) {

            while($row = $selected->fetch_assoc()) {
                $selektovanId = $row["idF"];
                $selektovanNaslov = $row["naslovF"];
                $selektovanOFilmu = $row["oFilmu"];
                $selektovanZanr = $row["zanr"];
                $selektovanScenario = $row["scenario"];
                $selektovanDirektori = $row["direktori"];
                $selektovanProducenti = $row["producenti"];
                $selektovanGlumci = $row["glumci"];
                $selektovanProdukcija = $row["produkcija"];
                $selektovanPoster = $row["poster"];
                $selektovanTrajanje = $row["trajanje"];
                $selektovanOcena= $row["ocena"];
                $selektovanBrojOcena = $row["brojOcena"];
                $_SESSION['idF'] = $selektovanId;

            }
        }

        $connect->close();
    ?>

    <div id="brisanje" >
    <form action="brisanjeFilmova.php" method="POST"> 
        <button class="btn btn-outline-warning" id="dugmeZaB">Delete Movie</button>
    </form>
    </div>

    <div id="opisFilma" class="container"><br>
        <div  class="opis" style="margin-top:4% ;width:50% ; flex-direction: column;">

            <div class="informacije"  >
                <p style="text-align: center; font-size: x-large; font-weight: bold;"><?php echo $selektovanNaslov?>&ensp;(<?php echo $selektovanProdukcija?>)</p>
                <?php
                    $prosecnaOcena = (float)$selektovanOcena / $selektovanBrojOcena;
                    $ispisPrOcene = number_format((float)$prosecnaOcena , 1, '.', '');
                ?>
                <p style="text-align: center;"><b>Rating:</b>&ensp;<?php echo $ispisPrOcene?></p>
                <p style="text-align: center;"><b>Number of grades:</b>&ensp;<?php echo $selektovanBrojOcena?></p>
            
            </div>

            <div class="slikaFilma"  ><img style="height:500px; margin-bottom:5% " src="slike/<?php echo $selektovanPoster?>" alt="moviePicture"></div>

        </div>
        <div class="drugeInf" style="margin-top:20% ; margin-left:5% ; width:30%;">
            <p><b>Genre(s):</b>&ensp;<?php echo $selektovanZanr?></p>
            <p><b>Screenplay:</b>&ensp;<?php echo $selektovanScenario?></p>
            <p><b>Directed by:</b>&ensp;<?php echo $selektovanDirektori?></p>
            <p><b>Production:</b>&ensp;<?php echo $selektovanProducenti?></p>
            <p><b>Starring:</b>&ensp;<?php echo $selektovanGlumci?></p>
            <p><b>Duration:</b>&ensp;<?php echo $selektovanTrajanje?>min</p>
            <p><b>Description:</b><br><?php echo $selektovanOFilmu?></p>
            <br>
                   

        </div>
    </div> 


</body>
</html>