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
         <div class="logg log-up"><a href="" class="login-up">Зареєструватися</a></div>
     </div>
 </header>
 <?php
 $emailval = $_POST["email"];
 $nameval = $_POST["name"];
 ?>
 <form action="" method="post" class="decor">
 <div class="form-left-decoration"></div>
  <div class="form-right-decoration"></div>
  <div class="circle"></div>
  <div class="form-inner">
  <h3>Реєстрація</h3>
Ім'я:  <input class="name" value = "<?php echo "$nameval";?>" type="text" name="name" /><br class="br-alert"/>
<p class="alert name-alert">Поле пусте</p>
<p class="alert  name-alert2">Тільки ....</p>
 Пароль:  <input class="password" type="text" autocomplete="off" name="password" /><br class="br-alert"/>
 <p class="alert pass-alert">Поле пусте</p>
 <p class="alert pass-alert2">Тільки ....</p>
  Пошта: <input class="email" value = "<?php echo "$emailval";?>" type="text" name="email" /><br class="br-alert"/>
  <p class="alert email-alert">Поле пусте</p>
  <p class="alert email-alert2">Invalid email format</p>

  
  <div class="alert-error">
<?php

$namecheck;
$passwordcheck;
$emailcheck;
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
{
    func();
}
function func()
{

   $name1="fedd";

// name check
if(empty($_POST["name"])){
 // echo "name - empty";
  ?>
  <style>
  .name{

      border: 1px solid red !important
  }
  .br-alert{
      display: none;
  }
  .name-alert{
      display: block;
  }
  </style>
  <?php
}
elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])){
    // echo "name bad";
    ?>
    <style>
         .br-alert{
      display: none;
  }
        .name-alert2{
      display: block;
  }
    .name{
        border: 1px solid red !important
    }
    </style>
    <?php
}
else{
    $file10 = file_get_contents('logins.txt');
$file11 = unserialize($file10);
    $namechek2 = false;
    $name2 = $_POST['name'];
    foreach ($file11 as $user) {
     if($user['login']==$name2){
        $namechek2 = true;
     }
    }
    unset($file10);
    unset($file11);
    if($namechek2==false){
   
   $namecheck = true;
    //echo $name2;
    //file_put_contents('name.txt',$name2);
    }
    else{
        echo "Цей логін занятий";
        ?>
    <style>
         .br-alert{
      display: none;
  }
    .name{
        border: 1px solid red !important
    }
    </style>
    <?php
    }
}

//password check

if(empty($_POST["password"]))
{
   // echo "<br>password - empty";
    ?>
    <style>
         .br-alert{
      display: none;
  }
        .pass-alert{
      display: block;
  }
    .password{
        border: 1px solid red !important
    }
    </style>
    <?php
}
elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST['password'])){
   // echo "password bad";
    ?>
    <style>
         .br-alert{
      display: none;
  }
           .pass-alert2{
      display: block;
  }
    .password{
        border: 1px solid red !important
    }
    </style>
    <?php
}
else{
    $password = $_POST['password'];
    $passwordcheck=true;
   // echo "<br>" . $password;
    //file_put_contents('password.txt',$password);
}
//email check
if (empty($_POST["email"])) {
   // echo "Email - empty";
    ?>
    <style>
         .br-alert{
      display: none;
  }
           .email-alert{
      display: block;
  }
    .email{
        border: 1px solid red !important
    }
    </style>
    <?php
  } elseif (!preg_match ('/[\.a-z0-9_\-]+[@][a-z0-9_\-]+([.][a-z0-9_\-]+)+[a-z]{1,4}/i', $_POST['email'])){
     //echo "<br>Invalid email format";
     ?>
     <style>
          .br-alert{
      display: none;
  }
            .email-alert2{
      display: block;
  }
     .email{
         border: 1px solid red !important
     }
     </style>
     <?php
    }
    else{
        $email =  $_POST['email'];
        $file10 = file_get_contents('logins.txt');
        $file11 = unserialize($file10);
            $emailchek2 = false;
            foreach ($file11 as $user) {
             if($user['email']==$email){
                $emailchek2 = true;
             }
            }
            unset($file10);
            unset($file11);
        if($emailchek2 == false){
        $emailcheck = true;}
        else{
            echo "Користувач з такоюю поштую вже створений";
        }
    //echo "<br>" . $email;
    //file_put_contents('email.txt',$email);
    }
    ?> 
  </div>
  <div class="success">
<?php
// $admin = [
//     1=>['login'=>"admin", 'password'=>"admin", 'email'=>"fedorchak01@gmail.com", 'role'=>'admin'],
//    ];
// $admin2 = serialize($admin); 
// file_put_contents('logins.txt',$admin2);
if($namecheck==true && $passwordcheck==true && $emailcheck==true){
//     $admin = [
//         1=>['login'=>"admin", 'password'=>"admin"],
//         2=>['login'=>$name2, 'password'=>$password]
//        ];
//        echo "<pre>";
//        print_r($admin);
//        echo "</pre>";
//        $admin2 = serialize($admin); 
//        file_put_contents('logins.txt',$admin2);
//    //    file_put_contents('logins.txt',$admin[2], FILE_APPEND);
//        $file = file_get_contents('logins.txt');
//        echo "<pre>";
//        $file2 = unserialize($file);
//        print_r($file2);
//        echo "</pre>";

$file = file_get_contents('logins.txt');
$file2 = unserialize($file);
    $i = count($file2) + 1;
    $file3 = [
        $i =>['login'=>$name2,'password'=>$password,'email'=>$email,'role'=>'user']
    ];
     $file4 = $file2 + $file3;
    $file5 = serialize($file4); 
    file_put_contents('logins.txt',$file5);
    $file1 = file_get_contents('logins.txt');
    $file5 = unserialize($file1);
    echo "<pre>";
     print_r($file5);
     echo "</pre>";
    // file_put_contents('name.txt',$name2);
    // file_put_contents('password.txt',$password);
    // file_put_contents('email.txt',$email);
    echo "Ви успішно зареєструвалися<br>Перевірьте пошту";
}
}

?>
  </div>
<input type="submit" name="someAction" value="Зареєструватися">

</div>
</form> 




</body>

</html>


