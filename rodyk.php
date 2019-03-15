<?php
    


 

   // Check if we have parameters w1 and w2 being passed to the script through the URL
   if (isset($_GET["w1"]) && isset($_GET["w2"])) {

      // Put the two words together with a space in the middle to form "hello world"
      $hello = $_GET["w1"] . " " . $_GET["w2"];
    

      // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.
      //echo "<script>alert('$hello');</script>";
   }
  // echo "lol;"

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>

        <input type="submit" onclick="lol()">
<div id="adiv"></div>

<script type="text/javascript">


        function lol(){


         var php_var = "<?php echo $hello; ?>";
    //alert(php_var)

    document.getElementById("adiv").innerHTML += php_var;


    }
</script>
</body>
    </body>
</html>