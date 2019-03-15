<?php
   if (isset($_GET["pratId"]) && isset($_GET["kartai"])) {


      $pratId=$_GET["pratId"];
      $kartai=$_GET["kartai"];
      $lytisID=$_GET["lytisID"];


 
//echo 'Pratimo id='. $pratId.' kartai='.$kartai;

      //echo "<script>alert('$hello');</script>";
   }
   ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>SportsManual</title>
         <link type="text/css" rel="stylesheet" href="css/header.css" />

    </head>
    <body>
           <?php include 'header.php';?>
<div id="konteineris">
<?php
    
include 'connect.php';

if ($lytisID==1){
  $ulen="select iranga.image_path as irangaFoto,pratimo_pav,irangos_nr,raumuo,priziuretojas,tagai,apsilimai.image_path as pratFoto,youtube_nuoroda,
  image2_path as pratFoto2,image3_path as pratFoto3,content_aprasymas,content_atlikimas,raumenys.image_path as raumuoPav
   from apsilimai,iranga,raumenys 
   where apsilimai.iranga_id=iranga.id and apsilimai.raumenys_id=raumenys.id and apsilimai.id=$pratId";  
  
   $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
             $ratPav=$ulenm['pratimo_pav'];
                 $irangaFoto=$ulenm['irangaFoto'];
                    $irangos_nr=$ulenm['irangos_nr'];
                    $raumuo=$ulenm['raumuo'];
                    $priziuretojas=$ulenm['priziuretojas'];
                     $tagai=$ulenm['tagai'];
                     $youtube_nuoroda=$ulenm['youtube_nuoroda'];
                      $pratFoto=$ulenm['pratFoto'];
                   $pratFoto2=$ulenm['pratFoto2'];
                   $pratFoto3=$ulenm['pratFoto3'];
                   $content_aprasymas=$ulenm['content_aprasymas'];
            $content_atlikimas=$ulenm['content_atlikimas'];
             $raumuoPav=$ulenm['raumuoPav'];



  }

       if(strlen($pratFoto3)<24){
           //echo strlen($pratFoto3);
           echo '<h1 id="pratPva">'.$ratPav.' '.$kartai.'</h1>
<img id="irImg" src="'.$irangaFoto.'" alt="Mountain View"><div id="juostaPas"><h2 id="apiet">Apie<br><span class="pabraukt">treniruoklį</span></h2>
<h2 id="apieP">Apie<br><span class="pabraukt"> pratimą</span></h2></div><h1 id="pratIrNr">'.$irangos_nr.'</h1>
<div id="info"><h2>Pagrindinis raumuo: '.$raumuo.'<br>
Pagalbinis žmogus: '.$priziuretojas.'<br>Pagalibiniai raumenys: '.$tagai.'
</h2></div>
<h1 class="juostos">Video</h1>'. $youtube_nuoroda.'<h1 class="juostos">Atlikimas 1</h1>
<img id="irImg" src="'.$pratFoto.'" alt="Mountain View">
<h1 class="juostos">Atlikimas 2</h1>
<img id="irImg" src="'.$pratFoto2.'" alt="Mountain View">


<h1 id="atlikimasPav">Pratimo atlikimas</h1>


<img id="irImg" src="'.$raumuoPav.'" alt="Mountain View">
<div id="atlikimas">'.$content_atlikimas.'</div>
';
       }


       else{
          //echo strlen($pratFoto3);
echo '<h1 id="pratPva">'.$ratPav.' '.$kartai.'</h1>
<img id="irImg" src="'.$irangaFoto.'" alt="Mountain View"><div id="juostaPas"><h2 id="apiet">Apie<br><span class="pabraukt">treniruoklį</span></h2>
<h2 id="apieP">Apie<br><span class="pabraukt"> pratimą</span></h2></div><h1 id="pratIrNr">'.$irangos_nr.'</h1>
<div id="info"><h2>Pagrindinis raumuo: '.$raumuo.'<br>
Pagalbinis žmogus: '.$priziuretojas.'<br>Pagalibiniai raumenys: '.$tagai.'
</h2></div>
<h1 class="juostos">Video</h1>'. $youtube_nuoroda.'<h1 class="juostos">Atlikimas 1</h1>
<img id="irImg" src="'.$pratFoto.'" alt="Mountain View">
<h1 class="juostos">Atlikimas 2</h1>
<img id="irImg" src="'.$pratFoto2.'" alt="Mountain View">
<h1 class="juostos">Atlikimas 3</h1>
<img id="irImg" src="'.$pratFoto3.'" alt="Mountain View">

<h1 id="atlikimasPav">Pratimo atlikimas</h1>


<img id="irImg" src="'.$raumuoPav.'" alt="Mountain View">
<div id="atlikimas">'.$content_atlikimas.'</div>
';
       
  }
  
  









}



