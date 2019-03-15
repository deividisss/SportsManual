<!DOCTYPE html>

<html>
<head>
            <title>SportsManual</title>
    <link type="text/css" rel="stylesheet" href="css/header.css" />
    <style>
        #redagavimas img{
          
            width: 20px;
        }
        h1.Nr{
            
            margin-top: 8%;
        }
        .pavadinimsSolo {
           font-size: 180%;
        
        }
        .nerodyk{
            
            display: none;
        }
        #pasirinkimai.mygtukoDizainas {
     margin-left: -1%;
     margin-top: -0px;


     }
  
                   #pasirinkimai.mygtukoDizainas input:hover { 
                
    background-color: green;
      transition: all .5s ease-in-out;   
    transform: scale(1.01);
    color:white;
    border: none;
    border-top-left-radius: 40%;
      border-bottom-left-radius: 50%;
          border-top-right-radius: 40%;
      border-bottom-right-radius: 50%;
}
    textarea
{
            color: black;
  width:95%;
  min-height: 300px;
}
        #demo {
            margin-left:280px;
            margin-top: -70px;
            color: red;
            font-size: 300%;
        }
td
{
padding:5px;
}


        .editbox.cont {
        color: black;
        font-size: 120%;
        }
       
        .editbox.nrr
        {

            width: 180px;
            text-align: left;
       
}

.editbox
{font-size: 150%;
            margin: 0 auto;
            display: none;
            text-align: center;
            border-radius: 25px;


        color: #777;
border:solid 1px grey;
        
padding:4px;
}
.edit_tr,.edit_trNr:hover
{

cursor:pointer;
}
        
                * {
    box-sizing: border-box;
}
       #bendras img{width: 100%;
            height: 140px;
           
      
        }
        

         #cardContainer>div:hover.redagavimas {
        transform:none;
     background-color: white;

    color:black;
    border: solid green;
        }
         #cardContainer p{
            padding: 8px;
        }
               #cardContainer img{
          width:100%;
        }
        
                  #cardContainer .redagavimas img{
          width:40%;
          height: auto;
        }
        #cardContainer>div.redagavimas {
             font-size: 100%;
                margin: 0 auto;
            
            color:black;
            background-color: white;
            display: inline-block;
            width: 99.5%;
            height: auto;
            text-align: center;
            
            border: solid green;
         
            transition: none;
        
        }
        .mygtukoDizainas input{
        float:;
        font-size: 120%;
        background-color:  orange;
     color: white;
     width:230px;
     height: 50px;
     border: solid white;
     border-radius: 2%;
     margin-left: 1%;
}
   .mygtukoDizainas input:hover { 
    background-color: #f00;
      transition: all .3s ease-in-out;   
    transform: scale(1.01);
    color:white;
    border: none;
    
}
        
          #atgal.mygtukoDizainas input:hover { 
    background-color: green;
      transition: all .5s ease-in-out;   
    transform: scale(1.01);
    color:white;
    border: none;
    border-top-left-radius: 20%;
      border-bottom-left-radius: 75%;
          border-top-right-radius: 20%;
      border-bottom-right-radius: 10%;
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
        .Nr {
            margin: 0 auto;
            border: 6px solid green;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            font-size: 50px;
            color: #808080;
            line-height: 80px;
     
            background: white;
        }
   #cardContainer>div:hover { 
    background-color: green;
    transform: scale(1.12);
    color:white;
    border: none;
    
}
    
    
        

        
        #cardContainer>div {
            background-color:  white;
            display: inline-block;
            width: 220px;
               text-align: center;
            height: 320px;
            border: solid green;
         margin:0.25%;  
                  transition: all .3s ease-in-out;      
                  margin-bottom: 70px;   
                            
        }
        
                #cardContainer  {
            margin: 0 auto;
       width: 98%;
            font-size: 120%;
            
color: green;
        }
</style>
      <meta charset="utf-8" />


