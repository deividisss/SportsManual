<?php
include 'connect.php';
  //echo "Prisijunge";
  $ulen="select * from lytys";
  $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
      $perduot_arinktis.=$ulenm['id']."*".$ulenm['lytis']."*".$ulenm['ikona']."*";
  }

  echo $perduot_arinktis;
?>