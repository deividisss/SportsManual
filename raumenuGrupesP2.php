<?php
    


 

   // Check if we have parameters w1 and w2 being passed to the script through the URL
   if (isset($_GET["w1"]) && isset($_GET["w2"])) {

      // Put the two words together with a space in the middle to form "hello world"
      $id=$_GET["w1"];
      $value=$_GET["w2"];
       $treniravimosiTipasId=$_GET["treniravimosiTipasId"];
      $lytisID=$_GET["lytisID"];
      $irangosTipasId=$_GET["irangosTipasId"];
      $sudetingumoLygisId=$_GET["sudetingumoLygisId"];

       
           //echo $lytisID.$irangosTipasId.$sudetingumoLygisId;
      $hello = $_GET["w1"] . " " . $_GET["w2"];
    


      // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.
      //echo "<script>alert('$hello');</script>";
   }
  // echo "lol;"

?>

<!DOCTYPE html>
<html>
    <head>
              <meta charset="utf-8" />
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #raodykRaumenysPaciauVisas {
      
    
            
            }
    .matomumas {
    display:none ;
    }
    
    h1 {
    }
            



</style>

         <script src="js/script3.js"></script>
        <meta charset="utf-8" />
       <title>SportsManual</title>
    <link type="text/css" rel="stylesheet" href="css/header.css" />
    </head>
    
    <body onload="raumenuGrupesP()">
          <?php include 'header.php';?>
             <div id="kintamieji"></div>
        <div id="adiv"></div>
     
        <input type="submit" onclick="raumenu_grupe()" value="Pakeisti raumenu gruppe" class="mygtukoDizainas" id="keisti">
     

       

         <div id="rodykRaumenys" class="mygtukoDizainas numeris2"><br></div>


    
        <div id="raodykRaumenysPaciauVisas">
       
               <h1>Raumenu grupe <span id="raodykRaumenysPaciauPav"></span></h1>
 
    <div id="raodykRaumenysPaciau"></div>

        <div id="keistMyg"> 

         <input type="submit" onclick="pilnaTrenke(this)" value="Pilna treniruote" class="mygtukoDizainas" id="pilnasMyg">

            </div>
            </div>

        <br><div id="raumenysSolo" class="mygtukoDizainas"></div>

     <p id="demo"></p>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script>

                  var php_var = "<?php echo $hello; ?>";
           var php_varid = "<?php echo $id; ?>";
                       var php_varvalue = "<?php echo $value; ?>";

                var php_treniravimosiTipasId = "<?php echo $treniravimosiTipasId; ?>";
                 var php_lytisID = "<?php echo $lytisID; ?>";
        var php_irangosTipasId= "<?php echo $irangosTipasId; ?>";
                 var php_sudetingumoLygisId= "<?php echo $sudetingumoLygisId; ?>";

           
                  </script>

        <script>
                var grupeGlobal=php_varid;
            var raumuo;
            var raumuoID;
            var treniravimosiTipasId = php_treniravimosiTipasId;
            var lytisID = php_lytisID;
            var irangosTipasId = php_irangosTipasId;
            var sudetingumoLygisId = php_sudetingumoLygisId;


            function soloTrenke(solo) {
                raumuoID = solo.id;
                raumuo = solo.value;
                //alert(raumuoID + raumuo + treniravimosiTipasId);
                window.location.href = "soloTrenke.php?raumuoID=" + raumuoID + "&raumuo=" + raumuo + "&treniravimosiTipasId=" + treniravimosiTipasId
                + "&lytisID=" + lytisID + "&irangosTipasId=" + irangosTipasId + "&sudetingumoLygisId=" + sudetingumoLygisId;

            }

            function pilnaTrenke(solo) {
                
             
                //alert(grupeGlobal);
                window.location.href = "pilnaTrenke.php?grupeGlobal=" + grupeGlobal  + "&treniravimosiTipasId=" + treniravimosiTipasId
                + "&lytisID=" + lytisID + "&irangosTipasId=" + irangosTipasId + "&sudetingumoLygisId=" + sudetingumoLygisId;

            }












            function raumenuGrupesP() {
                var id = php_varid;
                var value = php_varvalue;
                //document.getElementById("adiv").innerHTML += id;
                document.getElementById("raodykRaumenysPaciauPav").innerHTML += '&nbsp;' + value;


                $fn = "raumenGrupes.php?raumGrId=" + id;
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


                $fn2 = "raumenys.php?raumGrId=" + id;
                rg2 = new XMLHttpRequest();
                rg2.open("GET", $fn2, true);
                rg2.onreadystatechange = function () {
                    if (rg2.readyState == 4) {
                        var ats = rg2.responseText;
                        //alert(ats)

                        mas = ats.split("*");
                        var kiek = mas.length;
                        //lert(kiek);
                        var divIdNr = 1;
                        $('#raumenysSolo').empty();
                        for (var j = 0; j < kiek - 1; j++) {
                            //var fvardas="kaskas()";
                            //kintImage="<img src="pic_mountain.jpg" alt="Mountain View" style="width:304px;height:228px;">

                            kint = "<h1 class='soloRaumPav'>"+mas[j + 2]+"</h1><img src='" + mas[j] + "' id='" + mas[j + 1] + "'alt='" + mas[j + 2] + "'>";
                            kint += mas[j + 3];

                            kint2 = "<br><div id='keistMyg'><input type='button' id='" + mas[j + 1] + "'value='" + mas[j + 2] + ' treniruote' + "' onclick='" + 'soloTrenke(this)' + "' class='trenkiuMygtukai'></div><br>";
                            //  kint = "<img src='" + mas[j + 1] + "' id='" + mas[j] + "'alt='" +'raumuo' + " onclick='" + 'kintamieji(this)' + "'>";
                            // alert(mas[j])
                            // alert(mas[j+1])
                            //alert(mas[j+2])
                            var divElement = document.createElement("Div");

                            divElement.id = "raumuo" + divIdNr;



                           // divElement.style.border = "solid green";
                            divElement.style.marginBottom = "20px";
                            /* divElement.style.textAlign = "center";
                            divElement.style.fontWeight = "bold";
                            divElement.style.fontSize = "smaller";
                            divElement.style.paddingTop = "15px";
                            */


                            document.getElementById("raumenysSolo").appendChild(divElement);

                            document.getElementById("raumuo" + divIdNr).innerHTML += kint;
                            document.getElementById("raumuo" + divIdNr).innerHTML += kint2;
                            j = j + 3;
                            divIdNr = divIdNr + 1;

                        }
                    }
                }

                rg2.send(null);


            }



            function raumenu_grupe() {
                  document.getElementById('keisti').style.pointerEvents = 'none';
               document.getElementById("keisti").style.display = "none";
                var id = php_varid;
                var value = php_varvalue;
                document.getElementById("kintamieji").innerHTML += ',&nbsp;' + id + '=' + value;





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
                            kint = "<input type='button' id='" + mas[j] + "'value='" + mas[j + 1] + "' onclick='" + 'raumenuGrupesP2(this)' + "'>";
                            document.getElementById("rodykRaumenys").innerHTML += kint;
                                  document.getElementById('rodykRaumenys').style.display = 'block';
                            j++;

                        }
                    }
                }
                rg.send(null);



            }

        
            function raumenuGrupesP2(rmk) {
                //alert(lol)
                var id = rmk.id;
                var value = rmk.value;
                grupeGlobal = id;


                document.getElementById("adiv").innerHTML = id + value;
                document.getElementById("raodykRaumenysPaciauPav").innerHTML = '&nbsp;' + value;



                $fn = "raumenGrupes.php?raumGrId=" + id;
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
                            //alert(kint)
                            document.getElementById("raodykRaumenysPaciau").innerHTML = kint;
                            j = j + 3;

                        }

                    }

                }
                rg.send(null);



                $fn2 = "raumenys.php?raumGrId=" + id;
                rg2 = new XMLHttpRequest();
                rg2.open("GET", $fn2, true);
                rg2.onreadystatechange = function () {
                    if (rg2.readyState == 4) {
                        var ats = rg2.responseText;
                        //alert(ats)

                        mas = ats.split("*");
                        var kiek = mas.length;
                        //lert(kiek);
                        var divIdNr = 1;
                        $('#raumenysSolo').empty();
                        for (var j = 0; j < kiek - 1; j++) {
                            //var fvardas="kaskas()";
                            //kintImage="<img src="pic_mountain.jpg" alt="Mountain View" style="width:304px;height:228px;">

                            kint = "<h1 class='soloRaumPav'>"+mas[j + 2]+"</h1><img src='" + mas[j] + "' id='" + mas[j + 1] + "'alt='" + mas[j + 2] + "'>";
                            kint += mas[j + 3];

                            kint2 = "<br><div id='keistMyg'><input type='button' id='" + mas[j + 1] + "'value='" + mas[j + 2] + ' treniruote' + "' onclick='" + 'soloTrenke(this)' + "'></div><br>";
                            //  kint = "<img src='" + mas[j + 1] + "' id='" + mas[j] + "'alt='" +'raumuo' + " onclick='" + 'kintamieji(this)' + "'>";
                            // alert(mas[j])
                            // alert(mas[j+1])
                            //alert(mas[j+2])
                            var divElement = document.createElement("Div");

                            divElement.id = "raumuo" + divIdNr;




                            /* divElement.style.textAlign = "center";
                            divElement.style.fontWeight = "bold";
                            divElement.style.fontSize = "smaller";
                            divElement.style.paddingTop = "15px";
                            */

                           // divElement.style.border = "solid green";
                            divElement.style.marginBottom = "20px";

                            document.getElementById("raumenysSolo").appendChild(divElement);

                            document.getElementById("raumuo" + divIdNr).innerHTML += kint;
                            document.getElementById("raumuo" + divIdNr).innerHTML += kint2;
                            j = j + 3;
                            divIdNr = divIdNr + 1;

                        }
                    }
                }

                rg2.send(null);


            }




        </script>
</body>

    <?php
           // echo $hello.$hello;;

    ?>
    </body>
</html>
