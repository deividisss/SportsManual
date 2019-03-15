<?php
   if (isset($_GET["raumuoID"]) && isset($_GET["raumuo"])) {

      $raumuoID=$_GET["raumuoID"];
      $raumuo=$_GET["raumuo"];
      $treniravimosiTipasId=$_GET["treniravimosiTipasId"];
      $lytisID=$_GET["lytisID"];
        $irangost1=$_GET["irangosTipasId"];
        $sudet1=$_GET["sudetingumoLygisId"];


 
//echo $raumuo.' id='.$raumuoID.' Treniravimosi tipas id='.$treniravimosiTipasId.' lytisid='.$lytisID.' irangos tipas id='.$irangost1.' sudetingumo lygio id='.$sudet1;

      //echo "<script>alert('$hello');</script>";
   }
   ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
     
       <title>SportsManual</title>
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/header.css" />
     
    </head>
    <body>
             <?php include 'header.php';?>
        <h1 id="jusutrenke">Jūsų asmeninė treniruotė</h1>

        <?php
include 'connect.php';

  $ulenA=" select apsilimai.id as id,pratimo_pav,kartai_laikas,irangos_nr from apsilimai,iranga where raumenys_id=$raumuoID and apsilimai.iranga_id=iranga.id ORDER BY RAND() LIMIT 2";
$kartaiA='';
  $perduot_arinktis="<br><table id='apsilimasTable' class='apsilimas'><tr id='trenkePav'>
    <th>Įr.nr</th>
    <th>Apšilimas</th>
        <th>Kartai<br>/laikas</th>
  </tr>";
  $ulenvA=mysqli_query($db,$ulenA) or die ("Nesukaite");

  
  while($ulenmA=mysqli_fetch_array($ulenvA)){
      $kartaiA=$ulenmA['kartai_laikas'];
      //echo $kartaiA;
             //$perduot_arinktis.=$ulenm['irangos_nr']."*".$ulenm['pratimo_pav']."*".$ulenm['id']."*".$ulenm['kartai']."*"."<br>";
               $perduot_arinktis.="
  <tr id=".$ulenmA['id']." onclick='apsilimoAtlikimas(this)'>
    <td id='irangosNr'>".$ulenmA['irangos_nr']."</td>
    <td id='pavadinimasTh'>".$ulenmA['pratimo_pav']."</td>
    <td id='kartukai' name='$kartaiA'>$kartaiA</td></tr>";
  }

  echo $perduot_arinktis."</table>";
  
  






