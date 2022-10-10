<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
</head>
<body style="background-color:LightGray;border: 8px solid pink;margin: 200px;">
<!-- <h2 style="color:white; font-family:verdana;font-size:200%;text-align:center;">Giriş</h2>  -->

<form method="POST" action="{{url('/login')}}" style="text-align:center">
<br/>
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
  <button type="submit" class="btn btn-primary">Giriş</button>
  <br/>
  <br/>
</form> 
</body>
</html>