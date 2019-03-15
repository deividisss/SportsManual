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
             $perduot_arinktis.=$ulenm['irangos_pav']."+^".$ulenm['irangos_pav']."<p>"."<br><img src='$lol'><br><br><h1 class='Nr'>".$ulenm['irangos_nr']."</h1><br>"."+^".$lol2."+^"."*";
             $perduot_arinktis2.=$ulenm['irangos_nr']."+^".$ulenm['irangos_pav']."<p>"."<br><img src='$lol'><br><br><h1 class='Nr'>".$ulenm['irangos_nr']."</h1><br>"."+^".$lol2."+^"."*";
  }


    $a=(explode("*",$perduot_arinktis));
      $a2=(explode("*",$perduot_arinktis2));
   // print_r ($a);
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .="$name";
            }
        }
    }
        foreach($a2 as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint2 .="$name";
            }
        }
    }
}



// Output "no suggestion" if no hint was found or output correct values 





echo $hint2 === "" ? "nera pasiulimu" : $hint2;
echo $hint === "" ? "nera pasiulimu" : $hint;
?>