
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
   <title>SportsManual</title>
    <link type="text/css" rel="stylesheet" href="css/header.css" />
        <style>

   #Nr {

    border: 15px solid green;
    
      width: 150px;
  height: 150px;
  border-radius: 50%;
  font-size: 50px;
  color: #1a1a1a;
  line-height: 150px;
  text-align: center;
  background: white;

    
    }
</style>
    </head>
    <body>
            <?php include 'header.php';?>
         <script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>

        <h1 style="text-align: center">Įrangos ikelimas</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Pasirinkt nuotrauka: <input type="file" name="image"/><br><br>
Ivesk irangos pavadinimą: <input type="text" name="tekstas">
    Ivesk irangos numerį: <input type="text" name="tekstasNr"><br><br>
      <textarea class="ckeditor"id="myInput" name="editor"></textarea><br>

        <input type="submit" name="upload" value="Ikelti nuotraukas"/></form>

        
        <script>
            CKEDITOR.replace('editor');
           
        </script>
  


<?php
  include 'connect.php';
  //echo "Prisijunge";
if (isset($_POST['upload'])){
    $allowed_extensions = array( "image/png", "image/jpg", "image/gif","image/jpeg", );
    $ok=1;


     $image_name = $_FILES['image'] ['name'];
         $image_type = $_FILES['image'] ['type'];
         $image_size = $_FILES['image'] ['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
     	$filepath = "uploaded/iranga/".$image_name;
        //echo $image_type."<br>";
	     $value=$_POST['tekstas'];
         $valueNr=$_POST['tekstasNr'];
         $text = $_POST['editor'];
       

            if( !in_array( $_FILES[ "image" ][ "type" ], $allowed_extensions)){
             echo 'Netinka Pailaikomi formatai: png",jpg",gif,jpeg';
               exit; 
            }

 $lengthStrg=strlen($image_name); // 6  
echo $lengthStrg; // 6



                                     if ( $lengthStrg >30 ) {
    echo "per ilgas paveikslelio pavadinimas pavadinimas";
          exit; 
        }

             if(!isset($value) || trim($value) == '')
            {
               echo "<br> Neivestas pavadinimas";
                  exit; 
            }

                         if(!isset($valueNr) || trim($valueNr) == '')
            {
               echo "<br> Neivestas įrangos numeris";
                  exit; 
            }
                 if(!isset($text) || trim($text) == '')
            {
               echo "<br> Neivestas Straipsnis";
                  exit; 
            }
            move_uploaded_file($image_tmp_name,$filepath);
         // move_uploaded_file($image_tmp_name,"uploaded/$image_name");
       
       $query = "select (irangos_nr) from iranga where irangos_nr='$valueNr'";

     
$result = mysqli_query($db,$query); //$link is the connection

if(mysqli_num_rows($result) > 0 ){
    
     echo "Įranga su tokiu numeriu jau yra";
     die;
}



          $sql = "INSERT INTO iranga (irangos_nr,irangos_pav,image_name,image_path,image_type,content) VALUES ('$valueNr', '$value','$image_name','$filepath','$image_type','$text')";
          //echo $image_name;

    if (mysqli_query($db, $sql)) {
    echo "Naujas irasas sekmingai sukurtas";
       
       }            
        else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);}


 /*   $sql = "INSERT INTO content (content) values('$text')";
          //echo $image_name;

    if (mysqli_query($db, $sql)) {
    echo "Naujas irasas sekmingai sukurtas";
       
       }            
        else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);}

 */


   echo "Nuotrauka ikelta sekminga";
   echo "<h1>$value</h1>";
          echo "<br><img src='uploaded/iranga/$image_name'><br>";
          echo "<h1 id='Nr'>$valueNr</h1>";
            echo $text; 
          }


    
?>
    </body>
</html>