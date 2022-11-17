<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>authentification</title>
    <link rel="stylesheet" href="css/logincss.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

<?php
$conn = new mysqli('localhost','root','','naftal2');

if(isset($_POST['submit'])){
  $username =$_POST['username'];
  $password=$_POST['password'];
  $query =$conn->query("SELECT * FROM utilisateur WHERE username='".$username."'");
  
  $num= mysqli_num_rows($query);
  if($num==1){
    header("location:list.php?user=".$username);
   exit();
  }
  else{
    echo "<div class='alert alert-success' ><p> information eronner  !</p>";
   
  

    
    exit();  
  }
}
?>



  <body>
<form class="login-box" method="POST" action="authentification.php">
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
