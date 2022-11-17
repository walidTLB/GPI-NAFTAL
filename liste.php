<?php




$conn = new mysqli('localhost','root','','naftal2');

$query =$conn->query(" SELECT * FROM `equipment` ");



?>



<html lang="fr">
 <title>liste_equipement</title>

  <head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>



<body>




    <a type="button" class="btn btn-secondary btn-lg btn-block" class="rounded-pill" href="http://localhost/pfe/ajouter.php">ajouter un equipement</a>




 
  
<form action = "" method="post">
	<input type="hidden" name = "num_utili" value = "<?php echo $num_eq;?>" > 
	<div class ="container">
		<div class ="row justify-content-center">
<table class="table" >
	 <thead  class="p-3 mb-2 bg-dark text-white">
    <tr>
      <th >numero equipement</th>
      <th >description</th>
      <th >type d'equipement</th>
      <th >numero de marque</th>
      <th>numero de serie</th>
      
      
    </tr>
  </thead>
  
  <?php 
    while ($row = $query->fetch_assoc()): 
  ?>




  
    <tr>
      <td><?php echo $row['num_eq'] ;?> </td>
      <td><?php echo $row['des_eq'] ;?> </td>
      <td><?php echo $row['num_tyequi'] ;?> </td>
      <td><?php echo $row['num_mar'] ;?> </td>
      <td><?php echo $row['num_serie'] ;?> </td>
      
      <td> 
      	   <a href="http://localhost/pfe/modifiere.php?edit=<?php echo $row['num_eq']; ?>" class = "btn btn-info">modifier</a>

      	   <a href="http://localhost/pfe/list.php?delete=<?php echo $row['num_eq']; ?>" class = "btn btn-danger">delete</a>

    </tr>
<?php endwhile;?>
  
</table>
</div>
</div>

</form>



</body>
</html>


<?php 

if(isset($_GET['delete']))
      {
        $conn =new mysqli('localhost','root','','naftal2');
        $num_eq=$_GET['delete'];
        $conn->query("DELETE FROM `equipement` WHERE `equipement`.`num_eq` = $num_eq")or die($conn->error());
        header("location:liste.php");
      }

      ?>