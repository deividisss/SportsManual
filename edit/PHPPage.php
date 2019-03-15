<!---<!DOCTYPE html>
<html>
       
<script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>
<body>

<form>
   <input type="image" name="meska" id="1"value="1" src="https://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/leisa_christmas_false_color.png?itok=Jxf0IlS4.gif"><br>

  <input type="submit" value="Submit">
</form>
 <form action="welcome.php" method="post">
        <textarea id="myInput" name="editor1"></textarea><br>
     
          <input type="submit" value="Submit" onclick="myFunction()">
</form>



        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
  


<p id="demo"></p>

<script>
function myFunction() {
    alert(hello)

}
</script>

</body>
</html>
-->
<!DOCTYPE html>
<html>
       

<body>
    <script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>
    <form action="" method="post">
        <textarea class="ckeditor"id="myInput" name="editor"></textarea><br>
     
          <input type="submit" value="Submit" >
</form>



        <script>
            CKEDITOR.replace('editor');
           
        </script>
  



</body>
</html>

<?php
include 'connect.php';


if(isset($_POST['editor']))
{
$text = $_POST['editor'];
echo $text;

$sql = "INSERT INTO content (content) values('$text')";
          //echo $image_name;

    if (mysqli_query($db, $sql)) {
    echo "Naujas irasas sekmingai sukurtas";
       
       }            
        else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);}

}    


?>