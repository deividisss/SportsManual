var lol = 1;
       alert('hello')
                  function raumenuGrupesP(){
               var id =php_varid;
                      var value = php_varvalue;
                document.getElementById("adiv").innerHTML += id;
                document.getElementById("raodykRaumenysPaciauPav").innerHTML += '&nbsp;' + value;

     $fn = "raumenGrupes.php?raumGrId="+id;
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

                    kint = "<img src='" + mas[j] + "' id='" + mas[j+1] + "'alt='" +mas[j+2]+"'>";
                    kint+=mas[j+3];
                    //  kint = "<img src='" + mas[j + 1] + "' id='" + mas[j] + "'alt='" +'raumuo' + " onclick='" + 'kintamieji(this)' + "'>";
                   // alert(mas[j])
                   // alert(mas[j+1])
                    //alert(mas[j+2])
                    document.getElementById("raodykRaumenysPaciau").innerHTML += kint;

                    j=j+3;

                }
            }
        }
               rg.send(null);
    

             $fn2 = "raumenys.php?raumGrId="+id;
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

                    kint = "<img src='" + mas[j] + "' id='" + mas[j + 1] + "'alt='" + mas[j + 2] + "'>";
                    kint += mas[j + 3];
                    
                     kint2 = "<br><input type='button' id='" + mas[j+1] + "'value='" + mas[j + 2] +' treniruote'+ "' onclick='" + 'raumenuGrupesP2(this)' + "'><br>";
                    //  kint = "<img src='" + mas[j + 1] + "' id='" + mas[j] + "'alt='" +'raumuo' + " onclick='" + 'kintamieji(this)' + "'>";
                    // alert(mas[j])
                    // alert(mas[j+1])
                    //alert(mas[j+2])
                    var divElement = document.createElement("Div");
                
                    divElement.id = "raumuo" + divIdNr;
                     


                     divElement.style.border = "solid green";
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
                 divIdNr=divIdNr+1;

                }
            }
        }

        rg2.send(null);
           

        }



        function raumenu_grupe() {
          var id =php_varid;
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
                            j++;

                        }
                    }
                }
                rg.send(null);



            }

            
                  function raumenuGrupesP2(rmk){
                      //alert(lol)
                      var id =rmk.id;
                      var value = rmk.value;
                
                document.getElementById("adiv").innerHTML = id+value;
                document.getElementById("raodykRaumenysPaciauPav").innerHTML = '&nbsp;' + value;
                     
                         

                 $fn = "raumenGrupes.php?raumGrId="+id;
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

                    kint = "<img src='" + mas[j] + "' id='" + mas[j+1] + "'alt='" +mas[j+2]+"'>";
                    kint+=mas[j+3];
                    //  kint = "<img src='" + mas[j + 1] + "' id='" + mas[j] + "'alt='" +'raumuo' + " onclick='" + 'kintamieji(this)' + "'>";
                   // alert(mas[j])
                   // alert(mas[j+1])
                    //alert(mas[j+2])
                    //alert(kint)
                    document.getElementById("raodykRaumenysPaciau").innerHTML = kint;
                    j=j+3;

                }

            }
  
        }
        rg.send(null);



             $fn2 = "raumenys.php?raumGrId="+id;
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

                    kint = "<img src='" + mas[j] + "' id='" + mas[j + 1] + "'alt='" + mas[j + 2] + "'>";
                    kint += mas[j + 3];
                    
                     kint2 = "<br><input type='button' id='" + mas[j+1] + "'value='" + mas[j + 2] +' treniruote'+ "' onclick='" + 'raumenuGrupesP2(this)' + "'><br>";
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
                    
                     divElement.style.border = "solid green";
                              divElement.style.marginBottom = "20px";

                    document.getElementById("raumenysSolo").appendChild(divElement);
                 
                    document.getElementById("raumuo" + divIdNr).innerHTML += kint;
                       document.getElementById("raumuo" + divIdNr).innerHTML += kint2;
                    j = j + 3;
                 divIdNr=divIdNr+1;

                }
            }
        }

        rg2.send(null);
           
  
        }