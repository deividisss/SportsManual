<?php
  $db=mysqli_connect('localhost', 'root', '','kacelke') or die ('Neprisijunge');
  $fr_id=$_GET['pfr'] ;
 
 echo  $fr_id;
   
   
while ($ulenm=mysqli_fetch_array($ulensv)) {
    
      $perduot_atrinktis.=$ulenm['id']."*". $ulenm['istrizaine']."*";
      
      
}

      echo $perduot_atrinktis;
  
?>
