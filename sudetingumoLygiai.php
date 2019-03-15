<?php
include 'connect.php';
  if($db==true)
  //echo "Prisijunge";
  $ulen="select * from sudetingumo_lygiai";
  $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
      //$perduot_arinktis.=$ulenm['id']."*".$ulenm['Treniravimosi_tipas']."*".$ulenm['kartai']."*";
         $perduot_arinktis.=$ulenm['id']."*".$ulenm['sudetingumo_lygis']."*";
  }

 echo $perduot_arinktis;
  //$lol=utf8_encode($perduot_arinktis);
   // echo $lol;
?>
