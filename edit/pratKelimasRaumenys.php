<?php




         $fr_id=$_GET['pfr'];
            //include'connect.php';
                    $db=mysqli_connect('localhost', 'root', '','kacelke') or die ('Neprisijunge');
                    // $db=mysqli_connect('localhost', 'deikasdb','deikas72','deikasdb') or die('Neprisijunge');
  //$ulen="select * from raumenys where raumenu_grupes.id=$fr_id";
    $ulen="select * from raumenys where raumenu_grupe_id='$fr_id'";
  $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
      //$perduot_arinktis.=$ulenm['id']."*".$ulenm['Treniravimosi_tipas']."*".$ulenm['kartai']."*";
       //  $perduot_arinktis.=$ulenm['id']."*".$ulenm['raumenu_grupe']."*";
           //$perduot_arinktis.=$ulenm['image_path']."*".$ulenm['id']."*".$ulenm['raumenu_grupe']."*"."<br>";
             
             $perduot_arinktis.=$ulenm['id']."*".$ulenm['raumuo']."*";
  }
    //$perduot_arinktis.=$fr_id."*";
  echo $perduot_arinktis;


?>

