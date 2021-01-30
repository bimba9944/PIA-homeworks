<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include("baza.php");

$ImeErr = $PrezimeErr = $EmailErr = $UsernameErr = $SifraErr = $NalogErr = "";
$Ime = $Prezime = $Email = $Username = $Sifra = "";

$Connect = new mysqli($servername, $username, $password, $dBase);

$Sql = "SELECT email, username FROM tabelaClanova";
$Result = $Connect->query($Sql);

$bool1 = FALSE;
$bool2 = FALSE;
$bool3 = FALSE;
$bool4 = FALSE;
$bool5 = FALSE;
$bool6 = TRUE;


$stmtt = $Connect->prepare("INSERT INTO tabelaClanova (ime, prezime, email, username, sifra, tipNaloga, logovanIliNe) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmtt->bind_param("sssssss", $Ime, $Prezime, $Email, $Username, $Sifra, $tipClan, $logovanClan);
$tipClan = "clan";
$logovanClan = "ne";



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Ime"])) {
        $ImeErr = "Required field";
    } 
    else {
        $Ime = test_input($_POST["Ime"]);
        // provera da li ime sadrzi samo slova i razmake
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Ime)) {
        $ImeErr = "Only letters and white space allowed";
        }
        else{
            $bool1 = TRUE;
        }
    }


    if (empty($_POST["Prezime"])) {
        $PrezimeErr = "Required field";
    } 
    else {
        $Prezime = test_input($_POST["Prezime"]);
        // provera da li prezime sadrzi samo slova i razmake
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Prezime)) {
        $PrezimeErr = "Only letters and white space allowed";
        }
        else{
            $bool2 = TRUE;
        }
    }


    if (empty($_POST["Email"])) {
        $EmailErr = "Required field";
    } 
    else {
        $Email = test_input($_POST["Email"]);
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $EmailErr = "Invalid e-mail address.";
        }
        else{
            $bool3 = TRUE;
        }
    }


    if (empty($_POST["Username"])) {
        $UsernameErr = "Required field";
    }
     else {
        $Username = test_input($_POST["Username"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Username)) {
        $UsernameErr = "Only letters and white space allowed";
        }
        else{
            $bool4 = TRUE; 
        }
    }
    

    if (empty($_POST["Sifra"])) {
        $SifraErr = "Required field";
    }
     else {
        $Sifra = test_input($_POST["Sifra"]);
        $bool5 = TRUE;
    }  
}



while($row = $Result->fetch_assoc()) {
    if ($row["username"] == $Username || $row["email"] == $Email){
        $bool6 = FALSE;
        $NalogErr = "There is account with this Username or E-mail!";
    }
}


if ($bool1 == TRUE && $bool2 == TRUE && $bool3 == TRUE && $bool4 == TRUE && $bool5 == TRUE && $bool6 == TRUE){
    $stmtt->execute();

    $bool1 = FALSE;
    $bool2 = FALSE;
    $bool3 = FALSE;
    $bool4 = FALSE;
    $bool5 = FALSE;
    header("Location:pocetna.php");
}


else {
    $bool1 = FALSE;
    $bool2 = FALSE;
    $bool3 = FALSE;
    $bool4 = FALSE;
    $bool5 = FALSE;
    $bool6 = TRUE;
}


$stmtt->close();

$Connect->close();


?>