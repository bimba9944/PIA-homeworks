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
    $("#start").click(function(){
        var ime = $("#uname").val().toString();
        if (ime != ""){
            $("#pozadina").hide();
            $("#pitanje1").fadeIn();
            // $("#naslov").css({"border": "solid"});
            prikaz1();
        }
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

$(document).ready(function(){
     $("#sledece1").click(function(){
             $("#pitanje1").hide();
             $("#pitanje2").fadeIn();
             prikaz2();
         });
});

function prikaz2(){
    document.getElementById("broj2").innerHTML = myObj.drugo.broj;
    document.getElementById("tekst_pitanje2").innerHTML = myObj.drugo.pitanje;
    document.getElementById("pet").innerHTML = myObj.drugo.odgovori.tacan1;
    document.getElementById("sest").innerHTML = myObj.drugo.odgovori.netacan1;
    document.getElementById("sedam").innerHTML = myObj.drugo.odgovori.netacan2;
    document.getElementById("osam").innerHTML = myObj.drugo.odgovori.netacan3;
}

$(document).ready(function(){
    $("#sledece2").click(function(){
            $("#pitanje2").hide();
            $("#pitanje3").fadeIn();
            prikaz3();
        });
});

function prikaz3(){
    document.getElementById("broj3").innerHTML = myObj.trece.broj;
    document.getElementById("tekst_pitanje3").innerHTML = myObj.trece.pitanje;
    document.getElementById("devet").innerHTML = myObj.trece.odgovori.netacan1;
    document.getElementById("deset").innerHTML = myObj.trece.odgovori.tacan1;
    document.getElementById("jedanaest").innerHTML = myObj.trece.odgovori.netacan2;
    document.getElementById("dvanaest").innerHTML = myObj.trece.odgovori.netacan3;
}

$(document).ready(function(){
    $("#sledece3").click(function(){
            $("#pitanje3").hide();
            $("#pitanje4").fadeIn();
            prikaz4();
        });
});

function prikaz4(){
    document.getElementById("broj4").innerHTML = myObj.cetvrto.broj;
    document.getElementById("tekst_pitanje4").innerHTML = myObj.cetvrto.pitanje;
    document.getElementById("trinaest").innerHTML = myObj.cetvrto.odgovori.netacan1;
    document.getElementById("cetrnaest").innerHTML = myObj.cetvrto.odgovori.tacan1;
    document.getElementById("petnaest").innerHTML = myObj.cetvrto.odgovori.netacan2;
    document.getElementById("sesnaest").innerHTML = myObj.cetvrto.odgovori.netacan3;
}

$(document).ready(function(){
    $("#sledece4").click(function(){
            $("#pitanje4").hide();
            $("#pitanje5").fadeIn();
            prikaz5();
        });
});

function prikaz5(){
    document.getElementById("broj5").innerHTML = myObj.peto.broj;
    document.getElementById("tekst_pitanje5").innerHTML = myObj.peto.pitanje;
    document.getElementById("sedamnaest").innerHTML = myObj.peto.odgovori.tacan1;
    document.getElementById("osamnaest").innerHTML = myObj.peto.odgovori.netacan1;
    document.getElementById("devetnaest").innerHTML = myObj.peto.odgovori.netacan2;
    document.getElementById("dvadeset").innerHTML = myObj.peto.odgovori.netacan3;
}

$(document).ready(function(){
    $("#sledece5").click(function(){
            $("#pitanje5").hide();
            $("#pitanje6").fadeIn();
            prikaz6();
        });
});

function prikaz6(){
    document.getElementById("broj6").innerHTML = myObj.sesto.broj;
    document.getElementById("tekst_pitanje6").innerHTML = myObj.sesto.pitanje;
    document.getElementById("dvadeset1").innerHTML = myObj.sesto.odgovori.tacan;
    document.getElementById("dvadeset2").innerHTML = myObj.sesto.odgovori.netacan;
}

$(document).ready(function(){
    $("#sledece6").click(function(){
            $("#pitanje6").hide();
            $("#pitanje7").fadeIn();
            prikaz7();
        });
});

function prikaz7(){
    document.getElementById("broj7").innerHTML = myObj.sedmo.broj;
    document.getElementById("tekst_pitanje7").innerHTML = myObj.sedmo.pitanje;
    document.getElementById("dvadeset3").innerHTML = myObj.sedmo.odgovori.tacan;
    document.getElementById("dvadeset4").innerHTML = myObj.sedmo.odgovori.netacan;
}

$(document).ready(function(){
    $("#sledece7").click(function(){
            $("#pitanje7").hide();
            $("#pitanje8").fadeIn();
            prikaz8();
        });
});

function prikaz8(){
    document.getElementById("broj8").innerHTML = myObj.osmo.broj;
    document.getElementById("tekst_pitanje8").innerHTML = myObj.osmo.pitanje;
}

$(document).ready(function(){
    $("#sledece8").click(function(){
            $("#pitanje8").hide();
            $("#pitanje9").fadeIn();
            prikaz9();
        });
});

function prikaz9(){
    document.getElementById("broj9").innerHTML = myObj.deveto.broj;
    document.getElementById("tekst_pitanje9").innerHTML = myObj.deveto.pitanje;
}

$(document).ready(function(){
    $("#sledece9").click(function(){
            $("#pitanje9").hide();
            $("#pitanje10").fadeIn();
            prikaz10();
        });
});

function prikaz10(){
    document.getElementById("broj10").innerHTML = myObj.deseto.broj;
    document.getElementById("tekst_pitanje10").innerHTML = myObj.deseto.pitanje;
}

$(document).ready(function(){
    $("#sledece10").click(function(){
            $("#pitanje10").hide();
            $("#kraj").fadeIn();
        });
});