</head>
<body onload="showRedaguot()">
        <?php include 'header.php';?>
    <div id="bendras">
     <div id="pasirinkimai" class="mygtukoDizainas">
     <input type="button" class="pasirinkimais" value="Redagavimas" class="mygtukoDizainas" onclick="location.href='showEdit.php'" >
     <input type="button" class="pasirinkimais" value="Trinimas" class="mygtukoDizainas" onclick="location.href='redaguotIranga.php'" ></div>
        
      <script src='//cdn.ckeditor.com/4.5.11/basic/ckeditor.js'></script>
<p><b>Pieška veikia paga įrangos pavadinimą arba įrangos numerį</b></p>
<form> 
Įveskite duomenis: <input type="text" onkeyup="showHint(this.value)">
</form>
<p id="liol">Suggestions: </p>
    <div><p><span id="txtHint"></span></p></div>

    <div id="raumenysSolo" class="mygtukoDizainas"></div>
   
         
          <!--<div class="mygtukoDizainas"><input type="button" value="Redaguoti" class="mygtukoDizainas" onclick="showRedaguot()" ><br><br></div>-->
    <div id="cardContainer"></div>
        <script>
         CKEDITOR.replace('editor');
         </script>
                
   
         </div>
   </form>
     <div id="atgal" class="mygtukoDizainas"><input type="button"  value="Atgal" class="mygtukoDizainas" onclick="showRedaguot()" ><br><br></div>
     <div id="demo"></div></div>

        <script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">

   
        //$("form#data").submit(function(){
            function lol(){
              document.getElementById('nuotrauka').onclick = function () {
            document.getElementById('input').click();
             $("input:file").change(function () {
            //var formData = new FormData($(this)[0]);
            var formData2 = new FormData($('form#data')[0]);
            $.ajax({
                url: "updatinamImage.php",
                type: 'POST',
                data: formData2,
                async: false,
                success: function (data) {
                    //alert(data)
                    var string = data,
            substring = "Klaida";
                    if (string.indexOf(substring) !== -1)
                    {
                        alert(data)
                       // $("#test1").text(data);
                    }

                    $('#nuotrauka').attr('src', data).load(function () {
                        this.width;   // Note: $(this).width() will not work for in memory images

                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });

            return false;
        });
        }
        }

    function replace() {
        CKEDITOR.replace('editor');
    }

    var idTr;
    var str2 = '';
    function showHint(str) {

        if (str.length == 0) {

            document.getElementById("txtHint").innerHTML = "";


            return;
        } else {

            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    var ats = this.responseText;






                    mas = ats.split("+^");
                    // alert(mas);




                    var kiek = mas.length;
                    //alert(mas);

                    /*    document.getElementById("raumenysSolo").innerHTML =mas;
                    document.getElementById("raumenysSolo").style.color = "blue";*/


                    var cardContainer = document.getElementById("cardContainer");
                    for (var i = 0; i < kiek - 1; i++) {






                        var div = document.createElement("div");
                        div.innerHTML = ('<p>' + mas[i + 1]);
                        cardContainer.appendChild(div);

                        div.setAttribute("onclick", "pasirinkti(this)");
                        div.setAttribute("type", "button");
                        div.setAttribute("id", mas[i + 2]);
                        i = i + 2;





                    }



                    /*  for (var j = 0; j < kiek - 1; j++) {
                    kint = mas[j];
                    document.getElementById("raumenysSolo").innerHTML =+kint;

                    alert(mas);
                    j=j+j;
                    }*/

                    /*for (var j = 0; j < kiek - 1; j++) {

                    /*var divElement = document.createElement("Div");

                    divElement.id = "raumuo" + divIdNr;



                    divElement.style.border = "solid green";
                    divElement.style.marginBottom = "20px";
                    /* divElement.style.textAlign = "center";
                    divElement.style.fontWeight = "bold";
                    divElement.style.fontSize = "smaller";
                    divElement.style.paddingTop = "15px";
                    */
                    /*  kint = mas[j];

                    document.getElementById("raumenysSolo").appendChild(divElement);

                    document.getElementById("raumuo" + divIdNr).innerHTML = kint;

                    j+2;
                    divIdNr = divIdNr + 1;
                    */



                    // alert(0)

                }
                //alert(01)

            };
            //alert(1)
            xmlhttp.open("GET", "gethint.php?q=" + str, true);
            //    alert(2)
            xmlhttp.send();

            document.getElementById("cardContainer").innerHTML = "";
        }
        //  alert(4)
        $("#atgal").show();
    }




    function showRedaguot() {
        document.getElementById("demo").innerHTML = "";
        document.getElementById("cardContainer").innerHTML = "";
        $("#atgal").hide();


        //document.getElementById("cardContainer").style.border = "solid red";

        //alert('irasai istrinti')


        $fn2 = "irangaShow.php?";
        rg2 = new XMLHttpRequest();
        rg2.open("GET", $fn2, true);
        rg2.onreadystatechange = function () {
            if (rg2.readyState == 4) {
                var ats = rg2.responseText;
                //alert(ats)

                mas = ats.split("+^");
                var kiek = mas.length;
                //lert(kiek);

                var cardContainer = document.getElementById("cardContainer");
                for (var i = 0; i < kiek - 1; i++) {

                    var div = document.createElement("div");
                    div.setAttribute("onclick", "pasirinkti(this)");
                    div.setAttribute("type", "button");
                    div.setAttribute("id", mas[i + 1]);

                    //alert(mas[i + 1])

                    div.innerHTML = (mas[i]);

                    cardContainer.appendChild(div);
                    i++;
                }
            }
        }

        rg2.send(null);


    }

    function pasirinkti(select) {

        $("#atgal").show();
        document.getElementById("cardContainer").innerHTML = "";
        idTr = select.id;

        $fn2 = "showVienas.php?q=" + idTr;
        rg2 = new XMLHttpRequest();
        rg2.open("GET", $fn2, true);
        rg2.onreadystatechange = function () {
            if (rg2.readyState == 4) {
                var ats = rg2.responseText;
                //alert(ats)

                mas = ats.split("+^");
                var kiek = mas.length;
                //lert(kiek);

                var cardContainer = document.getElementById("cardContainer");
                for (var i = 0; i < kiek - 1; i++) {

                    var div = document.createElement("div");
                    // div.setAttribute("onclick", "pasirinkti(this)");
                    div.setAttribute("type", "button");
                    div.setAttribute("id", mas[i + 1]);
                    div.setAttribute("class", "redagavimas");

                    //alert(mas[i + 1])

                    div.innerHTML = (mas[i]);

                    cardContainer.appendChild(div);
                    i++;
                }
            }
        }

        rg2.send(null);
        $.ajax({
            url: "showVienas.php",
            context: document.body



        }).done(function () {

             document.getElementById('nuotrauka').onclick = function () {
            document.getElementById('input').click();

        }
               $("input:file").change(function () {
            //var formData = new FormData($(this)[0]);
            var formData2 = new FormData($('form#data')[0]);
            $.ajax({
                url: "updatinamImage.php",
                type: 'POST',
                data: formData2,
                async: false,
                success: function (data) {
                    //alert(data)
                    var string = data,
            substring = "Klaida";
                    if (string.indexOf(substring) !== -1)
                    {
                        alert(data)
                       // $("#test1").text(data);
                    }

                    $('#nuotrauka').attr('src', data).load(function () {
                        this.width;   // Note: $(this).width() will not work for in memory images

                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });

            return false;
        });
            /* if(CKEDITOR.instances[editor]) {
            delete CKEDITOR.instances[editor];
            CKEDITOR.replace(editor);
            }*/
        });




    }



    function nameRed() {
        $(document).ready(function () {
            $(".edit_tr").click(function () {

                var ID = $(this).attr('id');

                // alert(ID);

                $("#first_" + ID).hide();

                $("#first_input_" + ID).show();

            }).change(function () {

                var ID = $(this).attr('id');
                var first = $("#first_input_" + ID).val();

                $("#first_" + ID).html('<img src="load.gif" />'); // Loading image
                //alert(ID);
                if (first.length > 0) {


                    $("#first_" + ID).html(first);


                    //window.location.href = "table_edit_ajax.php?first=" + first+"&last="+last+"&ID="+ID;

                    var xmlhttp = new XMLHttpRequest();


                    //indow.location.href = "trintiIranga.php?q=" + str2;

                    xmlhttp.open("GET", "table_edit_ajax.php?first=" + first + "&ID=" + ID, true);
                    //    alert(2)
                    xmlhttp.send();

                }


            });



            // Edit input box click action
            $(".editbox").mouseup(function () {
                return false

            });

            // Outside click action
            $(document).mouseup(function () {

                $(".editbox").hide();
                $(".text").show();
            });
        });
    }



    function numerisRed() {

        $(document).ready(function () {
            $("h1").css("border-color", "white").show();

            $(".edit_trNr").click(function () {

                var ID = $(this).attr('id');

                // alert(ID);

                $("#firstNr_" + ID).hide();

                $("#first_inputNr_" + ID).show();

            }).change(function () {

                var ID = $(this).attr('id');
                var firstNr = $("#first_inputNr_" + ID).val();

                $("#firstNr_" + ID).html('<img src="https://media2.giphy.com/media/3oEjI6SIIHBdRxXI40/200_s.gif" />'); // Loading image
                //alert(ID);

                if (firstNr.length > 0) {


                    $("#firstNr_" + ID).html(firstNr);


                    //window.location.href = "table_edit_ajax.php?first=" + first+"&last="+last+"&ID="+ID;

                    var bu;

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            document.getElementById("demo").innerHTML = "";
                            bu = this.responseText;
                            document.getElementById("demo").innerHTML = bu;


                            console.log(bu);
                            //alert(bu.length)

                            /*if (bu.length > 4) {
                            alert(bu)
                            }*/

                        }


                    };



                    //indow.location.href = "trintiIranga.php?q=" + str2;

                    xmlhttp.open("GET", "editNrIrangos.php?firstNr=" + firstNr + "&ID=" + ID, true);

                    //    alert(2)
                    xmlhttp.send();


                }


            });



            // Edit input box click action
            $(".editbox").mouseup(function () {

                return false

            });

            // Outside click action
            $(document).mouseup(function () {
                $(".edit_trNr").css("border-color", "green").show();

                $(".editbox").hide();
                $(".text").show();

            });
        });
    }

    function replace2() {
        CKEDITOR.replace('editors');
    }


    function contendRed() {

        $(document).ready(function () {
            //replace()

            $("h1").css("border-color", "white").show();

            $(".edit_trCont").click(function () {

                var ID = $(this).attr('id');

                // alert(ID);

                $("#firstCont_" + ID).hide();

                $("#first_inputCont_" + ID).show();

            }).change(function () {

                var ID = $(this).attr('id');
                var firstCont = $("#first_inputCont_" + ID).val();
                //alert(firstCont)
                //var dataString = 'id='+ ID +'&firstname='+first+'&lastname='+last;
                   var dataString = 'firstCont=' + firstCont + '&ID=' + ID;
                   //alert(dataString)
                $("#firstCont_" + ID).html('<img src="https://media2.giphy.com/media/3oEjI6SIIHBdRxXI40/200_s.gif" />'); // Loading image
                //alert(ID);

                if (firstCont.length > 0) {


                    $("#firstCont_" + ID).html(firstCont);

                    $.ajax({
type: "POST",
url: "editContrangos.php",
data: dataString,
cache: false,

 success: function (data) {
            // alert(data)
             // document.getElementById("demo").innerHTML = data;
}
});
}
else
{
alert('Laukelis tuscias.');
}

});




            // Edit input box click action
            $(".editbox").mouseup(function () {

                return false

            });
                        $("#bliot").mouseup(function () {

                return false

            });

            // Outside click action
            $(document).mouseup(function () {
                $(".edit_trNr").css("border-color", "green").show();
          
                $(".editbox").hide();
                $(".text").show();

            });
        });
    }

     


    function trinti() {







        // alert(str2)
        // alert(idTr)
        var xmlhttp = new XMLHttpRequest();


        //indow.location.href = "trintiIranga.php?q=" + str2;

        xmlhttp.open("GET", "trintiIranga.php?q=" + str2, true);
        //    alert(2)
        xmlhttp.send();



        show()

    }




</script>
       
</body>
</html>

