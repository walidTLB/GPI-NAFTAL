
<!DOCTYPE html>
<html>
<head>
	<title>demmande</title>
	<link rel="stylesheet" type="text/css" href="css/fiche_demande_inter.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  
  <?php
  if(isset($_POST['submit']))
  {

  $numserie = $_POST['numserie'];
  if($numserie)
    {
    $conn =new mysqli('localhost','root','','naftal2');
    $query=("SELECT * FROM `serie` WHERE (`serie`.`num_ser` = '".$numserie."') ;");
    $res= $conn->query( $query);

     
  $num= mysqli_num_rows($res);
  if($num==1){
    
      header("location:fiche_demen_inter.php");
    }
    else 
    {
      echo "serie not found";

    }

    }
  }
 
  ?>





   <form method="post" action = "">
  <div class="box_dem ">
    <div class= "form_groupe">
  	<h2>Lieu :</h2>
  	<label for="site">site :</label>
  	<input type="text" name="site" placeholder="votre site ..." required="required"><br>
  	<label for="bureau">bureau</label>
  	<input type="text" name="bureau" placeholder="votre bureau..."> <br>
  	<label for="matriel">num serie matriel :</label>
  	<input type="text" name="numserie" placeholder="num serie matriel"><br>
  	<label for="probleme">probleme</label>
  	<select name="probleme" id="probleme" >
  		<option value= "probleme soft ">probleme soft</option>
  		<option value= "probleme hard">probleme hard</option>
  		<option value= "probleme reseau">probleme reseau</option>
  	</select><br>
  	<label for="dec_pro"> detail du probleme rencontre :
  	</label><br><br>
  	<textarea rows="10" cols="50" name="dec_pro" placeholder="espace a saisir"></textarea>

    
        <button type="" class="btn btn-danger" name= "annuler">annuler</button>
        <button type="submit" class="btn btn-success" name= "submit">valider</button>

      
    </div>

  	
  </div>
</form>
</body>
</html>