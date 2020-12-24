var myObj = { "prvo": {"broj": "1. Question" , "pitanje":"Which event is generally considered to be the first belligerent act of World War II?" , "odgovori" :
{"netacan1": "Germany’s attack on Russia", "netacan2":"Germany’s attack on Britain" , "tacan1": "Germany’s attack on Poland" , "netacan3": "Germany’s occupation of Austria" }}
, "drugo" : {"broj": "2. Question" , "pitanje":"Against which country did the Soviet Union instigate an armed conflict in late 1939?" , "odgovori": 
{"tacan1": "Finland" , "netacan1": "Yugoslavia" , "netacan2":"Czechoslovakia" , "netacan3": "Hungary"}}
, "trece" : {"broj": "3. Question" , "pitanje":"Overall, the Battle of Britain is considered to be" , "odgovori": 
{"netacan1": "A victory for Germany" , "tacan1":"A victory for Britain" , "netacan2":"A victory for neither" , "netacan3":"A minor conflict"}}  
, "cetvrto": {"broj":"4. Question" , "pitanje":"What was the code name given to Germany’s plan to invade the USSR?" , "odgovori":
{"netacan1":"Operation Sea Lion" , "tacan1":"Operation Barbarossa" , "netacan2":"Operation Wolfenstein" , "netacan3":"Operation Crossbow"}}
, "peto" : {"broj":"5. Question" , "pitanje":"On which region of the Soviet Union did Hitler place the highest priority?" , "odgovori":
{"tacan1":"Ukraine and southern Russia" , "netacan1":"Leningrad and northern Russia" , "netacan2":"Moscow and central Russia" , "netacan3":"Siberia"}}             
, "sesto" : {"broj":"6. Question" , "pitanje":"During World War II, the Germans had a great victory at Stalingrad." , "odgovori":
{"tacan":"False" , "netacan":"True"}}
, "sedmo" : {"broj":"7. Question" , "pitanje":"Japan won the Battle of Midway." , "odgovori":{"tacan": "False" , "netacan": "True"}}
, "osmo" : {"broj":"8. Question" , "pitanje":"Which country instigated the conflict in North Africa?" , "odgovori": {"tacan":"Italy"}}
, "deveto" : {"broj":"9. Question" , "pitanje":"Which Allied country’s forces arrived in Berlin first?" , "odgovori": {"tacan":"USSR"}                }
, "deseto" : {"broj":"10. Question" , "pitanje":"What were the V1 and V2?" , "odgovori":{"tacan":"German missiles"}}
};
var myJSON = JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON);

var text = localStorage.getItem("testJSON");
var obj = JSON.parse(text);

$(document).ready(function(){
    $("#poeni_vreme").css("display", "none");
  });


$(document).ready(function(){
    $("#start").click(function(){
        var ime = $("#uname").val().toString();
        if (ime != ""){
            $("#pozadina").hide();
            $("#naslov").hide();
            $("#pitanje1").fadeIn();
            $("#poeni_vreme").fadeIn();
            // $("#naslov").css({"border": "solid"});
            prikaz1();
            tajmer1();
        }
    });
});

$(document).ready(function(){
    $("#odustani_dugme").click(function(){
        $("#kraj").fadeIn();
        $(".pitanja").hide();
        document.getElementById("poeni_naslov").innerHTML = "Number of points: "+bodovi.toString();
        
        });
});

function prikaz1(){
    document.getElementById("broj1").innerHTML = myObj.prvo.broj;
    document.getElementById("tekst_pitanje1").innerHTML = myObj.prvo.pitanje;
    document.getElementById("jedan").innerHTML = myObj.prvo.odgovori.netacan1;
    document.getElementById("dva").innerHTML = myObj.prvo.odgovori.netacan2;
    document.getElementById("tri").innerHTML = myObj.prvo.odgovori.tacan1;
    document.getElementById("cetri").innerHTML = myObj.prvo.odgovori.netacan3;
}

function prikaz2(){
    document.getElementById("broj2").innerHTML = myObj.drugo.broj;
    document.getElementById("tekst_pitanje2").innerHTML = myObj.drugo.pitanje;
    document.getElementById("pet").innerHTML = myObj.drugo.odgovori.tacan1;
    document.getElementById("sest").innerHTML = myObj.drugo.odgovori.netacan1;
    document.getElementById("sedam").innerHTML = myObj.drugo.odgovori.netacan2;
    document.getElementById("osam").innerHTML = myObj.drugo.odgovori.netacan3;
}

