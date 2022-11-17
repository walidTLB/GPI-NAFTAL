 
 <!DOCTYPE html>
<html>
<title>ajouter employer</title>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
</head>
<body>
 <div class="p-3 mb-2 bg-dark text-white" class = "from-groupe">*AJOUTER UN EMPLOYER*</div>
<br>
  <div class = "row justify-content-center">
<form method="post" action="">
  <?php
      
      if(isset($_POST['submit']))
       { 
          $num_utili=$_POST['num_utili'];
          $username = $_POST['username'];
          $nom = $_POST['nom'];
          $prenom = $_POST['prenom'];
          $mp = $_POST['mp'];
          $code_str = $_POST['code_str'];
          $fonction = $_POST['fonction'];
          

    
          if($num_utili && $username && $nom && $prenom &&  $mp && $code_str &&  $fonction  )
          {
            $conn =new mysqli('localhost','root','','naftal2');
            $query=("INSERT INTO `utilisateur` (`num_utili`, `username`, `nom`, `prenom`, `mp`, `code_str`, `fonction`) VALUES ('$num_utili', '$username', '$nom', '$prenom', '$mp' , '$code_str', '$fonction');");
                         $res= $conn->query( $query);
                         header("location:list.php");
          }

          else
          {echo"Il faut remplire tous les champs";}

        }


      ?>



    <div class = "from-groupe">
        <label>numero utilisateur:
           <input type="text"  name="num_utili" placeholder="entrez le numero utilisateur" >
        </label>
    </div>
    <div class = "from-groupe">
        <label>username:
           <input type="text"  name="username" placeholder="entrez le username" >
        </label>
    </div>
       <br>
       <div class = "from-groupe">
         <label>nom:
           <input type="text" name="nom" placeholder="Entrez le nom" >
         </label>
    </div>
    <br>
    <div class = "from-groupe">
      <label>prenom:
       <input  class="text" name="prenom"  placeholder="entrez le prenom ">
      </label>
      <br>
       <label>mot de passe:
           <input type="password"  name="mp" placeholder="entrez le mot de passe " >
        </label>
    </div>
       <br>
       <div class = "from-groupe">
         <label>code structure:
           <input type="text" name="code_str" placeholder="Entrez le code structure" >
         </label>
    </div>
    <br>
    <div class = "from-groupe">
      <label>fonction:
       <input class="text" name="fonction"  placeholder="entrez la fonction">
      </label>
      <br>

   <button type="submit" class="btn btn-primary" name = "submit" > ajouter l'employer</button>
</form>
</div>
</body>
</html>