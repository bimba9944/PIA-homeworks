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
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    session_start();
    $idClana =  $_SESSION['id'];
    $imeClana = $_SESSION['ime'];
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
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('comedy')">Comedy</a>
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('action')">Action</a>
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('drama')">Drama</a>
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('sci-fi')">Sci-Fi</a>
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('horror')">Horror</a>
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('thriller')">Thriller</a>
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('romance')">Romance</a>
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('mystery')">Mystery</a>
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('crime')">Crime</a>
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('adventure')">Adventure</a>
            <a class="dropdown-item" href="#" onclick="pretragaPoZanruA('super hero')">Super hero</a>
        </div>
        </div>
        </div>

        
        <div class="col-sm-3" id="pretraga">
        <form>
            <input id="Pretraga" type="text" name="search" placeholder="Search..">
            <button id="pretrazi" type="button" onclick="pretragaPoNaslovuA()"><i class="fa fa-search"></i></button>
        </form>
        </div>    
        <div class="col-sm-3" id="formica">
        <div id="user"><?php echo $usernameClana?></div>
        <form id="signout" action="odjava.php" method="POST"> 
            <input type="submit" class="btn btn-outline-warning" name="signout" value="Sign Out"/>
        </form>
        </div>
    </div>

    <div id="dodavanje">
        <button class="btn btn-outline-warning" id="dugmeZaD" onclick="ucitajStrD()">Add movie</button>
    </div>



    <div id="sviFilmovi" class="container-fluid"><br>
        <div class="kartice">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "12345";
            $dBase = "bazaPodataka";

            $connect = new mysqli($servername, $username, $password, $dBase);

            if ($connect->connect_error) {
                die("Connection failed: " . $connect->connect_error);
            }

            $selektovaniF = "SELECT idF, naslovF, oFilmu, zanr, scenario, direktori, producenti, glumci, produkcija, poster, trajanje, ocena, brojOcena FROM tabelaFilmova";
            $resultF = $connect->query($selektovaniF);
            $sviFilmovi = "";
            while($row = $resultF->fetch_assoc()) {
                $prosecnaOcena = (float)$row["ocena"] / $row["brojOcena"];
                $ispisPrOcene = number_format((float)$prosecnaOcena , 1, '.', '');
                $sviFilmovi .= '<div class="kartica"><a class="link-kartica" id="'.$row["idF"].'" onclick="window.location.href=\'stranicaFilmaA.php?uid='.$row["idF"].'\'">
                <img src="slike/'.$row["poster"].'" alt="moviePicture">
                     <div class="deskripcijaF">
                         <div class="deskripcijaN" id="deskripcijaN"><span>'.$row["naslovF"].'</span><br></div>
                         <div class="deskripcijaO"><i class="fa fa-star-o" style="color: yellow;"></i>&nbsp;'.$ispisPrOcene.'</div>
                     </div>
                     </a>
                </div>';
                
            }
            echo $sviFilmovi;
            $connect->close();
            ?>
        </div>
    </div> 


</body>
</html>