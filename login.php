<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>php</title>
</head>

<body>
<header class="header">
     <div class="log">
         <div class="logg log-in"><a href="" class="login-up">Ввійти</a></div>
         <div class="logg log-up"><a href="log-up.php" class="login-up">Зареєструватися</a></div>
     </div>
 </header>
 <?php
 $nameval = $_POST["name3"];
 ?>
<form action="" method="post" class="decor">
 <div class="form-left-decoration"></div>
  <div class="form-right-decoration"></div>
  <div class="circle"></div>
  <div class="form-inner">
  <h3>Вхід</h3>
 Name:  <input type="text" value = "<?php echo "$nameval";?>" name="name3" /><br />
 Password:  <input type="text" autocomplete="off" name="password3" /><br />
 <div class="alert-error">
<?php
// include ('style.css');
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
{
    func();
}
function func()
{
 $name5 = $_POST['name3'];
 $password5 = $_POST['password3'];

$file = file_get_contents('logins.txt');
$file2 = unserialize($file);

$logincheck=false;
foreach ($file2 as $user) {
    if($name5==$user['login'] && $password5 == $user['password']){
     $logincheck=true;
    }
    }


if($logincheck){
   echo "<div class=\"success\">Вхід виконано</div>";
 
}
else{
    echo "Імя або пароль не вірні";
}
}
?>
 </div>
  <input type="submit" name="someAction" value="Вхід" />
<a href="parol.php" class="parol">Забули пароль</a>
  </div>
</form>

</body>

</html>