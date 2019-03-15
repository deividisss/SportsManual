<?php
// page1.php

session_start();


/*$message1 = "A message";
$message2 = "Another message";

$_SESSION['firstMessage'] = $message1;
$_SESSION['secondMessage'] = $message2; 
echo $_SESSION['firstMessage'] ;*/

/*session_start();

echo $_SESSION['firstMessage'];
echo $_SESSION['secondMessage'];*/
?>


<!DOCTYPE html>
<html>
    <head>
          <meta charset="utf-8" />
        <script src="script.js"></script>
         <title>SportsManual</title>
    <link type="text/css" rel="stylesheet" href="css/header.css" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>

    .matomumas {
    display:none ;
    }
    
    h1 {
    }
    
  
       .mygtukoDizainas input{
        float:;
        background-color:  white;
     color: #432815;
     width: 200px;
     height: 50px;
}

    div.btn {
    display: inline-block;
    border: 2px solid #ccc;
    margin-right: 5px;
    padding: 2px 5px;
    cursor: pointer;
}
div.btn.on {
    background-color: #777;
    color: white;
}
    
    rnk{display: none;}
    option {
        display: block;
    color:red;
   background-color: #000000;
    
    }
</style>
    </head>
<!--<body onload="raumenu_grupe(this)">-->
    <body onload="ivesti()">
               <?php include 'header.php';?>
        <script>
            contentType: "application/x-javascript; charset:utf-8"

            var a = 999999;
            var k = 0;

            var lytisID;
            var lytisValue;

            var treniravimosiTipasId;
            var treniravimosiTipasValue;

            var sudetingumoLygisId;
            var sudetingumoLygisValue;

            var irangosTipasId;
            var sirangosTipasValue;

            var raumenuGrupeId;
            var raumenuGrupeValue;

            function ivesti() {
                // document.getElementById('rodykLytis').getElementsByClassName("matomumas")[15].style.displayblock = 'block';//panaikin paspaudimus

                var x = document.getElementsByClassName("matomumas");
                x[k].style.display = "block";
                k++;

                $fn = "lytis.php";
                rg = new XMLHttpRequest();
                rg.open("GET", $fn, true);
                rg.onreadystatechange = function () {
                    if (rg.readyState == 4) {
                        var ats = rg.responseText;
                        // alert(ats)

                        mas = ats.split("*");
                        var kiek = mas.length;
                        //lert(kiek);


                        for (var j = 0; j < kiek - 1; j++) {
                            // var fvardas="kaskas()";
                            kint="<div class='mygIkonas'\><img src='"+mas[j+2]+"' alt='Mountain View'  class='ikona'>";
                            kint += "<input type='button' id='" + mas[j] + "' class='" + 'lol' + "'value='" + mas[j + 1] + "' onclick='" + 'treniravimosiTipas(this)' + "'></div>";
                            document.getElementById("rodykLytis").innerHTML += kint;
                            j=j+2;

                        }
                    }
                }
                rg.send(null);





                //  var targetDiv = document.getElementById("rodyk").getElementsByClassName("lol")[0];
                //targetDiv.innerHTML = "Goodbye world!";





            }



            function treniravimosiTipas(lyt) {

                lytisID = lyt.id;
                lytisValue = lyt.value;
                document.getElementById("kintamieji").innerHTML += '&nbsp;' + lytisValue + '=' + lytisID;

                var x = document.getElementsByClassName("matomumas");
                x[k].style.display = "block";
                k++;

                document.getElementById('rodykLytis').style.pointerEvents = 'none'; //panaikin paspaudimus
                 document.getElementById('rodykLytis').style.display = 'none';
                $fn = "treniravimosiTipas.php";
                rg = new XMLHttpRequest();
                rg.open("GET", $fn, true);
                rg.onreadystatechange = function () {
                    if (rg.readyState == 4) {
                        var ats = rg.responseText;
                        // alert(ats)

                        mas = ats.split("*");
                        var kiek = mas.length;
                        //lert(kiek);


                        for (var j = 0; j < kiek - 1; j++) {
                            // var fvardas="kaskas()";
                            kint = "<input type='button' id='" + mas[j] + "'value='" + mas[j + 1] + "' onclick='" + 'sudetingumo_lygis(this)' + "'>";
                            document.getElementById("rodykTrTipas").innerHTML += kint;
                            j++;

                        }
                    }
                }
                rg.send(null);
            }



            function sudetingumo_lygis(trT) {
                treniravimosiTipasId = trT.id;
                treniravimosiTipasValue = trT.value;
                document.getElementById("kintamieji").innerHTML += ',&nbsp;' + treniravimosiTipasValue + '=' + treniravimosiTipasId;

                var x = document.getElementsByClassName("matomumas");
                x[k].style.display = "block";
                k++;

                document.getElementById('rodykTrTipas').style.pointerEvents = 'none'; //panaikin paspaudimus
                 document.getElementById('rodykTrTipas').style.display = 'none';
                $fn = "sudetingumoLygiai.php";

                rg = new XMLHttpRequest();
                rg.open("GET", $fn, true);
                rg.onreadystatechange = function () {
                    if (rg.readyState == 4) {
                        var ats = rg.responseText;
                        //alert(ats)

                        mas = ats.split("*");
                        var kiek = mas.length;
                        //lert(kiek);


                        for (var j = 0; j < kiek - 1; j++) {
                            // var fvardas="kaskas()";
                            kint = "<input type='button' id='" + mas[j] + "'value='" + mas[j + 1] + "' onclick='" + 'irangos_tipas(this)' + "'>";
                            document.getElementById("rodykSudetingumas").innerHTML += kint;
                            j++;

                        }
                    }
                }
                rg.send(null);


            }


            function irangos_tipas(sud) {
                sudetingumoLygisId = sud.id;
                sudetingumoLygisValue = sud.value;
                document.getElementById("kintamieji").innerHTML += ',&nbsp;' + sudetingumoLygisValue + '=' + sudetingumoLygisId;

                var x = document.getElementsByClassName("matomumas");
                x[k].style.display = "block";
                k++;

                document.getElementById('rodykSudetingumas').style.pointerEvents = 'none'; //panaikin paspaudimus
                  document.getElementById('rodykSudetingumas').style.display = 'none';
                $fn = "irangosTipas.php";
                rg = new XMLHttpRequest();
                rg.open("GET", $fn, true);
                rg.onreadystatechange = function () {
                    if (rg.readyState == 4) {
                        var ats = rg.responseText;
                        //alert(ats)

                        mas = ats.split("*");
                        var kiek = mas.length;
                        //lert(kiek);


                        for (var j = 0; j < kiek - 1; j++) {
                            // var fvardas="kaskas()";
                            kint = "<input type='button' id='" + mas[j] + "'value='" + mas[j + 1] + "' onclick='" + 'raumenu_grupe(this)' + "'>";
                            document.getElementById("rodykIranga").innerHTML += kint;
                            j++;

                        }
                    }
                }
                rg.send(null);


            }


            function raumenu_grupe(irT) {
                irangosTipasId = irT.id;
                irangosTipasValue = irT.value;
                document.getElementById("kintamieji").innerHTML += ',&nbsp;' + irangosTipasValue + '=' + irangosTipasId;

                var x = document.getElementsByClassName("matomumas");
                x[k].style.display = "block";
                k++;

                document.getElementById('rodykIranga').style.pointerEvents = 'none'; //panaikin paspaudimus
                 document.getElementById('rodykIranga').style.display = 'none';
                $fn = "raumenuTipas.php";
                rg = new XMLHttpRequest();
                rg.open("GET", $fn, true);
                rg.onreadystatechange = function () {
                    if (rg.readyState == 4) {
                        var ats = rg.responseText;
                        //alert(ats)

                        mas = ats.split("*");
                        var kiek = mas.length;
                        //lert(kiek);


                        for (var j = 0; j < kiek - 1; j++) {
                            //var fvardas="kaskas()";
                            kint = "<input type='button' id='" + mas[j] + "'value='" + mas[j + 1] + "' onclick='" + 'kintamieji(this)' + "'>";
                            document.getElementById("rodykRaumenysI").innerHTML += kint;
                            j++;

                        }
                    }
                }
                rg.send(null);


            }

            function kintamieji(rm) {

                var x = document.getElementsByClassName("matomumas");
                x[k].style.display = "block";
                k++;

                document.getElementById('rodykRaumenysI').style.pointerEvents = 'none'; //panaikin paspaudimus
                      document.getElementById('rodykRaumenysI').style.display = 'none';
                document.getElementById('klausimai').style.display = 'none';
                raumenuGrupeId = rmG.id;
                raumenuGrupeValue = rmG.value;
                document.getElementById("kintamieji").innerHTML += ',&nbsp;' + raumenuGrupeValue + '=' + raumenuGrupeId;

                document.getElementById("raodykRaumenysPaciauPav").innerHTML += '&nbsp;' + raumenuGrupeValue;

                $fn = "raumenGrupes.php?raumGrId=" + raumenuGrupeId;
                rg = new XMLHttpRequest();
                rg.open("GET", $fn, true);
                rg.onreadystatechange = function () {
                    if (rg.readyState == 4) {
                        var ats = rg.responseText;
                        //alert(ats)

                        mas = ats.split("*");
                        var kiek = mas.length;
                        //lert(kiek);


                        for (var j = 0; j < kiek - 1; j++) {
                            //var fvardas="kaskas()";
                            //kintImage="<img src="pic_mountain.jpg" alt="Mountain View" style="width:304px;height:228px;">

                            kint = "<img src='" + mas[j] + "' id='" + mas[j + 1] + "'alt='" + mas[j + 2] + "'>";
                            kint += mas[j + 3];
                            //  kint = "<img src='" + mas[j + 1] + "' id='" + mas[j] + "'alt='" +'raumuo' + " onclick='" + 'kintamieji(this)' + "'>";
                            // alert(mas[j])
                            // alert(mas[j+1])
                            //alert(mas[j+2])
                            document.getElementById("raodykRaumenysPaciau").innerHTML += kint;
                            j = j + 3;

                        }
                    }
                }
                rg.send(null);


            }


            function kintamieji(rmG) {



                document.getElementById('rodykRaumenysI').style.pointerEvents = 'none'; //panaikin paspaudimus
                document.getElementById('rodykRaumenysI').style.display = 'none';
                raumenuGrupeId = rmG.id;
                raumenuGrupeValue = rmG.value;
               // alert(sudetingumoLygisId)
            
                window.location.href = "raumenuGrupesP2.php?w1=" + raumenuGrupeId + "&w2=" + raumenuGrupeValue+ "&treniravimosiTipasId=" + treniravimosiTipasId
                +"&treniravimosiTipasValue=" + treniravimosiTipasValue +"&lytisID=" +lytisID+"&irangosTipasId=" +irangosTipasId+"&sudetingumoLygisId=" +sudetingumoLygisId;

               

           

            }




            /*function kaskas() {
            document.getElementById("demo").innerHTML = "Hello World";
            }*/

</script>
 





    

       <div id="kintamieji"></div>
    <div id="klausimai">
        <br>
   <div id="rodykLytis" class='keistMyg'>

       <h1 class="matomumas">Pasirink lytį</h1>
       
   </div>
       
   <div id="rodykTrTipas" class='keistMyg'>
   <h1 class="matomumas">Treniravimosi tipa</h1>
   </div>
     
   <div id="rodykSudetingumas" class='keistMyg'>
   <h1 class="matomumas">Sudetingumo lygis</h1>
   </div>
      
   <div id="rodykIranga" class='keistMyg'>
   <h1 class="matomumas">Irangos tipa</h1>
   </div>
       
   <div id="rodykRaumenysI" class='keistMyg'>
   <h1 class="matomumas">Raumenu grupe</h1>
   </div>
    
    </div>

    <div id="raodykRaumenysPaciau">
    <h1 id="raodykRaumenysPaciauPav"></h1>
    </div>
     <p id="demo"></p>
        <?php
            
$pi ="<script>document.writeln(a);</script>";
//echo $pi;
?>
</body>
</html>