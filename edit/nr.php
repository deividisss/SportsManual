<!DOCTYPE html>
<html>
<head>
    <style>
        #Nr {
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
    background-color: #ff6a00;
    transform: scale(1.12);
    
    border: none;
    
}
    
    
        
        * {
    box-sizing: border-box;
}
        img{width: 100%;
            height: 140px;
           
      
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
                  margin-bottom: 110px;   
                            
        }
        
                #cardContainer  {
            margin: 0 auto;
       width: 98%;
            font-size: 120%;
            
color: green;
        }
</style>
      <meta charset="utf-8" />
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
                    //alert(ats)

               
                    //alert(mas)

                        mas = ats.split("((");
                               // alert(mas)
                    var kiek = mas.length;
                    //alert(mas);

                    /*    document.getElementById("raumenysSolo").innerHTML =mas;
                    document.getElementById("raumenysSolo").style.color = "blue";*/
           
                 


                    var cardContainer = document.getElementById("cardContainer");
                    for (var i = 0; i < kiek - 1; i++) {
                          
                        var div = document.createElement("div");
                   
                           // alert(mas[i+1])
                        div.innerHTML = ('<p>' + mas[i+1]);
                        cardContainer.appendChild(div);
                        i++;
                    }


                 


                    // alert(0)

                }
                //alert(01)

            };
            //alert(1)
            xmlhttp.open("GET", "searchNR.php?q=" + str, true);
            //    alert(2)
            xmlhttp.send();

            document.getElementById("cardContainer").innerHTML = "";
        }
        //  alert(4)
    }



</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 

    Įrangos Numeris: <input type="text"  onkeyup="showHint(this.value)">

</form>


<p>Pasirinkimai</p>

     <div id="kintamieji" class="mygtukoDizainas"></div>
    <div id="raumenysSolo" class="mygtukoDizainas"></div>
    <div id="cardContainer"></div>
   
</body>
</html>

