<?php
include 'connect.php';
  //echo "Prisijunge";
  $ulen="select * from raumenu_grupes";
  $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
      //$perduot_arinktis.=$ulenm['id']."*".$ulenm['Treniravimosi_tipas']."*".$ulenm['kartai']."*";
         $perduot_arinktis.=$ulenm['id']."*".$ulenm['raumenu_grupe']."*";
  }
  echo $perduot_arinktis;
?>

