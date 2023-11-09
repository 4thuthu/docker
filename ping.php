<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <h1>Ping</h1>
  <form action="" method="post">
    Ping: <input type="text" name="ip">
    <input type="submit" value="Ping">
  </form>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $ip = $_POST['ip'];
      if (strpos($ip, ";") !== false)
      die("Detected");
      if (strpos($ip, "&") !== false) 
      die("Detected");
      
      $ping = shell_exec("ping -c 4 $ip");
      echo "<br>"."Result" ."<br>";
     // echo $ping; 
     echo "<pre>$ping</pre>";
    }
  ?>
</body>
</html>