function prikaz3(){
    document.getElementById("broj3").innerHTML = myObj.trece.broj;
    document.getElementById("tekst_pitanje3").innerHTML = myObj.trece.pitanje;
    document.getElementById("devet").innerHTML = myObj.trece.odgovori.netacan1;
    document.getElementById("deset").innerHTML = myObj.trece.odgovori.tacan1;
    document.getElementById("jedanaest").innerHTML = myObj.trece.odgovori.netacan2;
    document.getElementById("dvanaest").innerHTML = myObj.trece.odgovori.netacan3;
}

function prikaz4(){
    document.getElementById("broj4").innerHTML = myObj.cetvrto.broj;
    document.getElementById("tekst_pitanje4").innerHTML = myObj.cetvrto.pitanje;
    document.getElementById("trinaest").innerHTML = myObj.cetvrto.odgovori.netacan1;
    document.getElementById("cetrnaest").innerHTML = myObj.cetvrto.odgovori.tacan1;
    document.getElementById("petnaest").innerHTML = myObj.cetvrto.odgovori.netacan2;
    document.getElementById("sesnaest").innerHTML = myObj.cetvrto.odgovori.netacan3;
}

function prikaz5(){
    document.getElementById("broj5").innerHTML = myObj.peto.broj;
    document.getElementById("tekst_pitanje5").innerHTML = myObj.peto.pitanje;
    document.getElementById("sedamnaest").innerHTML = myObj.peto.odgovori.tacan1;
    document.getElementById("osamnaest").innerHTML = myObj.peto.odgovori.netacan1;
    document.getElementById("devetnaest").innerHTML = myObj.peto.odgovori.netacan2;
    document.getElementById("dvadeset").innerHTML = myObj.peto.odgovori.netacan3;
}

function prikaz6(){
    document.getElementById("broj6").innerHTML = myObj.sesto.broj;
    document.getElementById("tekst_pitanje6").innerHTML = myObj.sesto.pitanje;
    document.getElementById("dvadeset1").innerHTML = myObj.sesto.odgovori.tacan;
    document.getElementById("dvadeset2").innerHTML = myObj.sesto.odgovori.netacan;
}

function prikaz7(){
    document.getElementById("broj7").innerHTML = myObj.sedmo.broj;
    document.getElementById("tekst_pitanje7").innerHTML = myObj.sedmo.pitanje;
    document.getElementById("dvadeset3").innerHTML = myObj.sedmo.odgovori.tacan;
    document.getElementById("dvadeset4").innerHTML = myObj.sedmo.odgovori.netacan;
}

function prikaz8(){
    document.getElementById("broj8").innerHTML = myObj.osmo.broj;
    document.getElementById("tekst_pitanje8").innerHTML = myObj.osmo.pitanje;
}

function prikaz9(){
    document.getElementById("broj9").innerHTML = myObj.deveto.broj;
    document.getElementById("tekst_pitanje9").innerHTML = myObj.deveto.pitanje;
}

function prikaz10(){
    document.getElementById("broj10").innerHTML = myObj.deseto.broj;
    document.getElementById("tekst_pitanje10").innerHTML = myObj.deseto.pitanje;
}

var bodovi = 0;

function prikaz11(){
    if(document.getElementById("radio1").checked){
        $("#jedan").css({"color": "red"});
        $("#tri").css({"color": "chartreuse"});   
    }
    if(document.getElementById("radio2").checked){
        $("#dva").css({"color": "red"});
        $("#tri").css({"color": "chartreuse"});
    }
    if(document.getElementById("radio3").checked){
        $("#tri").css({"color": "chartreuse"});
        bodovi++;
        document.getElementById("poeni").innerHTML = "Points: "+bodovi.toString();
    }
    if(document.getElementById("radio4").checked){
        $("#cetri").css({"color": "red"});
        $("#tri").css({"color": "chartreuse"});
    }
}

function prikaz22(){
    if(document.getElementById("radio5").checked){
        $("#pet").css({"color": "chartreuse"});  
        bodovi++; 
        document.getElementById("poeni").innerHTML = "Points: "+bodovi.toString();
    }
    if(document.getElementById("radio6").checked){
        $("#sest").css({"color": "red"});
        $("#pet").css({"color": "chartreuse"});
    }
    if(document.getElementById("radio7").checked){
        $("#sedam").css({"color": "red"});
        $("#pet").css({"color": "chartreuse"});
    }
    if(document.getElementById("radio8").checked){
        $("#osam").css({"color": "red"});
        $("#pet").css({"color": "chartreuse"});
    }
}

