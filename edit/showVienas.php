<?php
include 'connect.php';
  //echo "Prisijunge";
   $q=$_GET['q'] ;
  $ulen="select * from iranga where id='$q'";
  $perduot_arinktis="";
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  while($ulenm=mysqli_fetch_array($ulenv)){
      //$perduot_arinktis.=$ulenm['id']."*".$ulenm['Treniravimosi_tipas']."*".$ulenm['kartai']."*";
       //  $perduot_arinktis.=$ulenm['id']."*".$ulenm['raumenu_grupe']."*";
           //$perduot_arinktis.=$ulenm['image_path']."*".$ulenm['id']."*".$ulenm['raumenu_grupe']."*"."<br>";
             
            // $perduot_arinktis.=$ulenm['image_path']."*".$ulenm['id']."*".$ulenm['raumenu_grupe']."*".$ulenm['content']."*";
            $lol=$ulenm['image_path'];
              $lol2=$ulenm['id'];
              $lol3=$ulenm['content'];
              $irangosPvav=$ulenm['irangos_pav'];
               $irangosNr=$ulenm['irangos_nr'];
               $imgName=$ulenm['image_name'];
           
            //$perduot_arinktis.="<p data-editable>".$ulenm['irangos_pav']."<p/>"."<br><img input type ='submit' src='$lol' id='$lol2'><br><br><p>.$lol3</p><h1 id='Nr'>".$ulenm['irangos_nr']."</h1><br>"."+^".$lol2."+^";
      // $perduot_arinktis.="<p id='$lol2' class='edit_tr'><span id='first_$lol2' onclick='nameRed()' class='text'>".$ulenm['irangos_pav']."</span><input type='text' value='$irangosPvav' class='editbox' id='first_input_$lol2'></p>"."<br><img input type ='submit' src='$lol' id='$lol2'><br><br><p>.$lol3</p><h1 id='Nr'>".$ulenm['irangos_nr']."</h1><br>"."+^".$lol2."+^";

 /* $perduot_arinktis.="<p id='$lol2' class='edit_tr'><span id='first_$lol2' onclick='nameRed()' class='text pav'>".$ulenm['irangos_pav']."</span><input type='text' value='$irangosPvav' class='editbox' id='first_input_$lol2'></p>"."<br><img input type ='submit' src='$lol' id='$lol2'><br><br>
                     <p>$lol3</p>
                     <h1 class='edit_trNr text Nr' id='$lol2'><span id='firstNr_$lol2' onclick='numerisRed()' class='text'>".$ulenm['irangos_nr']."</span><input type='text' value='$irangosNr' class='editbox nrr' id='first_inputNr_$lol2'></h1><br>"."+^".$lol2."+^";*/
 $perduot_arinktis.="<p id='$lol2' class='edit_tr pavadinimsSolo'><span id='first_$lol2' onclick='nameRed()' class='text pav'>".$ulenm['irangos_pav']."</span><input type='text' value='$irangosPvav' class='editbox' id='first_input_$lol2'></p>"."<br>


       <form id=\"data\" method=\"post\" enctype=\"multipart/form-data\" name=\"labas\">  
<img src=\"$lol\" id=\"nuotrauka\" alt=\"$imgName\" onclick='lol()'><br><br>
          <input type=\"hidden\" name=\"formid\" id=\"formid\" value=\"$lol2\">
<input type=\"file\"  name=\"image\" type=\"file\" id=\"input\" value=\"kaskas\" class=\"nerodyk\">
</form>
                     <div id='$lol2' class='edit_trCont'><div id='firstCont_$lol2' onclick='contendRed()' class='text'>".$ulenm['content']."</div>
                     <textarea class='editbox ckeditor cont' id='first_inputCont_$lol2' name='editor'>$lol3</textarea>  
                       </div>
        
                   
                     <h1 class='edit_trNr text Nr' id='$lol2'><span id='firstNr_$lol2' onclick='numerisRed()' class='text'>".$ulenm['irangos_nr']."</span><input type='text' value='$irangosNr' class='editbox nrr' id='first_inputNr_$lol2'></h1><br>"."+^".$lol2."+^";
 
 
  }

  echo $perduot_arinktis;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">

    document.getElementById('nuotrauka').onclick = function () {
            document.getElementById('input').click();


        }
        //$("form#data").submit(function(){

        $("input:file").change(function () {
            //var formData = new FormData($(this)[0]);
            var formData2 = new FormData($('form#data')[0]);
            $.ajax({
                url: "updatinamImage.php",
                type: 'POST',
                data: formData2,
                async: false,
                success: function (data) {
                    //alert(data)
                    var string = data,
            substring = "Klaida";
                    if (string.indexOf(substring) !== -1)
                    {
                        alert(data)
                       // $("#test1").text(data);
                    }

                    $('#nuotrauka').attr('src', data).load(function () {
                        this.width;   // Note: $(this).width() will not work for in memory images

                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });

            return false;
        });
        </script>
    </body>
</html>
