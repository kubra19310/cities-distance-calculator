<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mesafe Hesaplama Sayfası</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  
</head>

<body style="background-color:LightGray;border: 8px solid white;margin: 200px; text-align:center">
    <br />
    <br />
    <label for="city1" style=" width:inherit;display: block;
        margin: auto;
       width:auto;height:auto;text-align:center;">Şehir 1</label><br>
    <input type="text" id="city1" name="city1" autocomplete="current-city1" required="" id="id_city1"><br>
    <br />
    <label for="city2" style=" width:inherit;display: block;
        margin: auto;
        width:auto;height:auto;text-align:center;">Şehir 2</label><br>
    <input type="text" id="city2" name="city2" autocomplete="current-city2" required="" id="id_city2">
    <br>
    <br>
    <button id="cek" type="submit" class="btn btn-success save-data">Hesapla</button>
    <br />
    <br />
    <br/>
    <label for="mesafe" style=" width:inherit;display: block;
        margin: auto;
       width:auto;height:auto;text-align:center;">Mesafe</label><br>
    <input type="text" id="mesafe" name="mesafe">
    <br/>
    <br/>

  <script type="text/javascript">
    $("#cek").click(function(e) {
      e.preventDefault();

      let city1 = $("input[name=city1]").val();
      let city2 = $("input[name=city2]").val();
      let mesafe = $("input[name=mesafe]").val();

      $.ajax({
        type: "post",
        url: "{{url('distance')}}",
        data: {
        city1:city1,
        city2:city2,
        mesafe:mesafe,
        },
        success: function(response) {
          console.log(response);
          $("#mesafe").val(response);
        },
        error: function(error){
          console.log(error);
        }
        
      });
    });
  </script>
</body>

</html>