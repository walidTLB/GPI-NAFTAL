<?php




$conn = new mysqli('localhost','root','','naftal2');

$query =$conn->query("SELECT * FROM `utilisateur`");



?>



<html lang="en">
 <title>profils_list</title>

  <head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>



<body>




    <a type="button" class="btn btn-secondary btn-lg btn-block" class="rounded-pill" href="http://localhost/pfe/ajouter.php">ajouter un profil</a>




 
  
<form action = "" method="post">
	<input type="hidden" name = "num_utili" value = "<?php echo $num_utili;?>" > 
	<div class ="container">
		<div class ="row justify-content-center">
<table class="table" >
	 <thead  class="p-3 mb-2 bg-dark text-white">
    <tr>
      <th >numero utilisateur</th>
      <th >username</th>
      <th >nom</th>
      <th >prenom</th>
      <th>mot de passe</th>
      <th>code structure</th>
      <th>fonction</th>
      <th>operation</th>
      
    </tr>
  </thead>
  
  <?php 
    while ($row = $query->fetch_assoc()): 
  ?>




  
    <tr>
      <td><?php echo $row['num_utili'] ;?> </td>
      <td><?php echo $row['username'] ;?> </td>
      <td><?php echo $row['nom'] ;?> </td>
      <td><?php echo $row['prenom'] ;?> </td>
      <td><?php echo $row['mp'] ;?> </td>
      <td><?php echo $row['code_str'] ;?> </td>
      <td><?php echo $row['fonction'] ;?> </td>
      <td> 
      	   <a href="http://localhost/pfe/modifier.php?edit=<?php echo $row['num_utili']; ?>" class = "btn btn-info">modifier</a>

      	   <a href="http://localhost/pfe/list.php?delete=<?php echo $row['num_utili']; ?>" class = "btn btn-danger">delete</a>
      </td>

    </tr>
<?php endwhile;?>
  
</table>
<a href="http://localhost/pfe/demande.php?user=<?php echo $_GET['username']; ?>" class = "btn btn-info">demande</a>
</div>
</div>

</form>



</body>
</html>


<?php 

if(isset($_GET['delete']))
      {
        $conn =new mysqli('localhost','root','','naftal2');
        $num_utili=$_GET['delete'];
        $conn->query("DELETE FROM `utilisateur` WHERE `utilisateur`.`num_utili` = $num_utili");
        header("location:list.php");
      }

      ?>
      