function prikaz33(){
    if(document.getElementById("radio9").checked){
        $("#devet").css({"color": "red"});
        $("#deset").css({"color": "chartreuse"});   
    }
    if(document.getElementById("radio10").checked){
        $("#deset").css({"color": "chartreuse"});
        bodovi++;
        document.getElementById("poeni").innerHTML = "Points: "+bodovi.toString();
    }
    if(document.getElementById("radio11").checked){
        $("#jedanaest").css({"color": "red"});
        $("#deset").css({"color": "chartreuse"});
    }
    if(document.getElementById("radio12").checked){
        $("#dvanaest").css({"color": "red"});
        $("#deset").css({"color": "chartreuse"});
    }
}

function prikaz44(){
    if(document.getElementById("radio13").checked){
        $("#trinaest").css({"color": "red"});
        $("#cetrnaest").css({"color": "chartreuse"});   
    }
    if(document.getElementById("radio14").checked){
        $("#cetrnaest").css({"color": "chartreuse"});
        bodovi++;
        document.getElementById("poeni").innerHTML = "Points: "+bodovi.toString();
    }
    if(document.getElementById("radio15").checked){
        $("#petnaest").css({"color": "red"});
        $("#cetrnaest").css({"color": "chartreuse"});
    }
    if(document.getElementById("radio16").checked){
        $("#sesnaest").css({"color": "red"});
        $("#cetrnaest").css({"color": "chartreuse"});
    }
}

function prikaz55(){
    if(document.getElementById("radio17").checked){
        $("#sedamnaest").css({"color": "chartreuse"}); 
        bodovi++;  
        document.getElementById("poeni").innerHTML = "Points: "+bodovi.toString();
    }
    if(document.getElementById("radio18").checked){
        $("#osamnaest").css({"color": "red"});
        $("#sedamnaest").css({"color": "chartreuse"});
    }
    if(document.getElementById("radio19").checked){
        $("#devetnaest").css({"color": "red"});
        $("#sedamnaest").css({"color": "chartreuse"});
    }
    if(document.getElementById("radio20").checked){
        $("#dvadeset").css({"color": "red"});
        $("#sedamnaest").css({"color": "chartreuse"});
    }
}

function prikaz66(){
    if(document.getElementById("radio21").checked){
        $("#dvadeset1").css({"color": "chartreuse"});  
        bodovi++; 
        document.getElementById("poeni").innerHTML = "Points: "+bodovi.toString();
    }
    if(document.getElementById("radio22").checked){
        $("#dvadeset2").css({"color": "red"});
        $("#dvadeset1").css({"color": "chartreuse"});
    }
}

function prikaz77(){
    if(document.getElementById("radio23").checked){
        $("#dvadeset3").css({"color": "chartreuse"});
        bodovi++;   
        document.getElementById("poeni").innerHTML = "Points: "+bodovi.toString();
    }
    if(document.getElementById("radio24").checked){
        $("#dvadeset4").css({"color": "red"});
        $("#dvadeset3").css({"color": "chartreuse"});
    }
}

function prikaz88(){
    var provera1 = $("#unesi1").val().toString();
    var provera2 = myObj.osmo.odgovori.tacan;
    if(provera1 == provera2){
        $("#unesi1").css({"background-color": "chartreuse"});
        bodovi++;
        document.getElementById("poeni").innerHTML = "Points: "+bodovi.toString();
    }
    if(provera1 != provera2){
        $("#unesi1").css({"background-color": "red"});
        $("#ispis_tacnog1").append(myObj.osmo.odgovori.tacan);
        $("#ispis_tacnog1").css({"color": "chartreuse"});
    }
}

function prikaz99(){
    var provera3 = $("#unesi2").val().toString();
    var provera4 = myObj.deveto.odgovori.tacan;
    if(provera3 == provera4){
        $("#unesi2").css({"background-color": "chartreuse"});
        bodovi++;
        document.getElementById("poeni").innerHTML = "Points: "+bodovi.toString();
    }
    if(provera3 != provera4){
        $("#unesi2").css({"background-color": "red"});
        $("#ispis_tacnog2").append(myObj.deveto.odgovori.tacan);
        $("#ispis_tacnog2").css({"color": "chartreuse"});
    }
}

