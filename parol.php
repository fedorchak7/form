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
         <div class="logg log-in"><a href="login.php" class="login-up">Ввійти</a></div>
         <div class="logg log-up"><a href="log-up.php" class="login-up">Зареєструватися</a></div>
     </div>
 </header>
 <?php
 $emailval = $_POST["email4"];
 ?>
<form action="" method="post" class="decor">
 <div class="form-left-decoration"></div>
  <div class="form-right-decoration"></div>
  <div class="circle"></div>
  <div class="form-inner">
  <h3>Відновлення паролю</h3>
 Email:  <input type="text" value = "<?php echo "$emailval";?>" name="email4" /><br />
  <div class="success">
<?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
{
    func();
}
function func()
{
  $email2=$_POST['email4'];
  $file = file_get_contents('logins.txt');
  $file2 = unserialize($file);
  $emailcheck=false;
  foreach ($file2 as $user) {
      if($email2==$user['email']){
       $emailcheck=true;
      }
      }


$email2 = file_get_contents('email.txt');
if($emailcheck){
   
   $password = random_bytes(10);
   //file_put_contents('password.txt',$password);
   echo "Новий пароль надісланий на пошту";
   ?>
  </div>
  
<?php
}
else{
echo "<div class=\"alert-error\">Користувача з такою поштовою скринькою не існує</div>";
}
}
?>
  <input type="submit" name="someAction" value="Відновити" />
  </div>
</form>
</body>

</html>