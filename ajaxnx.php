<!DOCTYPE html>
<html>
<head>
<title>Submit Form Using AJAX and jQuery</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="css/refreshform.css" rel="stylesheet">
<script src="script.js"></script>
</head>
<body>



    <?
    print_r($_POST);
    print_r($_FILES);
?>
<!--
<form id="data" method="post" enctype="multipart/form-data">
    <input type="text" name="first" value="Bob" />
    <input type="text" name="middle" value="James" />
    <input type="text" name="last" value="Smith" />
    <input id="input" name="image" type="file" />
    <button>Submit</button>
    </form>-->

      <form id="data" method="post" enctype="multipart/form-data" name="labas">  
<img src="http://www.w3schools.com/css/img_fjords.jpg" id="nuotrauka" src="#" alt="your image">
          <input type="hidden" name="formid" id="formid" value="tipa id">
<input type="file"  name="image" type="file" id="input" value="kaskas" class="nerodyk">
</form>
    <p id="test1">This is a paragraph.</p>

    <script>

        document.getElementById('nuotrauka').onclick = function () {
           alert()
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







        $(document).ready(function () {
            //$("#btnadd").click(function(){
            $("form#frm1").submit(function () {
                // Returns successful data submission message when the entered information is stored in database.
                var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password + '&contact1=' + contact;
                var formData = new FormData($(this)[0]);
                // AJAX Code To Submit Form.
                $.ajax({
                    type: "POST",
                    url: "updatinamImage.php",
                    data: dataString,
                    cache: false,
                    success: function (result) {
                        alert(result);
                    }
                });

                return false;
            });
        });



        $(document).ready(function () {
            $("#submit").click(function () {
                var name = $("#name").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var contact = $("#contact").val();
                // Returns successful data submission message when the entered information is stored in database.
                var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password + '&contact1=' + contact;
                if (name == '' || email == '' || password == '' || contact == '') {
                    alert("Please Fill All Fields");
                }
                else {
                    // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url: "updatinamImage.php",
                        data: dataString,
                        cache: false,
                        success: function (result) {
                            alert(result);
                        }
                    });
                }
                return false;
            });
        });
</script>
</body>
</html>