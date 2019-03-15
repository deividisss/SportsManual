<html>
<head>
    <style>
          #pasirinkimai {
     margin-left: 60%;
        
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
        img{width: 100%;
            height: 140px;
           
      
        }
        
               .redagavimas  img{
        
            width: 50%;
            height: auto;
           
      
        }
         #cardContainer>div:hover.redagavimas {
        transform:none;
     background-color: white;

    color:black;
    border: solid green;
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
            border: 8px solid green;
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
<body onload="show()">
    <div id="pasirinkimai" class="mygtukoDizainas">
     <input type="button" class="pasirinkimais" value="Redagavimas" class="mygtukoDizainas" onclick="location.href='showEdit.php'" >
     <input type="button" class="pasirinkimais" value="Trinimas" class="mygtukoDizainas" onclick="location.href='redaguotIranga.php'"></div>
        <div id="demo"></div>
<p><b>Pieška veikia paga įrangos pavadinimą arba įrangos numerį</b></p>
<form> 
Įveskite duomenis: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: </p>
    <div><p><span id="txtHint"></span></p></div>

    <div id="raumenysSolo" class="mygtukoDizainas"></div>
     <form>
         <div class="mygtukoDizainas"><input type="button" value="Trinti" class="mygtukoDizainas" onclick="trinti()" ><br><br></div>
    <div id="cardContainer"></div>
   </form>
    <script>
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
                        i=i+2;





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
    }




    //alert();
    /*$fn2 = "irangaShow.php?";
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



                div.innerHTML = (mas[i]);
                cardContainer.appendChild(div);
                i++;
            }
        }
    }
   
    rg2.send(null);*/




    var idTr;
    var str2 = '';

    function pasirinkti(select) {
      
             document.getElementById(select.id).style.backgroundColor = "red";
             
             document.getElementById(select.id).style.borderColor = "black";

                          document.getElementById(select.id).style.color = "white";
                          
                


        
        idTr = select.id+",";
    
        str2 += idTr;



        //alert(str2)


       
        //alert(idTr)



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

    function show() {

             document.getElementById("cardContainer").innerHTML = "";
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



                    div.innerHTML = (mas[i]);
                    cardContainer.appendChild(div);
                    i++;
                }
            }
        }

        rg2.send(null);

   
    }

    $(window).load(function(){
   hello();
})

</script>
</body>
</html>

