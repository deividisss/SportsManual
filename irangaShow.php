<?php
// Array with names
include 'connect.php';
  //echo "Prisijunge";

  $ulen="select * from iranga";
  $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
      //$perduot_arinktis.=$ulenm['id']."*".$ulenm['Treniravimosi_tipas']."*".$ulenm['kartai']."*";
       //  $perduot_arinktis.=$ulenm['id']."*".$ulenm['raumenu_grupe']."*";
           //$perduot_arinktis.=$ulenm['image_path']."*".$ulenm['id']."*".$ulenm['raumenu_grupe']."*"."<br>";
             
            // $perduot_arinktis.=$ulenm['image_path']."*".$ulenm['id']."*".$ulenm['raumenu_grupe']."*".$ulenm['content']."*";
            $lol=$ulenm['image_path'];
              $lol2=$ulenm['id'];
             $perduot_arinktis.="<p>".$ulenm['irangos_pav']."<p/>"."<br><img input type ='submit' src='$lol' id='$lol2'><br><br><h1 class='Nr'>".$ulenm['irangos_nr']."</h1><br>"."+^".$lol2."+^";
      
  }

  echo $perduot_arinktis;
?>