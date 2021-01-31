function ucitajStrF(idF) {              
    window.location.href="stranicaFilmaC.php?uid="+idF;
}

function ucitajStrD() {
    window.location.href="stranicaZaDodavanjeF.php";
}

function pretragaPoNaslovuC() {
    window.location.href="StrZaPretraguC.php?izraz="+document.getElementById("Pretraga").value+"&tip=poNaslovu";
}

function pretragaPoZanruC(strZanr){
    window.location.href="StrZaPretraguC.php?izraz="+strZanr+"&tip=poZanru";
}
