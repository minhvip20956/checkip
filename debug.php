<html>
  <head>
    <title>
      Current IP Check
    </title>
  </head>
  <body>
    HTTP_X_FORWARDED_FOR IP Address: <?=$_SERVER['HTTP_X_FORWARDED_FOR']?>
    </br>
    REMOTE_ADDR IP Address: <?=$_SERVER['REMOTE_ADDR']?>
    </br>
    HTTP_CLIENT_IP IP Address: <?=$_SERVER['HTTP_CLIENT_IP']?>
  </body>
</html>