function prikaz1010(){
    var provera5 = $("#unesi3").val().toString();
    var provera6 = myObj.deseto.odgovori.tacan;
    if(provera5 == provera6){
        $("#unesi3").css({"background-color": "chartreuse"});
        bodovi++;
        document.getElementById("poeni").innerHTML = "Points: "+bodovi.toString();
    }
    if(provera5 != provera6){
        $("#unesi3").css({"background-color": "red"});
        $("#ispis_tacnog3").append(myObj.deseto.odgovori.tacan);
        $("#ispis_tacnog3").css({"color": "chartreuse"});
    }
}










$(document).ready(function(){
    $("#sledece1").click(function(){
        document.getElementById("sledece1").disabled = true;  
        document.getElementById("preskoci1").disabled = true;  
        document.getElementById("radio1").disabled = true; 
        document.getElementById("radio2").disabled = true; 
        document.getElementById("radio3").disabled = true; 
        document.getElementById("radio4").disabled = true; 
        prikaz11();
        setTimeout(funkcija1, 2000);
        });
});

$(document).ready(function(){
    $("#sledece2").click(function(){
        document.getElementById("sledece2").disabled = true;  
        document.getElementById("preskoci2").disabled = true;  
        document.getElementById("radio5").disabled = true; 
        document.getElementById("radio6").disabled = true; 
        document.getElementById("radio7").disabled = true; 
        document.getElementById("radio8").disabled = true; 
        prikaz22();
        setTimeout(funkcija2, 2000);
        });
});

$(document).ready(function(){
    $("#sledece3").click(function(){
        document.getElementById("sledece3").disabled = true;  
        document.getElementById("preskoci3").disabled = true;  
        document.getElementById("radio9").disabled = true; 
        document.getElementById("radio10").disabled = true; 
        document.getElementById("radio11").disabled = true; 
        document.getElementById("radio12").disabled = true; 
        prikaz33();
        setTimeout(funkcija3, 2000);
        });
});

$(document).ready(function(){
    $("#sledece4").click(function(){
        document.getElementById("sledece4").disabled = true;  
        document.getElementById("preskoci4").disabled = true;  
        document.getElementById("radio13").disabled = true; 
        document.getElementById("radio14").disabled = true; 
        document.getElementById("radio15").disabled = true; 
        document.getElementById("radio16").disabled = true; 
        prikaz44();
        setTimeout(funkcija4, 2000);
        });
});

$(document).ready(function(){
    $("#sledece5").click(function(){
        document.getElementById("sledece5").disabled = true;  
        document.getElementById("preskoci5").disabled = true;  
        document.getElementById("radio17").disabled = true; 
        document.getElementById("radio18").disabled = true; 
        document.getElementById("radio19").disabled = true; 
        document.getElementById("radio20").disabled = true; 
        prikaz55();
        setTimeout(funkcija5, 2000);
        });
});

$(document).ready(function(){
    $("#sledece6").click(function(){
        document.getElementById("sledece6").disabled = true;  
        document.getElementById("preskoci6").disabled = true;  
        document.getElementById("radio21").disabled = true; 
        document.getElementById("radio22").disabled = true; 
        prikaz66();
        setTimeout(funkcija6, 2000);
        });
});

$(document).ready(function(){
    $("#sledece7").click(function(){
        document.getElementById("sledece7").disabled = true;  
        document.getElementById("preskoci7").disabled = true;  
        document.getElementById("radio23").disabled = true; 
        document.getElementById("radio24").disabled = true; 
        prikaz77();
        setTimeout(funkcija7, 2000);
        });
});

$(document).ready(function(){
    $("#sledece8").click(function(){
        document.getElementById("sledece8").disabled = true;  
        document.getElementById("preskoci8").disabled = true;  
        document.getElementById("unesi1").disabled = true; 
        prikaz88();
        setTimeout(funkcija8, 2000);
        });
});

$(document).ready(function(){
    $("#sledece9").click(function(){
        document.getElementById("sledece9").disabled = true;  
        document.getElementById("preskoci9").disabled = true;  
        document.getElementById("unesi2").disabled = true; 
        prikaz99();
        setTimeout(funkcija9, 2000);
        });
});

