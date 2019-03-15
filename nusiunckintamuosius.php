
<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body onload="lol()">

        <input type="submit" onclick="load()">
<div id="adiv"></div>

<script type="text/javascript">
          var hello = "hello";

    var world = "world";
    function load(){

   


    
    window.location.href = "rodyk.php?w1=" + hello + "&w2=" + world;

    }

        function lol(){

         var hello = "hello";

    var world = "world";


    document.getElementById("adiv").innerHTML += world+hello;


    }
</script>
</body>
    </body>
</html>
