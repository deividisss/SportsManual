
<?php 

  include 'connect.php';

  //echo "Prisijunge";
  $ulen="select * from treniravimosi_tipas";
  $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
      //$perduot_arinktis.=$ulenm['id']."*".$ulenm['Treniravimosi_tipas']."*".$ulenm['kartai']."*";
         $perduot_arinktis.=$ulenm['id']."*".$ulenm['Treniravimosi_tipas']."*";
  }
  echo $perduot_arinktis;
?>