if ($sudet1<=2 && $irangost1<=2) {
      $ulen=" select pratimai.id as id,pratimo_pav,irangos_nr,kartai,sudetingumo_lygiai_id from pratimai,iranga,treniravimosi_tipas where pratimai.iranga_id=iranga.id
and raumenys_id=$raumuoID and treniravimosi_tipas.id=$treniravimosiTipasId and sudetingumo_lygiai_id=$sudet1 
and irangos_tipas_id=$irangost1 ORDER BY RAND()
LIMIT 4";
//echo $ulen;
/*    $ulen2="select pratimai.id as id,pratimo_pav,irangos_nr,kartai  from pratimai,iranga,treniravimosi_tipas where pratimai.iranga_id=iranga.$irangosTipasId
and raumenys_id=$raumuoID and treniravimosi_tipas.id=$treniravimosiTipasId ORDER BY RAND()
LIMIT 4";*/
    //echo " =1";
} elseif ($sudet1<=2 && $irangost1==3) {
   // echo "=2";
          $ulen=" select pratimai.id as id,pratimo_pav,irangos_nr,kartai,sudetingumo_lygiai_id from pratimai,iranga,treniravimosi_tipas where pratimai.iranga_id=iranga.id
and raumenys_id=$raumuoID and treniravimosi_tipas.id=$treniravimosiTipasId and sudetingumo_lygiai_id=$sudet1 ORDER BY RAND()
LIMIT 4";
//echo $ulen;
} 
elseif ($sudet1==3 && $irangost1<=2) {
   // echo "=3";
         $ulen=" select pratimai.id as id,pratimo_pav,irangos_nr,kartai,sudetingumo_lygiai_id from pratimai,iranga,treniravimosi_tipas where pratimai.iranga_id=iranga.id
and raumenys_id=$raumuoID and treniravimosi_tipas.id=$treniravimosiTipasId and sudetingumo_lygiai_id in(2,3) 
and irangos_tipas_id=$irangost1 ORDER BY RAND()
LIMIT 4";
//echo $ulen;
} 
elseif ($sudet1==3 && $irangost1==3) {
    //echo "=4";
             $ulen=" select pratimai.id as id,pratimo_pav,irangos_nr,kartai,sudetingumo_lygiai_id from pratimai,iranga,treniravimosi_tipas where pratimai.iranga_id=iranga.id
and raumenys_id=$raumuoID and treniravimosi_tipas.id=$treniravimosiTipasId and sudetingumo_lygiai_id in(2,3) 
and irangos_tipas_id in(1,2) ORDER BY RAND()
LIMIT 4";
//echo $ulen;
} 
elseif ($sudet1==4 && $irangost1<=2) {
    //echo "=5";
             $ulen=" select pratimai.id as id,pratimo_pav,irangos_nr,kartai,sudetingumo_lygiai_id from pratimai,iranga,treniravimosi_tipas where pratimai.iranga_id=iranga.id
and raumenys_id=$raumuoID and treniravimosi_tipas.id=$treniravimosiTipasId and sudetingumo_lygiai_id in(1,2,3) 
and irangos_tipas_id=$irangost1 ORDER BY RAND()
LIMIT 4";
//echo $ulen;
} 
else {
   // echo "=6";

               $ulen=" select pratimai.id as id,pratimo_pav,irangos_nr,kartai,sudetingumo_lygiai_id from pratimai,iranga,treniravimosi_tipas where pratimai.iranga_id=iranga.id
and raumenys_id=$raumuoID and treniravimosi_tipas.id=$treniravimosiTipasId and sudetingumo_lygiai_id in(1,2,3) 
and irangos_tipas_id in(1,2) ORDER BY RAND()
LIMIT 4";
//echo $ulen;
} 


  $kartai='';
  $perduot_arinktis="<table id='trenkeTable'><tr id='trenkePav'>
    <th>Įr.nr</th>
    <th>Treniruotė</th>
        <th>Kartai</th>
  </tr>";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");


  while($ulenm=mysqli_fetch_array($ulenv)){
      $kartai=$ulenm['kartai'];
             //$perduot_arinktis.=$ulenm['irangos_nr']."*".$ulenm['pratimo_pav']."*".$ulenm['id']."*".$ulenm['kartai']."*"."<br>";
               $perduot_arinktis.="
  <tr id=".$ulenm['id']." onclick='pratAtlikimas(this)'>
    <td id='irangosNr'>".$ulenm['irangos_nr']."</td>
    <td id='pavadinimasTh'>".$ulenm['pratimo_pav']."</td>
    <td id=".$ulenm['kartai'].">".$ulenm['kartai']."</td></tr>";
  }

  echo $perduot_arinktis."</table>";
  
  
  mysqli_close($db);
  //echo $kartai;
?>
        <br>
          <div id='keistMyg'>
        <input type="button"   value="Pradėti treniruotę">
              </div>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
               var php_kartai= "<?php echo $kartai; ?>";
                var php_lytis= "<?php echo $lytisID; ?>";
        
        </script>
        <script>
            function pratAtlikimas(prat) {

                lytisID = php_lytis;
                kartai = php_kartai;
                pratId = prat.id;
                //alert(kartai+'prat id='+pratId)

                window.location.href = "pratimoAtlikimas.php?pratId=" + pratId + "&kartai=" + kartai + "&lytisID=" + lytisID;
            }

            function apsilimoAtlikimas(prat) {
               // alert($('#kartukai').attr('name'));
                lytisID = php_lytis;
                kartai =$('#kartukai').attr('name');
               // alert(kartai);
                pratId = prat.id;
                //alert(kartai+'prat id='+pratId)
                	


                window.location.href = "apsilimoAtlikimas.php?pratId=" + pratId + "&kartai=" + kartai + "&lytisID=" + lytisID;
            }


        </script>

    </body>
</html>
