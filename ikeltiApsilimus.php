<?php
 include 'connect.php';
 // $db=mysqli_connect('localhost', 'deikasdb','deikas72','deikasdb') or die('Neprisijunge');
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
      select#raumenytagai {
 
    height:300px;
}
        </style>
          
        <title>SportsManual</title>
    <link type="text/css" rel="stylesheet" href="css/header.css" />
        <meta charset="utf-8" />
           <script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    </head>
    <body>
         <?php include 'header.php';?>
        <div id="forma">
        <div id="result"></div>
        <form id="data" method="post" enctype="multipart/form-data" name="labas" >  
            <br>
                <h2>Įvesti apsilimo pavadinimą</h2><input type="text" name="pavadinimas" size="75"><br><br>
                                   <p>Ivesk kartus/laiką </h2><input type="number" name="atlikimSkaic" size="55"> <select name="kartaiLaikas">
             <option value="">Kartai ar laikas</option>
  <option value="Kartai">Kartai</option>
  <option value="Sekundes">Sekundes</option>
            
</select> </p>
            <?php
            





       $uzkl="select * from lytys";

 // $perduot_atrinktis="";
   $uzklv=mysqli_query($db,$uzkl) or die ("Nenuskaite");

   //echo  $uzkl;

     // echo $perduot_atrinktis;

      $selectas="<p><select name=\"Lytis\" id=\"LytisID\">
      <option value=\"\">Pasirink lytį</option>";
      while ($kaskas=mysqli_fetch_array($uzklv)) {
          $id=$kaskas['id'];
          $raumenuGrupe=$kaskas['lytis'];
    $selectas.="<option value=\"$id\">$raumenuGrupe</option>";
      }
    $selectas.="</select>  ";
      echo $selectas;



           $uzkl="select * from sudetingumo_lygiai limit 3";
   $uzklv=mysqli_query($db,$uzkl) or die ("Nenuskaite");
      $selectas="<select name=\"Sudetingumas\" id=\"sudetingumasID\">
      <option value=\"\">Pasirink sudėtingumo lygį</option>";
      while ($kaskas=mysqli_fetch_array($uzklv)) {
          $id=$kaskas['id'];
          $raumenuGrupe=$kaskas['sudetingumo_lygis'];
    $selectas.="<option value=\"$id\">$raumenuGrupe</option>";
      }
    $selectas.="</select>  ";
      echo $selectas;


                $uzkl="select * from irangos_tipai limit 2";
   $uzklv=mysqli_query($db,$uzkl) or die ("Nenuskaite");
      $selectas="<select name=\"irangosTipai\" id=\"irangosTipasID\">
      <option value=\"\">Pasirink irangos tipą</option>";
      while ($kaskas=mysqli_fetch_array($uzklv)) {
          $id=$kaskas['id'];
          $raumenuGrupe=$kaskas['irangos_tipas'];
    $selectas.="<option value=\"$id\">$raumenuGrupe</option>";
      }
    $selectas.="</select> ";
      echo $selectas;



                        $uzkl="select id,irangos_pav from iranga";
   $uzklv=mysqli_query($db,$uzkl) or die ("Nenuskaite");
      $selectas="<select name=\"iranga\" id=\"irangaID\">
      <option value=\"\">Pasirink įrangą</option>";
      while ($kaskas=mysqli_fetch_array($uzklv)) {
          $id=$kaskas['id'];
          $raumenuGrupe=$kaskas['irangos_pav'];
    $selectas.="<option value=\"$id\">$raumenuGrupe</option>";
      }
    $selectas.="</select></p>";
      echo $selectas;


      ?>
                       <p> <select name="priziuretojas">
                  <option value="">Prižiūrėtojasetojas</option>
  <option value="Taip">Taip</option>
  <option value="Ne">Ne</option>
            
</select> 
            <?php

  $uzk="select * from raumenu_grupes";

 // $perduot_atrinktis="";
   $uzkv=mysqli_query($db,$uzk) or die ("Nenuskaite");


     // echo $perduot_atrinktis;

      $selectas="<select name=\"Grupe\" id=\"raumenuGrupe\" onchange=\"raumuoP()\">
      <option value=\"\">Pasirink raumenu grupe</option>";
      while ($kaskas=mysqli_fetch_array($uzkv)) {
          $id=$kaskas['id'];
          $raumenuGrupe=$kaskas['raumenu_grupe'];
    $selectas.="<option value=\"$id\">$raumenuGrupe</option>";
      }
      $selectas.="</select>  ";
      echo $selectas;
?>
            <select id="raumuoID" name="raumuo" >
