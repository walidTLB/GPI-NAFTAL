
<?php
session_start();
$conn = new mysqli('localhost','root','','naftal2');

if(isset($_POST['submit'])){
  $username =$_POST['username'];
  $password=$_POST['password'];
  $query =$conn->query("SELECT * FROM utilisateur WHERE username='".$username."' AND mp='".$password."'"  );
  
  $num= mysqli_num_rows($query);
  if($num==1){
    $rec_job=$conn->query("SELECT `fonction` FROM utilisateur WHERE username='$username' and mp='$password'");
    $res=mysqli_fetch_row($rec_job);
    if($res[0]=="charge"){
      $_SESSION["fonction"]='charge';  
    $_SESSION["username"]=$username;
     header("location:acuil.php"); 
    }
    elseif($res[0]=="chefdepartement"){
      $_SESSION["fonction"]='chefdepartement';  
    $_SESSION["username"]=$username;

     header("location:acuil3.php"); 
    }
    elseif($res[0]=="employer"){
      $_SESSION["fonction"]='employer';  
    $_SESSION["username"]=$username;
     header("location:acuil2.php"); 
    }


    
   
  }
  else{
    header("location:index.php?msg=verifier la saisie");
   
  

    
    exit();  
  }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>authentification</title>
    <link rel="stylesheet" href="logincss.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(../image/Naftal.jpg) no-repeat; 
  background-size: cover;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
  background-color: white;
  padding: 1.5cm;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #FADE51;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #FADE51;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: black;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #FADE51;
  color: black;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
  text-decoration: bold;
}
</style>


  <body>
<form class="login-box" method="POST" action="">
  <h1>S'identifier</h1>
    <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    </div>

    <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Mot de passe">
  </div>

  <button type="submit" class="btn btn-primary" name= "submit">submit</button>

</form>
  </body>
</html>