$(document).ready(function(){
    $("#sledece10").click(function(){
        document.getElementById("sledece10").disabled = true;  
        document.getElementById("preskoci10").disabled = true;  
        document.getElementById("unesi3").disabled = true; 
        prikaz1010();
        setTimeout(funkcija10, 2000);
        });
});













$(document).ready(function(){
     $("#preskoci1").click(function(){
        document.getElementById("sledece1").disabled = true;  
        document.getElementById("preskoci1").disabled = true;     
        funkcija1();
         });
});

$(document).ready(function(){
    $("#preskoci2").click(function(){
        document.getElementById("sledece2").disabled = true;  
        document.getElementById("preskoci2").disabled = true;   
        funkcija2();
        });
});

$(document).ready(function(){
    $("#preskoci3").click(function(){
        document.getElementById("sledece3").disabled = true;  
        document.getElementById("preskoci3").disabled = true;  
        funkcija3();
        });
});

$(document).ready(function(){
    $("#preskoci4").click(function(){
        document.getElementById("sledece4").disabled = true;  
        document.getElementById("preskoci4").disabled = true;  
        funkcija4();
        });
});

$(document).ready(function(){
    $("#preskoci5").click(function(){
        document.getElementById("sledece5").disabled = true;  
        document.getElementById("preskoci5").disabled = true;  
        funkcija5();
        });
});

$(document).ready(function(){
    $("#preskoci6").click(function(){
        document.getElementById("sledece6").disabled = true;  
        document.getElementById("preskoci6").disabled = true;  
        funkcija6();
        });
});

$(document).ready(function(){
    $("#preskoci7").click(function(){
        document.getElementById("sledece7").disabled = true;  
        document.getElementById("preskoci7").disabled = true;  
        funkcija7();
        });
});

$(document).ready(function(){
    $("#preskoci8").click(function(){
        document.getElementById("sledece8").disabled = true;  
        document.getElementById("preskoci8").disabled = true;  
        funkcija8();
        });
});

$(document).ready(function(){
    $("#preskoci9").click(function(){
        document.getElementById("sledece9").disabled = true;  
        document.getElementById("preskoci9").disabled = true;  
        funkcija9();
        });
});

$(document).ready(function(){
    $("#preskoci10").click(function(){
        document.getElementById("sledece10").disabled = true;  
        document.getElementById("preskoci10").disabled = true;  
        funkcija10();
        });
});

function funkcija1(){
    $("#pitanje1").hide(1000);
    $("#pitanje2").fadeIn(1500);
    prikaz2();
    tajmer2();
}

function funkcija2(){
    $("#pitanje2").hide(1000);
    $("#pitanje3").fadeIn(1500);
    prikaz3();
    tajmer3();
}
function funkcija3(){
    $("#pitanje3").hide(1000);
    $("#pitanje4").fadeIn(1500);
    prikaz4();
    tajmer4();
}
function funkcija4(){
    $("#pitanje4").hide(1000);
    $("#pitanje5").fadeIn(1500);
    prikaz5();
    tajmer5();
}
function funkcija5() {
    $("#pitanje5").hide(1000);
    $("#pitanje6").fadeIn(1500);
    prikaz6();
    tajmer6();
}
function funkcija6(){
    $("#pitanje6").hide(1000);
    $("#pitanje7").fadeIn(1500);
    prikaz7();
    tajmer7();
}
function funkcija7(){
    $("#pitanje7").hide(1000);
    $("#pitanje8").fadeIn(1500);
    prikaz8();
    tajmer8();
}
function funkcija8(){
    $("#pitanje8").hide(1000);
    $("#pitanje9").fadeIn(1500);
    prikaz9();
    tajmer9();
}
function funkcija9(){
    $("#pitanje9").hide(1000);
    $("#pitanje10").fadeIn(1500);
    prikaz10();
    tajmer10();
}
function funkcija10(){
    $("#pitanje10").hide(1000);
    $("#kraj").fadeIn(1500);
    document.getElementById("poeni_naslov").innerHTML = "Number of points: "+bodovi.toString();
    $(document).ready(function(){
        $("#poeni_vreme").css("display", "none");
      });
}

