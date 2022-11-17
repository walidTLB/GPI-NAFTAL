 
 <!DOCTYPE html>
<html>
<title>mise a jour</title>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
</head>
<body>
 <div class="p-3 mb-2 bg-dark text-white" class = "from-groupe">*mise a jour*</div>
<br>
  <div class = "row justify-content-center">

  
<?php
    

        if(isset($_GET['edit'])){
          $num_utili=$_GET['edit'];
          $update=true;
            
            $conn = new PDO('mysql:host=localhost;dbname=naftal2','root','');


            $query = $conn->prepare("SELECT * FROM `utilisateur` WHERE (`utilisateur`.`num_utili` = '".$num_utili."');");
              $query->execute();
                $row= $query->fetch();

      if(isset($_POST['update']))
          { 
            $username=$_POST['username'];
            $nom=$_POST['nom'];
           $prenom= $_POST['prenom'];
            $mp=$_POST['mp'];
            $code_str=$_POST['code_str'];
            $fonction=$_POST['fonction'];
          

    
         
          
            
            $quer =$conn->prepare("UPDATE `utilisateur` SET username='$username', nom='$nom' ,prenom='$prenom', mp='$mp', code_str='$code_str', fonction='$fonction' WHERE `num_utili`='$num_utili' ;");
            $quer->execute();
            
            header("location:list.php");
       
          }
   

    }
        
        
      ?>
  



    <form method="post" >

  
        <div class = "from-groupe">
              <label>numero utilisateur:
           <input type="text"  name="num_utili" value = <?php echo $row['num_utili'];?>>
        </label>
    </div>
       <br>
       <div class = "from-groupe">
         <label>nom utilisateur:
           <input type="text" name="username"  value = <?php echo $row['username'];?> >
         </label>
    </div>
    <br>
    <div class = "from-groupe">
      <label>nom:
       <input class="text" name="nom"  value = <?php echo $row['nom'];?> >
      </label>
      <br>
       <div class = "from-groupe">
              <label>prenom:
           <input type="text"  name="prenom" value = <?php echo $row['prenom'];?>>
        </label>
    </div>
       <br>
       <div class = "from-groupe">
         <label>mp:
           <input type="password" name="mp"  value = <?php echo $row['mp'];?>  >
         </label>
    </div>
    <br>
    <div class = "from-groupe">
      <label>code structure:
       <input class="text" name="code_str"  value = <?php echo $row['code_str'];?> >
      </label>
      <br>
    </div>
    <div class = "from-groupe">
      <label>fonction:
       <input class="text" name="fonction"  value = <?php echo $row['fonction'];?> >
      </label>
      <br>
    </div>
   
<?php if($update == 'true'):?>
   <button type="submit" class="btn btn-info" name = "update" > mise a jour</button>

   <?php endif ?>
</form>
</div>
</body>
</html>