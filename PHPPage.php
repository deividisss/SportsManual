<?php
    


 

   // Check if we have parameters w1 and w2 being passed to the script through the URL
   if (isset($_GET["w1"]) && isset($_GET["w2"])) {

      // Put the two words together with a space in the middle to form "hello world"
      $id=$_GET["w1"];
      $value=$_GET["w2"];
      $hello = $_GET["w1"] . " " . $_GET["w2"];
    


      // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.
      //echo "<script>alert('$hello');</script>";
   }
  // echo "lol;"

?>

<!DOCTYPE html>
<html lang="en">
    <head>
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

         <script src="script2.js"></script>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body onload="raumenuGrupesP()">
             <div id="kintamieji"></div>

        <input type="submit" onclick="lol()">
        
        <input type="submit" onclick="raumenu_grupe()" value="rodyk raumenu grupes">

<div id="adiv"></div>
       

         <div id="rodykRaumenys" class="mygtukoDizainas">
   <h1>Raumenu grupe</h1>
   </div>
    

    
    <div id="raodykRaumenysPaciau">
    <h1 id="raodykRaumenysPaciauPav"></h1>
          <h1 id="raodykRaumenysPaciauPav2"></h1>
    </div>
     <p id="demo"></p>



        <script>

                  var php_var = "<?php echo $hello; ?>";
           var php_varid = "<?php echo $id; ?>";
                       var php_varvalue = "<?php echo $value; ?>";







        </script>
</body>

    <?php
            echo $hello.$hello;;

    ?>
    </body>
</html>