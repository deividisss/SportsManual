
<?php

   /*$ip = "123.456.789.000"; // some IP address
   //$iparr = split (".", $ip); 

    $a=(explode(".",$ip));
  //echo  $a[0];




   $cars=array("Volvo","BMW","Toyota"); */
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";?>
<?php
// Array with names
include 'connect.php';
  //echo "Prisijunge";
    $fr_id=$_GET['raumGrId'] ;
$q = $_REQUEST["q"];


  $ulen="select * from iranga ";
  $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
      //$perduot_arinktis.=$ulenm['id']."*".$ulenm['Treniravimosi_tipas']."*".$ulenm['kartai']."*";
       //  $perduot_arinktis.=$ulenm['id']."*".$ulenm['raumenu_grupe']."*";
           //$perduot_arinktis.=$ulenm['image_path']."*".$ulenm['id']."*".$ulenm['raumenu_grupe']."*"."<br>";
             
            // $perduot_arinktis.=$ulenm['image_path']."*".$ulenm['id']."*".$ulenm['raumenu_grupe']."*".$ulenm['content']."*";
        /*   $array[] = array (
            //'label' => $ulenm['irangos_nr'].', '.$ulenm['irangos_pav']);
            'label' =>$ulenm['irangos_nr'].', '.$ulenm['irangos_pav']);*/
        $lol=$ulenm['image_path'];
             $perduot_arinktis.=$ulenm['irangos_nr']."((".$ulenm['irangos_pav']."<p>"."<br><img src='$lol'><br><br><h1 id='Nr'>".$ulenm['irangos_nr']."</h1><br>"."(("."*";
      
  }


  
    
    $a=(explode("*",$perduot_arinktis));
// print_r ($a);
  //echo  $a[0];
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
}

// Output "no suggestion" if no hint was found or output correct values 




echo $hint === "" ? "nera pasiulimu" : $hint;




?>


