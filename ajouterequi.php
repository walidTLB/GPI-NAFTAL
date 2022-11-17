 
 <!DOCTYPE html>
<html>
<title>ajouter equipement</title>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
</head>
<body>
 <div class="p-3 mb-2 bg-dark text-white" class = "from-groupe">*AJOUTER UN EQUIPEMENT*</div>
<br>
  <div class = "row justify-content-center">


  <?php
      
      if(isset($_POST['submit']))
       { 
          $num_equipement=$_POST['num_equipement'];
          $description = $_POST['description'];
          $t_equipement = $_POST['t_equipement'];
          $marque = $_POST['marque'];
          $num_serie = $_POST['num_serie'];
          
          
          
    
          if(  $num_equipement&& $description && $t_equipement && $marque && $num_serie   )
          {
             $conn =new mysqli('localhost','root','','naftal2');
            $query =("INSERT INTO `equipment`(`num_eq`,`des_eq`,`num_tyequi`,`num_mar`,`num_serie`) VALUES ('$num_equipement','$description','$t_equipement','$marque','$num_serie');");
            $res= $conn->query( $query);

      
         
       
          }
          else
          {
            echo"Il faut remplire tous les champs";
          }

        }


      ?>


<form method="post" action="fiche_demen_inter.php">
    <div class = "from-groupe">
        <label>numero equipement:
           <input type="text"  name="num_equipement" placeholder="entrez le numero equipement" >
        </label>
    </div>
    <div class = "from-groupe">
        <label>description:
           <input type="text"  name="description" placeholder="entrez la description " >
        </label>
    </div>
       <br>
       <div class = "from-groupe">
         <label>type equipement:
           <input type="text" name="t_equipement" placeholder="Entrez le numero type equipement" >
         </label>
    </div>
    <br>
    <div class = "from-groupe">
      <label>marque:
       <input  class="text" name="marque"  placeholder="entrez le numero de marque">
      </label>
      <br>
       <label>numero de serie:
           <input type="text"  name="num_serie" placeholder="entrez le numero de serie " >
        </label>
    </div>
       <br>

   <button type="submit" class="btn btn-primary" name = "submit" > ajouter l'equipement</button>
</form>
</div>
</body>
</html>