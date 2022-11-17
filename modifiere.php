 
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
          $num_eq=$_GET['edit'];
          $update=true;
            
            $conn = new PDO('mysql:host=localhost;dbname=naftal2','root','');


            $query = $conn->prepare("SELECT * FROM `equipement` WHERE (`equipement`.`num_eq` = '".$num_eq."');");
              $query->execute();
                $row= $query->fetch();

    }
        
        
      ?>
  



    <form method="post" action="modifierbdd.php?edit=<?php echo $num_eq; ?>">

        <div class = "from-groupe">
              <label>numero equipement:
           <input type="text"  name="num_eq" value = <?php echo $row['num_eq'];?>>
        </label>
        </div>
        <div class = "from-groupe">
              <label>description:
           <input type="text"  name="num_utili" value = <?php echo $row['des_eq'];?>>
        </label>
        </div>
       <br>
       <div class = "from-groupe">
        
         <label>:type equipement:
           <input type="text" name="username"  value = <?php echo $row['num_tyequi'] ;?> >
         </label>
    </div>
    <br>
    <div class = "from-groupe">
      <label>marque equipement:
       <input class="text" name="nom"  value = <?php echo $row['num_mar'];?> >
      </label>
      <br>
       <div class = "from-groupe">
              <label>numero de serie:
           <input type="text"  name="prenom" value = <?php echo $row['num_serie'];?>>
        </label>
    </div>
       <br>
   
<?php if($update == 'true'):?>
   <button type="submit" class="btn btn-info" name = "update" > mise a jour</button>

   <?php endif ?>
</form>
</div>
</body>
</html>