function tajmer1(){
var sekunde1 = 19;
var timerForNext1 = setInterval(afterInterval1, 1000);
document.getElementById("vreme").innerHTML = "Тimer: 20";
function afterInterval1() {
    document.getElementById("vreme").innerHTML = "Тimer: " + sekunde1;
    document.getElementById("sledece1").onclick = tajmer11;
    document.getElementById("preskoci1").onclick = tajmer11;
    document.getElementById("odustani_dugme").onclick = tajmer11;
    function tajmer11(){
      document.getElementById("vreme").innerHTML = "Тimer: 20";
      clearInterval(timerForNext1);
      document.getElementById("sledece1").disabled = true;  
      document.getElementById("preskoci1").disabled = true; 
      sekunde1 = 19;
    }
    sekunde1--;
    if (sekunde1 == -2) {
      clearInterval(timerForNext1);
      funkcija1();
    }
  }
}

function tajmer2(){
    var sekunde2 = 19;
    var timerForNext2 = setInterval(afterInterval2, 1000);
    document.getElementById("vreme").innerHTML = "Тimer: 20";
    function afterInterval2() {
        document.getElementById("vreme").innerHTML = "Тimer: " + sekunde2;
        document.getElementById("sledece2").onclick = tajmer22;
        document.getElementById("preskoci2").onclick = tajmer22;
        document.getElementById("odustani_dugme").onclick = tajmer22;
        function tajmer22(){
          document.getElementById("vreme").innerHTML = "Тimer: 20";
          clearInterval(timerForNext2);
          document.getElementById("sledece2").disabled = true;  
          document.getElementById("preskoci2").disabled = true; 
          sekunde2 = 19;
        }
        sekunde2--;
        if (sekunde2 == -2) {
          clearInterval(timerForNext2);
          funkcija2();
     }
  }
}

function tajmer3(){
    var sekunde3 = 19;
    var timerForNext3 = setInterval(afterInterval3, 1000);
    document.getElementById("vreme").innerHTML = "Тimer: 20";
    function afterInterval3() {
        document.getElementById("vreme").innerHTML = "Тimer: " + sekunde3
        document.getElementById("sledece3").onclick = tajmer33;
        document.getElementById("preskoci3").onclick = tajmer33;
        document.getElementById("odustani_dugme").onclick = tajmer33;
        function tajmer33(){
          document.getElementById("vreme").innerHTML = "Тimer: 20";
          clearInterval(timerForNext3);
          document.getElementById("sledece3").disabled = true;  
          document.getElementById("preskoci3").disabled = true; 
          sekunde3 = 19;
        }
        sekunde3--;
        if (sekunde3 == -2) {
          clearInterval(timerForNext3);
          funkcija3();
     }
  }
}

function tajmer4(){
    var sekunde4 = 19;
    var timerForNext4 = setInterval(afterInterval4, 1000);
    document.getElementById("vreme").innerHTML = "Тimer: 20";
    function afterInterval4() {
        document.getElementById("vreme").innerHTML = "Тimer: " + sekunde4
        document.getElementById("sledece4").onclick = tajmer44;
        document.getElementById("preskoci4").onclick = tajmer44;
        document.getElementById("odustani_dugme").onclick = tajmer44;
        function tajmer44(){
          document.getElementById("vreme").innerHTML = "Тimer: 20";
          clearInterval(timerForNext4);
          document.getElementById("sledece4").disabled = true;  
          document.getElementById("preskoci4").disabled = true; 
          sekunde4 = 19;
        }
        sekunde4--;
        if (sekunde4 == -2) {
          clearInterval(timerForNext4);
          funkcija4();
     }
  }
}

function tajmer5(){
    var sekunde5 = 19;
    var timerForNext5 = setInterval(afterInterval5, 1000);
    document.getElementById("vreme").innerHTML = "Тimer: 20";
    function afterInterval5() {
        document.getElementById("vreme").innerHTML = "Тimer: " + sekunde5
        document.getElementById("sledece5").onclick = tajmer55;
        document.getElementById("preskoci5").onclick = tajmer55;
        document.getElementById("odustani_dugme").onclick = tajmer55;
        function tajmer55(){
          document.getElementById("vreme").innerHTML = "Тimer: 20";
          clearInterval(timerForNext5);
          document.getElementById("sledece5").disabled = true;  
          document.getElementById("preskoci5").disabled = true; 
          sekunde5 = 19;
        }
        sekunde5--;
        if (sekunde5 == -2) {
          clearInterval(timerForNext5);
          funkcija5();
     }
  }
}

