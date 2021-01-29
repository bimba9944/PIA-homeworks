<!DOCTYPE html>
<html>
<head>
    <title>PIA HW - IMDb</title>
    <meta name="author" content="Veljko Maksimovic" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="pocetna.css">
    <!-- <script src="imdb.js"></script> -->
</head>
<body>
    <div class="sticky-top" id="heder">
        <div id="logo">IMDb</div>
    </div>

    <div class="container" id="signInUp">
        <h2>Sign in or Sign up:</h2><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <b>Username or e-mail: </b> <br>
            <input id="input" type="text" name="name" >
            <br>
            <span class="error"></span>
            <br>
            <b>Password: </b> <br>
            <input id="input" type="password" name="password">
            <br>
            <span class="error"></span>
            <br>
            <input id="submit" class="btn btn-outline-warning" type="submit" name="submit" value="Sign in">  
            <br><br>
            <b>You don't have account? Sign up! </b> <br>
        </form> 
        <button id="signUpButton" class="btn btn-outline-warning" target="_blank">Sign up</button>
    </div>

 



</body>
</html>