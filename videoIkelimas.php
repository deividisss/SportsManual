<?php



//echo "nx";

include 'connect.php';
  //$db=mysqli_connect('localhost','root','','kacelke') or die('Neprisijunge');
//$db=mysqli_connect('localhost', 'deikasdb','deikas72','deikasdb') or die('Neprisijunge');



    $Motprat=$_POST['Motprat'];
if ($Motprat=='Taip'){
echo "mot versija bus";
 $allowed_extensions = array( "image/png", "image/jpg", "image/gif","image/jpeg", );

      $pavadinimas=$_POST['pavadinimas'];
          $Lytis=$_POST['Lytis'];
           $sudetingumas=$_POST['Sudetingumas'];
              $irangosTipai=$_POST['irangosTipai'];
              $iranga=$_POST['iranga'];
           $Grupe=$_POST['Grupe'];
              $raumuo=$_POST['raumuo'];
      $youtube=$_POST['youtube'];

            $priziuretojas=$_POST['priziuretojas'];
             $aprasymas=$_POST['editor1'];
              $atlikimas=$_POST['editor2'];
           $tagai=$_POST['tagai'];
           
           $comma_separated = implode("*", $tagai);


     $video_name = $_FILES['video'] ['name'];
         $video_type = $_FILES['video'] ['type'];
         $video_size = $_FILES['video'] ['size'];
        $video_tmp_name = $_FILES['video']['tmp_name'];
     	$filepathV = "uploaded/pratimai/".$video_name;
           
             $image_name = $_FILES['image'] ['name'];
         $image_type = $_FILES['image'] ['type'];
         $image_size = $_FILES['image'] ['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];

               $image_name2 = $_FILES['image2'] ['name'];
         $image_type2 = $_FILES['image2'] ['type'];
         $image_size2 = $_FILES['image2'] ['size'];
        $image_tmp_name2 = $_FILES['image2']['tmp_name'];

             $image_name3 = $_FILES['image3'] ['name'];
         $image_type3 = $_FILES['image3'] ['type'];
         $image_size3 = $_FILES['image3'] ['size'];
        $image_tmp_name3 = $_FILES['image3']['tmp_name'];

                 $image_name3 = $_FILES['image3'] ['name'];
         $image_type3 = $_FILES['image3'] ['type'];
         $image_size3 = $_FILES['image3'] ['size'];
        $image_tmp_name3 = $_FILES['image3']['tmp_name'];
     
          $image_nameM = $_FILES['imageM'] ['name'];
         $image_typeM = $_FILES['imageM'] ['type'];
         $image_sizeM = $_FILES['imageM'] ['size'];
        $image_tmp_nameM = $_FILES['imageM']['tmp_name'];

        
          $image_nameM2 = $_FILES['imageM2'] ['name'];
         $image_typeM2 = $_FILES['imageM2'] ['type'];
         $image_sizeM2 = $_FILES['imageM2'] ['size'];
        $image_tmp_nameM2 = $_FILES['imageM2']['tmp_name'];

                 $image_nameM3 = $_FILES['imageM3'] ['name'];
         $image_typeM3 = $_FILES['imageM3'] ['type'];
         $image_sizeM3 = $_FILES['imageM3'] ['size'];
        $image_tmp_nameM3 = $_FILES['imageM3']['tmp_name'];



     	$filepathI1 = "uploaded/pratimai/foto/".$image_name;
           	$filepathI2 = "uploaded/pratimai/foto/".$image_name2;  
                     	$filepathI3 = "uploaded/pratimai/foto/".$image_name3;  

                        
     	$filepathIM1 = "uploaded/pratimai/foto/".$image_nameM;
           	$filepathIM2 = "uploaded/pratimai/foto/".$image_nameM2;  
                     	$filepathIM3 = "uploaded/pratimai/foto/".$image_nameM3;  

  $youtubeM=$_POST['youtubeM'];
          print_r($_POST);

          move_uploaded_file($video_tmp_name,$filepathV);
             move_uploaded_file($image_tmp_name,$filepathI1);
                    move_uploaded_file($image_tmp_name2,$filepathI2);
                           move_uploaded_file($image_tmp_name3,$filepathI3);

                                   move_uploaded_file($image_tmp_nameM,$filepathIM1);
                    move_uploaded_file($image_tmp_nameM2,$filepathIM2);
                           move_uploaded_file($image_tmp_nameM3,$filepathIM3);


                        $sql2 = "INSERT INTO pratimai 
        (pratimo_pav,priziuretojas,
          image_name,image_path,image_type,
        image2_name,image2_path,image2_type,
        image3_name,image3_path,image3_type,
         video_name,video_path,video_type,video_size,
          youtube_nuoroda,content_aprasymas,content_atlikimas,tagai,
           iranga_id,irangos_tipas_id,lytys_id,
            sudetingumo_lygiai_id,raumenys_id,
            
            mot_pratvar,
              image_nameM,image_pathM,image_typeM,
                 image2_nameM,image2_pathM,image2_typeM,
        image3_nameM,image3_pathM,image3_typeM,
          youtube_nuorodaM

        ) 
        
        VALUES 
        ('$pavadinimas','$priziuretojas',
        
        '$image_name','$filepathI1','$image_type',
        '$image_name2','$filepathI2','$image_type2',
        '$image_name3','$filepathI3','$image_type3',
        '$video_name','$filepathV','$video_type','$video_size',
        '$youtube','$aprasymas','$atlikimas','$comma_separated',
        '$iranga','$irangosTipai',' $Lytis',
         '$sudetingumas','$raumuo',
        
         '$Motprat',

       '$image_nameM','$filepathIM1','$image_typeM',
        '$image_nameM2','$filepathIM2','$image_typeM2',
        '$image_nameM3','$filepathIM3','$image_typeM3',
         '$youtubeM'



         )";

                               

         
    if (mysqli_query($db, $sql2)) {
        echo pavyka;
        //  echo  	$filepathV;
        /*echo '<video width="320" height="240" autoplay>
  <source src='."'$filepathV'".' type="video/mp4">
Your browser does not support the video tag.
</video><br>'.$youtube;*/
 

    //echo "Naujas irasas sekmingai sukurtas";
      
       
       }            
        else {
               // echo  	$filepath;
    echo "Klaida Error: " . $sql . "<br>" . mysqli_error($db);}



}



else{
    $allowed_extensions = array( "image/png", "image/jpg", "image/gif","image/jpeg", );

      $pavadinimas=$_POST['pavadinimas'];
          $Lytis=$_POST['Lytis'];
           $sudetingumas=$_POST['Sudetingumas'];
              $irangosTipai=$_POST['irangosTipai'];
              $iranga=$_POST['iranga'];
           $Grupe=$_POST['Grupe'];
              $raumuo=$_POST['raumuo'];
      $youtube=$_POST['youtube'];
            $priziuretojas=$_POST['priziuretojas'];
             $aprasymas=$_POST['editor1'];
              $atlikimas=$_POST['editor2'];
           $tagai=$_POST['tagai'];
             $youtubeM=$_POST['youtubeM'];
           $comma_separated = implode("*", $tagai);
           //echo $comma_separated;

        /*$sql = "INSERT INTO pratimai 
        (pratimo_pav,priziuretojas,
        image_name,image_path,image_type,
        image_name2,image_path2,image_type2
        ,image_name3,image_path3,image_type3,
        video_name,video_path,video_type,video_size,
        youtube_nuoroda,content_aprasymas,content_atlikimas,tagai
        iranga_id,irangos_tipai_id,treniravimosi_tipas_id,lytys_id,sudetingumo_lygiai_id,raumenys_id
        ) 
        
        VALUES ('$pavadinimas',' $Lytis','$Grupe','$raumuo','$youtube','$priziuretojas','$aprasymas','$atlikimas','$comma_separated',
        $video_name','$filepathV','$video_type','$video_size',
        $image_name','$filepathI','$image_type',
        $image_name2','$filepathI2','$image_type2',
        $image_name3','$filepathI3','$image_type3'
       )";

       */
     $video_name = $_FILES['video'] ['name'];
         $video_type = $_FILES['video'] ['type'];
         $video_size = $_FILES['video'] ['size'];
        $video_tmp_name = $_FILES['video']['tmp_name'];
     	$filepathV = "uploaded/pratimai/".$video_name;
           
             $image_name = $_FILES['image'] ['name'];
         $image_type = $_FILES['image'] ['type'];
         $image_size = $_FILES['image'] ['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];

               $image_name2 = $_FILES['image2'] ['name'];
         $image_type2 = $_FILES['image2'] ['type'];
         $image_size2 = $_FILES['image2'] ['size'];
        $image_tmp_name2 = $_FILES['image2']['tmp_name'];

             $image_name3 = $_FILES['image3'] ['name'];
         $image_type3 = $_FILES['image3'] ['type'];
         $image_size3 = $_FILES['image3'] ['size'];
        $image_tmp_name3 = $_FILES['image3']['tmp_name'];
     

     	$filepathI1 = "uploaded/pratimai/foto/".$image_name;
           	$filepathI2 = "uploaded/pratimai/foto/".$image_name2;  
                     	$filepathI3 = "uploaded/pratimai/foto/".$image_name3;  
         // echo $tagai;
        //  print_r($tagai);

          print_r($_POST);
         // echo $Grupe;
             // echo $ID;
       // echo $video_name;
      //  echo $video_type;
        //echo $video_size;
      //  echo $video_tmp_name;

               //echo $image_name;
        //echo $image_type;
       // echo $image_size;
       //echo $image_tmp_name;

       // echo $filepath;
          move_uploaded_file($video_tmp_name,$filepathV);
             move_uploaded_file($image_tmp_name,$filepathI1);
                    move_uploaded_file($image_tmp_name2,$filepathI2);
                           move_uploaded_file($image_tmp_name3,$filepathI3);
       // $sql = "INSERT INTO video (image_name,image_path,image_type,content) VALUES ('$image_name','$filepath','$image_type','$text')";
       // $sql = "INSERT INTO video (video_name,video_path,video_type,video_size,youtube_nuorda) VALUES ('$video_name','$filepathV','$video_type','$video_size',' $youtube')";
        // var $resultatai='';
          //$sql = "update iranga set image_name='$image_name',image_path='$filepath',image_type='$image_type' where id='$ID'";
              /*  $sql = "INSERT INTO pratimai 
        (pratimo_pav,priziuretojas,
        image_name,image_path,image_type,
        image2_name,image2_path,image2_type,
        image3_name,image3_path,image3_type,
        video_name,video_path,video_type,video_size,
        youtube_nuoroda,content_aprasymas,content_atlikimas,tagai,
        iranga_id,treniravimosi_tipas_id,lytys_id,
        sudetingumo_lygiai_id,raumenys_id
        ) 
        
        VALUES 
        ('$pavadinimas','$priziuretojas',
        $image_name','$filepathI1','$image_type',
        $image_name2','$filepathI2','$image_type2',
        $image_name3','$filepathI3','$image_type3',
         $video_name','$filepathV','$video_type','$video_size',
         '$youtube','$aprasymas','$atlikimas','$comma_separated',
         '$iranga','$irangosTipai',' $Lytis',
         ' $sudetingumas','$raumuo'
         

       )";*/

                        $sql2 = "INSERT INTO pratimai 
        (pratimo_pav,priziuretojas,
          image_name,image_path,image_type,
        image2_name,image2_path,image2_type,
        image3_name,image3_path,image3_type,
         video_name,video_path,video_type,video_size,
          youtube_nuoroda,content_aprasymas,content_atlikimas,tagai,
           iranga_id,irangos_tipas_id,lytys_id,
            sudetingumo_lygiai_id,raumenys_id,mot_pratvar
        ) 
        
        VALUES 
        ('$pavadinimas','$priziuretojas',
        
        '$image_name','$filepathI1','$image_type',
        '$image_name2','$filepathI2','$image_type2',
        '$image_name3','$filepathI3','$image_type3',
        '$video_name','$filepathV','$video_type','$video_size',
        '$youtube','$aprasymas','$atlikimas','$comma_separated',
        '$iranga','$irangosTipai',' $Lytis',
         '$sudetingumas','$raumuo',   '$Motprat'
         )";

         
    if (mysqli_query($db, $sql2)) {
        echo pavyka;
        //  echo  	$filepathV;
        /*echo '<video width="320" height="240" autoplay>
  <source src='."'$filepathV'".' type="video/mp4">
Your browser does not support the video tag.
</video><br>'.$youtube;*/
 

    //echo "Naujas irasas sekmingai sukurtas";
      
       
       }            
        else {
               // echo  	$filepath;
    echo "Klaida Error: " . $sql . "<br>" . mysqli_error($db);}

}











   




?>

