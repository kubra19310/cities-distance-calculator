<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
</head>
<body style="background-color:LightGray;border: 3px solid white;margin: 200px;">
<h1 style="color:white; font-family:verdana;font-size:200%;text-align:center;" >Distance Calculator App</h1>
<form>
    <br/>
    <a href="{{url('/login')}}" style="background-color: pink;display: block;
        margin: auto;
        border: 6px solid black;width:max-content;height:max-content;">
       <h2>GİRİŞ YAP</h2>
    </a>
        <br/>
        <br/>
    <a href="{{url('/kayit')}}" style="background-color:RGB(247,220,111);display: block;
        margin: auto;
        border: 6px solid black;width:max-content;height:max-content;">
    <h2>KAYIT OL</h2>
    </a>
        <br/>
        <br/>
</form>
</body>
</html>
