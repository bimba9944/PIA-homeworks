<?php
    include("baza.php");
    session_start();
    $connect = new mysqli($servername, $username, $password, $dBase);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    // definisanje promenljivih i setovanje na prazne stringove
    $imeErr = $sifraErr = "";
    $ime = $sifra =  "";

    $brojac1 = 0;   //inkrementira se samo kada je dobro ukucan username i/ili sifra
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ime"])) {
          $imeErr = "Name is required";
        } else {
          $ime = test_input($_POST["ime"]);
          // provera da li ime sadrzi samo slova i razmake
          if (!preg_match("/^[a-zA-Z-' ]*$/",$ime) && !filter_var($ime, FILTER_VALIDATE_EMAIL)) {
            $imeErr = "Only letters and white space allowed";
          }
          else {
            $brojac1 += 1;
          }
        }

        if (empty($_POST["sifra"])) {
            $sifraErr = "Required field";
        } else {
            $sifra = test_input($_POST["sifra"]);
            $brojac1 += 1;
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $sql = "SELECT id, ime, prezime, email, username, sifra, tipNaloga, logovanIliNe FROM tabelaClanova";
    $result = $connect->query($sql);


    if ($brojac1 == 2){
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if (($row["email"] == $ime || $row["username"] == $ime) && $row["sifra"] == $sifra){
                    $_SESSION['id'] = $row["id"];
                    $_SESSION['ime'] = $row["ime"];
                    $_SESSION['prezime'] = $row["prezime"];
                    $_SESSION['email'] = $row["email"];
                    $_SESSION['username'] = $row["username"];
                    $_SESSION['sifra'] = $row["sifra"];
                    $_SESSION['tipNaloga'] = $row["tipNaloga"];
                    $idClana = $row["id"];


                    $update = "UPDATE tabelaClanova SET logovanIliNe='da' WHERE id=$idClana";

                    if ($connect->query($update) === TRUE) {
                        //echo "Record updated successfully";
                    }
                    else {
                        echo "Error updating record: " . $connect->error;
                    }
                    

                    $selectStatus = "SELECT logovanIliNe FROM tabelaClanova WHERE id=$idClana";
                    $selectedStat = $connect->query($selectStatus);

                    if ($selectedStat->num_rows > 0) {
                        while($rowStat = $selectedStat->fetch_assoc()) {
                            if($rowStat["logovanIliNe"] == "da"){
                                $_SESSION['logovanIliNe'] = $rowStat["logovanIliNe"];
                                if($_SESSION['tipNaloga'] == "admin"){
                                    header("Location:nebitno.php");
                                }
                                else{
                                   // header("Location:pageUser.php");
                                }
                            }
                        }
                    }

                }
            }
        }
        $brojac1 = 0;
    }

    $connect->close();




?>