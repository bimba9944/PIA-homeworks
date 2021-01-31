<!DOCTYPE html>
<html>
<head>
    <title>IMDb</title>
    <meta name="author" content="Veljko Maksimovic" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="pocetna.css">
    <script src="sajt.js"></script> 
    <!-- <?php include("addMovie.php");?> -->
</head>
<body>
    <div id="heder">
        <div id="logo">IMDb</div>
    </div>

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

    <div class="container" id="signInUp" style="margin-top: 2%;">
        <h2>Add new movie:</h2><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Title: <br>
            <input style="width: 60%;" id="input" type="text" name="dodajNaslov">
            <br>
            <span class="error"></span>
            <br>
            Genre(s): <br>
            <input style="width: 60%;" id="input" type="text" name="dodajZanr">
            <br>
            <span class="error"></span>
            <br>
            Screenplay: <br>
            <input style="width: 60%;" id="input" type="text" name="dodajScenaristu">
            <br>
            <span class="error"></span>
            <br>
            Director(s): <br>
            <input style="width: 60%;" id="input" type="text" name="dodajDirektore">
            <br>
            <span class="error"></span>
            <br>
            Production: <br>
            <input style="width: 60%;" id="input" type="text" name="dodajProducente">
            <br>
            <span class="error"></span>
            <br>
            Starring: <br>
            <input style="width: 60%;" id="input" type="text" name="dodajGlumce">
            <br>
            <span class="error"></span>
            <br>
            Release year: <br>
            <input style="width: 60%;" id="input" type="text" name="dodajGodinu">
            <br>
            <span class="error"></span>
            <br>
            Picture name (from slike/): <br>
            <input style="width: 60%;" id="input" type="text" name="dodajPoster">
            <br>
            <span class="error"></span>
            <br>
            Duration (min): <br>
            <input style="width: 60%;" id="input" type="text" name="dodajTrajanje">
            <br>
            <span class="error"></span>
            <br>
            Description: <br>
            <textarea style="width: 60%;" id="input" type="text" name="dodajOpis" rows="7"></textarea>
            <br>
            <span class="error"></span>
            <br>
            <input id="dodajFilm" class="btn btn-outline-warning" type="submit" name="submit" value="Add movie">  
            <br><br>
        </form> 
    </div>
</body>
</html>