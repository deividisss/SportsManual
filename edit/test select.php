<?php
      include 'connect.php';
$uzk="select * from raumenu_grupes";

  $perduot_atrinktis="";
   $uzkv=mysqli_query($db,$uzk) or die ("Nenuskaite");


      echo $perduot_atrinktis;

      $selectas="<select id=\"raumenuGrupe\">
      <option value=\"\">Pasirink raumenu grupe</option>";
      while ($kaskas=mysqli_fetch_array($uzkv)) {
          $id=$kaskas['id'];
          $raumenuGrupe=$kaskas['raumenu_grupe'];
    $selectas.="<option value=\"$id\">$raumenuGrupe</option>";
      }
      $selectas.="</select>";
      echo $selectas;

      
      /*while ($ulenm=mysqli_fetch_array($ulensv)) {
    
      $perduot_atrinktis.=$ulenm['id']."*". $ulenm['raumenu_grupe']."*";
      
      
}
*/

?>

<?php
      include 'connect.php';
$uzk="select * from raumenu_grupes";

  $perduot_atrinktis="";
   $uzkv=mysqli_query($db,$uzk) or die ("Nenuskaite");


      echo $perduot_atrinktis;

      $selectas="<select id=\"raumenuGrupe\">
      <option value=\"\">Pasirink raumenu grupe</option>";
      while ($kaskas=mysqli_fetch_array($uzkv)) {
          $id=$kaskas['id'];
          $raumenuGrupe=$kaskas['raumenu_grupe'];
    $selectas.="<option value=\"$id\">$raumenuGrupe</option>";
      }
      $selectas.="</select>";
      echo $selectas;

?>