<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Sayfası</title>
</head>
<body style="background-color:LightGray;border: 8px solid RGB(247,220,111);margin: 200px;">
<form method="POST" action="{{url('kayit')}}" style="text-align:center">
<br/>
<br/>
<label for="name" style=" width:inherit;display: block;
        margin: auto;
       width:auto;height:auto;text-align:center;">Ad</label><br>
  <input type="text" id="ad" name="name" autocomplete="current-name" required="" id="id_name"><br>
  <br/>
  <label for="surname" style=" width:inherit;display: block;
        margin: auto;
       width:auto;height:auto;text-align:center;">Soyad</label><br>
  <input type="text" id="surname" name="surname" autocomplete="current-surname" required="" id="id_surname"><br>
  <br/>
  <label for="tc" style=" width:inherit;display: block;
        margin: auto;
       width:auto;height:auto;text-align:center;">TC</label><br>
  <input type="text" id="tc" name="tc" autocomplete="current-tc" required="" id="id_tc"><br>
  <br/>
  <label for="email" style=" width:inherit;display: block;
        margin: auto;
       width:auto;height:auto;text-align:center;">Email</label><br>
  <input type="text" id="email" name="email" autocomplete="current-email" required="" id="id_email"><br>
<br/>
  <label for="password" style=" width:inherit;display: block;
        margin: auto;
        width:auto;height:auto;text-align:center;">Password</label><br>
  <input type="text" id="password" name="password" autocomplete="current-password" required="" id="id_password">
  <i class="far fa-eye" id="togglePassword" style=" cursor:pointer;"></i>
  <br>
  <br>
  <button type="submit" class="btn btn-primary">Kayıt Ol</button>
  <br/>
  <br/>
</form> 
</body>
</html>