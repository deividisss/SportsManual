<?php
include 'connect.php';
  //echo "Prisijunge";
  $ulen="select * from irangos_tipai";
  $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
      //$perduot_arinktis.=$ulenm['id']."*".$ulenm['Treniravimosi_tipas']."*".$ulenm['kartai']."*";
         $perduot_arinktis.=$ulenm['id']."*".$ulenm['irangos_tipas']."*";
  }
  echo $perduot_arinktis;
?>