<option value="">Pasirink raumenį</option>
</select></p>




                Įkelti video <input type="file"  name="video"  id="input">
          
      <br> Youtube video nuoroda  <input type="text" name="youtube" size="60">   <br><br>
                Įkelti nuotrauka 1 <input type="file"  name="image"><br>
                Įkelti nuotrauka 2 <input type="file"  name="image2"><br>
                Įkelti nuotrauka 3 <input type="file"  name="image3"  id="input2"><br><br>
               <h3>Ivesk pratimo aprašymą</h3>
                    <textarea name="editor1" class="ckeditor"></textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor1' );
      CKEDITOR.add            
   </script>
             <br>
              <h3>Ivesk pratimo atlikimą</h3>
              <textarea name="editor2" class="ckeditor"></textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor2' );
      CKEDITOR.add            
   </script>
         
            <br>
            <h3>Pasirink kitus raumenis kurie dirba atliekant pratimą</h3>
             <?php
            





       $uzkl="select * from raumenys";
   $uzklv=mysqli_query($db,$uzkl) or die ("Nenuskaite");
      $selectas="<select multiple=\"multiple\" name=\"tagai[]\" id='raumenytagai'>
      <option value=\"\">Pasirinkimai</option>";
      while ($kaskas=mysqli_fetch_array($uzklv)) {
          $id=$kaskas['id'];
          $raumenuGrupe=$kaskas['raumuo'];
    $selectas.="<option value=\"$raumenuGrupe\">$raumenuGrupe</option>";
      }
    $selectas.="</select>  ";
      echo $selectas;
      ?>


            <br>
   <br>
           <h3>Pratimo versija moterims</h3>
               <input type="button" value="Ne" onclick="MmversijaNe()" class="MygPad pas">
                <input type="button" value="Taip" onclick="MmversijaTaip()" class="MygPad pas">
            <br><br>
        <p id="MotVersija">
                Įkelti nuotrauka M 1 <input type="file"  name="imageM"><br>
                Įkelti nuotraukaM 2 <input type="file"  name="imageM2"><br>
                Įkelti nuotrauka M 3 <input type="file"  name="imageM3"  id="input2"><br>
				 Youtube video nuoroda M  <input type="text" name="youtubeM" size="65"> 
                    
        </p>
            <br>
          <input type="hidden" name="Motprat" value="" id="Motver"/>
                  <input type="submit" value="Įkelti pratimą" class="MygPad">
        </form>

            </div>
        <script>
		var Mversija='Ne';
                    $(document).ready(function () {
                        
                         $('#MotVersija *').prop('disabled',true);
                     

                               });
		function MmversijaNe(){
          Mversija='Ne';
            //alert(Mversija)
		         $('#MotVersija *').prop('disabled',true);

		}
		
        		function MmversijaTaip(){
                     Mversija='Taip';
          //  alert( Mversija)
	
            $('#MotVersija *').prop('disabled',false);
		}

            $('option').mousedown(function(e) {
    e.preventDefault();
    $(this).prop('selected', $(this).prop('selected') ? false : true);
    return false;
});



            function raumuoP(){
//alert("ciai");
            $('#raumuoID')
    .find('option')
    .remove()
    .end()
    .append('<option value="whatever">Pasirink raumenį</option>')
    .val('whatever');
  var frm=document.getElementById("raumenuGrupe").value;
  //alert(frm);
$fn="pratKelimasRaumenys.php?pfr="+frm;
rg=new XMLHttpRequest();
rg.open("GET",$fn,true);
rg.onreadystatechange=function(){
if(rg.readyState==4){
var ats=rg.responseText;
    // alert(ats);
mas=ats.split("*");
var kiek=mas.length;
  //    alert(kiek);
var rn=document.getElementById("raumuoID");

for (var j=0; j<kiek-1;j++){
    
var orn=document.createElement("option");
orn.text=mas[j+1];
orn.value=mas[j];
j++;
rn.add(orn);
}
}
}
rg.send(null);
}




            $(document).ready(function () {
                  //document.getElementById('liol').value = "Whatever I want here";
                $("form#data").submit(function () {
                     $('#Motver').val(Mversija);
                    for ( instance in CKEDITOR.instances ) {
        CKEDITOR.instances[instance].updateElement();
    }
                    // $("input:file").change(function () {
                    //var formData = new FormData($(this)[0]);

                  
                    var formData2 = new FormData($('form#data')[0]);
                  
                    $.ajax({
                        url: "videoIkelimasApsilimai.php?",
                        type: 'POST',
                        data: formData2,     
                        async: false,
                        success: function (data) {
                            //alert(data)
                            var string = data;
                            alert(string);

                          //$( "#result" ).append( string );
                            /*substring = "Klaida";
                            if (string.indexOf(substring) !== -1)
                            {
                            alert(data)
                            // $("#test1").text(data);
                            }*/

                           // $('#nuotrauka').attr('src', data).load(function () {
                               // this.width;   // Note: $(this).width() will not work for in memory images

                           // });
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });

                    return false;
                });
            });











            var first = 5;
            $('#button').click(function () {
                var val1 = $('#text1').val();
                var val2 = $('#text').val();
                var val2 = $('#text2').val();
                $.ajax({
                    type: 'POST',
                    url: 'videoIkelimas.php',
                    data: { text1: val1, text2: val2, text5: first },
                    success: function (response) {
                        $('#result').html(response);
                    }
                });
            });

            </script>
    </body>
</html>
