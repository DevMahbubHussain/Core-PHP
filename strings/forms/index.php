<?php
  //print_r($_POST);


if(isset($_POST['send'])){
  print_r($_POST);
}

$name = $_POST['name'];
$password = $_POST['password'];
echo $name . "</br>";
echo $name . "</br>";
echo $password;
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
   <input type="text" name="name">
   <input type="password" name="password">
   <input type="submit" name="send" value="submit">
</form>

</body>
</html> 