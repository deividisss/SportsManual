<?php
include 'connect.php';
  //echo "Prisijunge";
    $fr_id=$_GET['raumGrId'] ;
  $ulen="select * from raumenu_grupes where raumenu_grupes.id=$fr_id";
  $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
      //$perduot_arinktis.=$ulenm['id']."*".$ulenm['Treniravimosi_tipas']."*".$ulenm['kartai']."*";
       //  $perduot_arinktis.=$ulenm['id']."*".$ulenm['raumenu_grupe']."*";
           //$perduot_arinktis.=$ulenm['image_path']."*".$ulenm['id']."*".$ulenm['raumenu_grupe']."*"."<br>";
             
             $perduot_arinktis.=$ulenm['image_path']."*".$ulenm['id']."*".$ulenm['raumenu_grupe']."*".$ulenm['content']."*";
  }
    //$perduot_arinktis.=$fr_id."*";
  echo $perduot_arinktis;
  mysqli_close($db);
?>