//Mot versija
else{

$ulen="select iranga.image_path as irangaFoto,pratimo_pav,irangos_nr,raumuo,priziuretojas,tagai,apsilimai.image_path as pratFoto,youtube_nuoroda,
  image2_path as pratFoto2,image3_path as pratFoto3,content_aprasymas,content_atlikimas,raumenys.image_path as raumuoPav,
  mot_pratvar,image_pathM,image2_pathM,image3_pathM,youtube_nuorodaM 
   from apsilimai,iranga,raumenys 
   where apsilimai.iranga_id=iranga.id and apsilimai.raumenys_id=raumenys.id and apsilimai.id=$pratId";
    $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
             $ratPav=$ulenm['pratimo_pav'];
                 $irangaFoto=$ulenm['irangaFoto'];
                    $irangos_nr=$ulenm['irangos_nr'];
                    $raumuo=$ulenm['raumuo'];
                    $priziuretojas=$ulenm['priziuretojas'];
                     $tagai=$ulenm['tagai'];
                     $youtube_nuoroda=$ulenm['youtube_nuoroda'];
                      $pratFoto=$ulenm['pratFoto'];
                   $pratFoto2=$ulenm['pratFoto2'];
                   $pratFoto3=$ulenm['pratFoto3'];
                   $content_aprasymas=$ulenm['content_aprasymas'];
            $content_atlikimas=$ulenm['content_atlikimas'];
             $raumuoPav=$ulenm['raumuoPav'];

               $mot_pratvar=$ulenm['mot_pratvar'];
                $image_pathM=$ulenm['image_pathM'];
              $image2_pathM=$ulenm['image2_pathM'];
              $image3_pathM=$ulenm['image3_pathM'];
                $youtube_nuorodaM=$ulenm['youtube_nuorodaM'];}

 

     
  if ($mot_pratvar=='Taip'){

      if(strlen($pratFoto3)<24)
      {
           //echo strlen($pratFoto3);
     //echo'nera fotkes';
     // echo 'moVersija yra';
      echo '<h1 id="pratPva">'.$ratPav.' '.$kartai.'</h1>
<img id="irImg" src="'.$irangaFoto.'" alt="Mountain View"><div id="juostaPas"><h2 id="apiet">Apie<br><span class="pabraukt">treniruoklį</span></h2>
<h2 id="apieP">Apie<br><span class="pabraukt"> pratimą</span></h2></div><h1 id="pratIrNr">'.$irangos_nr.'</h1>
<div id="info"><h2>Pagrindinis raumuo: '.$raumuo.'<br>
Pagalbinis žmogus: '.$priziuretojas.'<br>Pagalibiniai raumenys: '.$tagai.'
</h2></div>
<h1 class="juostos">Video</h1>'.$youtube_nuorodaM.'<h1 class="juostos">Atlikimas 1</h1>
<img id="irImg" src="'.$image_pathM.'" alt="Mountain View">
<h1 class="juostos">Atlikimas 2</h1>
<img id="irImg" src="'.$image2_pathM.'" alt="Mountain View">
<h1 id="atlikimasPav">Pratimo atlikimas</h1>
<img id="irImg" src="'.$raumuoPav.'" alt="Mountain View">
<div id="atlikimas">'.$content_atlikimas.'</div>
';
      }
      else{
          
      //echo 'moVersija yra';
      echo '<h1 id="pratPva">'.$ratPav.' '.$kartai.'</h1>
<img id="irImg" src="'.$irangaFoto.'" alt="Mountain View"><div id="juostaPas"><h2 id="apiet">Apie<br><span class="pabraukt">treniruoklį</span></h2>
<h2 id="apieP">Apie<br><span class="pabraukt"> pratimą</span></h2></div><h1 id="pratIrNr">'.$irangos_nr.'</h1>
<div id="info"><h2>Pagrindinis raumuo: '.$raumuo.'<br>
Pagalbinis žmogus: '.$priziuretojas.'<br>Pagalibiniai raumenys: '.$tagai.'
</h2></div>
<h1 class="juostos">Video</h1>'.$youtube_nuorodaM.'<h1 class="juostos">Atlikimas 1</h1>

<img id="irImg" src="'.$image_pathM.'" alt="Mountain View">
<h1 class="juostos">Atlikimas 2</h1>
<img id="irImg" src="'.$image2_pathM.'" alt="Mountain View">
<h1 class="juostos">Atlikimas 3</h1>
<img id="irImg" src="'.$image3_pathM.'" alt="Mountain View">

<h1 id="atlikimasPav">Pratimo atlikimas</h1>
<img id="irImg" src="'.$raumuoPav.'" alt="Mountain View">
<div id="atlikimas">'.$content_atlikimas.'</div>
';
      }



  }

  else{
      

       if(strlen($pratFoto3)<24){
           //echo strlen($pratFoto3);
           echo '<h1 id="pratPva">'.$ratPav.' '.$kartai.'</h1>
<img id="irImg" src="'.$irangaFoto.'" alt="Mountain View"><div id="juostaPas"><h2 id="apiet">Apie<br><span class="pabraukt">treniruoklį</span></h2>
<h2 id="apieP">Apie<br><span class="pabraukt"> pratimą</span></h2></div><h1 id="pratIrNr">'.$irangos_nr.'</h1>
<div id="info"><h2>Pagrindinis raumuo: '.$raumuo.'<br>
Pagalbinis žmogus: '.$priziuretojas.'<br>Pagalibiniai raumenys: '.$tagai.'
</h2></div>
<h1 class="juostos">Video</h1>'. $youtube_nuoroda.'<h1 class="juostos">Atlikimas 1</h1>
<img id="irImg" src="'.$pratFoto.'" alt="Mountain View">
<h1 class="juostos">Atlikimas 2</h1>
<img id="irImg" src="'.$pratFoto2.'" alt="Mountain View">


<h1 id="atlikimasPav">Pratimo atlikimas</h1>


<img id="irImg" src="'.$raumuoPav.'" alt="Mountain View">
<div id="atlikimas">'.$content_atlikimas.'</div>
';
       }


       else{
          
echo '<h1 id="pratPva">'.$ratPav.' '.$kartai.'</h1>
<img id="irImg" src="'.$irangaFoto.'" alt="Mountain View"><div id="juostaPas"><h2 id="apiet">Apie<br><span class="pabraukt">treniruoklį</span></h2>
<h2 id="apieP">Apie<br><span class="pabraukt"> pratimą</span></h2></div><h1 id="pratIrNr">'.$irangos_nr.'</h1>
<div id="info"><h2>Pagrindinis raumuo: '.$raumuo.'<br>
Pagalbinis žmogus: '.$priziuretojas.'<br>Pagalibiniai raumenys: '.$tagai.'
</h2></div>
<h1 class="juostos">Video</h1>'. $youtube_nuoroda.'<h1 class="juostos">Atlikimas 1</h1>
<img id="irImg" src="'.$pratFoto.'" alt="Mountain View">
<h1 class="juostos">Atlikimas 2</h1>
<img id="irImg" src="'.$pratFoto2.'" alt="Mountain View">
<h1 class="juostos">Atlikimas 3</h1>
<img id="irImg" src="'.$pratFoto3.'" alt="Mountain View">

<h1 id="atlikimasPav">Pratimo atlikimas</h1>


<img id="irImg" src="'.$raumuoPav.'" alt="Mountain View">
<div id="atlikimas">'.$content_atlikimas.'</div>
';
       }
  }
 
  
}
 // echo $perduot_arinktis;
  mysqli_close($db);
           
   //echo  $mot_pratvar;
  
?>
</div>       

        
         
    </body>
</html>
