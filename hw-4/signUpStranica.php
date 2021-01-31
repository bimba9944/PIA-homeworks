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
    <?php include("signUp.php");?>
    <script src="imdb.js"></script>
</head>
<body>
    <div class="sticky-top" id="heder">
        <div id="logo">IMDb</div>
    </div>


    <div class="container" id="signInUp" >
        <h2>Sign Up:</h2><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <b>Name: </b> <br>
            <input id="input" type="text" name="Ime" value="<?php echo $Ime;?>">
            <br>
            <span class="error"><?php echo $ImeErr;?></span>
            <br>
            <b>Lastname: </b> <br>
            <input id="input" type="text" name="Prezime" value="<?php echo $Prezime;?>">
            <br>
            <span class="error"><?php echo $PrezimeErr;?></span>
            <br>
            <b>E-mail: </b> <br>
            <input id="input" type="text" name="Email" value="<?php echo $Email;?>">
            <br>
            <span class="error"><?php echo $EmailErr;?></span>
            <br>
            <b>Username: </b> <br>
            <input id="input" type="text" name="Username" value="<?php echo $Username;?>">
            <br>
            <span class="error"><?php echo $UsernameErr;?></span>
            <br>
            <b>Password: </b> <br>
            <input id="input" type="password" name="Sifra">
            <br>
            <span class="error"><?php echo $SifraErr;?></span>
            <br>
            <input id="submit" class="btn btn-outline-warning" type="submit" name="Submit" value="Sign Up">  
            <br>
            <span class="error"><?php echo $NalogErr;?></span>
            <br><br>
        </form> 
    </div>
</body>
</html>