function tajmer6(){
    var sekunde6 = 19;
    var timerForNext6 = setInterval(afterInterval6, 1000);
    document.getElementById("vreme").innerHTML = "Тimer: 20";
    function afterInterval6() {
        document.getElementById("vreme").innerHTML = "Тimer: " + sekunde6
        document.getElementById("sledece6").onclick = tajmer66;
        document.getElementById("preskoci6").onclick = tajmer66;
        document.getElementById("odustani_dugme").onclick = tajmer66;
        function tajmer66(){
          document.getElementById("vreme").innerHTML = "Тimer: 20";
          clearInterval(timerForNext6);
          document.getElementById("sledece6").disabled = true;  
          document.getElementById("preskoci6").disabled = true; 
          sekunde6 = 19;
        }
        sekunde6--;
        if (sekunde6 == -2) {
          clearInterval(timerForNext6);
          funkcija6();
     }
  }
}

function tajmer7(){
    var sekunde7 = 19;
    var timerForNext7 = setInterval(afterInterval7, 1000);
    document.getElementById("vreme").innerHTML = "Тimer: 20";
    function afterInterval7() {
        document.getElementById("vreme").innerHTML = "Тimer: " + sekunde7
        document.getElementById("sledece7").onclick = tajmer77;
        document.getElementById("preskoci7").onclick = tajmer77;
        document.getElementById("odustani_dugme").onclick = tajmer77;
        function tajmer77(){
          document.getElementById("vreme").innerHTML = "Тimer: 20";
          clearInterval(timerForNext7);
          document.getElementById("sledece7").disabled = true;  
          document.getElementById("preskoci7").disabled = true; 
          sekunde7 = 19;
        }
        sekunde7--;
        if (sekunde7 == -2) {
          clearInterval(timerForNext7);
          funkcija7();
     }
  }
}

function tajmer8(){
    var sekunde8 = 19;
    var timerForNext8 = setInterval(afterInterval8, 1000);
    document.getElementById("vreme").innerHTML = "Тimer: 20";
    function afterInterval8() {
        document.getElementById("vreme").innerHTML = "Тimer: " + sekunde8
        document.getElementById("sledece8").onclick = tajmer88;
        document.getElementById("preskoci8").onclick = tajmer88;
        document.getElementById("odustani_dugme").onclick = tajmer88;
        function tajmer88(){
          document.getElementById("vreme").innerHTML = "Тimer: 20";
          clearInterval(timerForNext8);
          document.getElementById("sledece8").disabled = true;  
          document.getElementById("preskoci8").disabled = true; 
          sekunde8 = 19;
        }
        sekunde8--;
        if (sekunde8 == -2) {
          clearInterval(timerForNext8);
          funkcija8();
     }
  }
}

function tajmer9(){
    var sekunde9 = 19;
    var timerForNext9 = setInterval(afterInterval9, 1000);
    document.getElementById("vreme").innerHTML = "Тimer: 20";
    function afterInterval9() {
        document.getElementById("vreme").innerHTML = "Тimer: " + sekunde9
        document.getElementById("sledece9").onclick = tajmer99;
        document.getElementById("preskoci9").onclick = tajmer99;
        document.getElementById("odustani_dugme").onclick = tajmer99;
        function tajmer99(){
          document.getElementById("vreme").innerHTML = "Тimer: 20";
          clearInterval(timerForNext9);
          document.getElementById("sledece9").disabled = true;  
          document.getElementById("preskoci9").disabled = true; 
          sekunde9 = 19;
        }
        sekunde9--;
        if (sekunde9 == -2) {
          clearInterval(timerForNext9);
          funkcija9();
     }
  }
}

function tajmer10(){
    var sekunde10 = 19;
    var timerForNext10 = setInterval(afterInterval10, 1000);
    document.getElementById("vreme").innerHTML = "Тimer: 20";
    function afterInterval10() {
        document.getElementById("vreme").innerHTML = "Тimer: " + sekunde10
        document.getElementById("sledece10").onclick = tajmer1010;
        document.getElementById("preskoci10").onclick = tajmer1010;
        document.getElementById("odustani_dugme").onclick = tajmer1010;
        function tajmer1010(){
          document.getElementById("vreme").innerHTML = "Тimer: 20";
          clearInterval(timerForNext10);
          document.getElementById("sledece10").disabled = true;  
          document.getElementById("preskoci10").disabled = true; 
          sekunde10 = 19;
        }
        sekunde10--;
        if (sekunde10 == -2) {
          clearInterval(timerForNext10);
          funkcija10();
     }
  }
}




