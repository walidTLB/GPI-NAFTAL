<!DOCTYPE html>
<html>
<head>
	<title>fiche demmand d'intervention </title>
	<link rel="stylesheet" type="text/css" href="css/fiche_demen_interfinal.css">
    <link rel="stylesheet" type="text/php" href="demmande.php">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

  <?php 
if(isset($_POST['envoyer'])){
    $to = "inimmail1@gmail.com"; // this is your Email address
    $from = "brahimmoudoulia@gmail.com"; // this is the sender's Email address
    $first_name = $_POST['nom'];
    $last_name = $_POST['prenom'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " structure:" . $_POST['structure']."\n\n" ." fonction:". $_POST['fonction']."\n\n" ."\n\n" ." site:" . $_POST['site']."\n\n" ." bureau:". $_POST['bureau']."\n\n" . "numero de serie materiel:" . $_POST['matriel']."\n\n" . " probleme:" . $_POST['prob'] . "\n\n" . " description de probleme:". $_POST['descri']. "\n\n" . $_POST[''];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . "\n\n" ." site:" . $_POST['site']."\n\n" ." bureau:". $_POST['bureau']."\n\n" . "numero de serie materiel:" . $_POST['matriel']."\n\n" . " probleme:" . $_POST['prob'] . "\n\n" . " description de probleme:". $_POST['descri']. "\n\n" . $_POST['nom'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>



<form class="fiche_d"¨ method="post">
    <div class="header">
	  <h3>fiche de demande d'intervention</h3>
	  <p>a deposer au niveau du secretariat du departement informatique <br> ou faxer au 021 82 07 32</p>
    </div>
    <div class="d_dem"> 
      
      <ul>
      	<li><label>date de la demande:</label>
      <input id="Aujourdhui" type="date" name="date" value="" readonly>
        <script>
           document.getElementById("Aujourdhui").valueAsDate = new Date();
        </script></li>
      </ul>

    </div>
    <div class="demandeur" >
    	<h4>demandeur</h4>

    	 <ul>
    	 	<li><label for="nom">nom :</label> <input type="text" name="nom" value=></li>
    	 	<li><label for="prenom">prenom :</label> <input type="text" name="prenom" value="<?php echo $_GET['user']; ?>"></li>
    	 	<li><label for="fonction">fonction :</label> <input type="text" name="fonction" value=></li>
    	 	<li><label for="structure">structure :</label> <input type="text" name="structure" value=></li>
    	 </ul>

    </div>
    <div class="lieu">
    	<h4>Lieu</h4>
    	<ul>
    		<li><label for="site">site:</label><input type="text" name="site" ><?php echo $_POST['site']; ?></li>
    		<li><label for="site">bureau:</label><input type="text" name="bureau" ><?php echo $_POST['bureau']; ?></li>

    	</ul>
    	
    </div>
    <div class="matriel">
    	<h4>matriel</h4>
    	<ul>
    		<li><label> numero serie de matriel:</label>
    	<input type="text" name="matriel"><?php echo $_POST['numserie']; ?></li>
    	</ul>
    </div>
    <div class="probleme">
    	<h4>probleme:</h4>
    	<ul>
    		<li><label>probleme concerne:</label>
    	<input type="text" name="prob"> <?php echo $_POST['probleme'] ;?></li>
    	</ul>
    	
    </div>
    <div class="detail_probleme">
    	<h4>detail du probleme rencontre</h4>
    	<textarea rows="10" cols="150"  name="descri"value= <?php echo $_POST['dec_pro'] ?>> <?php echo $_POST['dec_pro']; ?> </textarea>
    	
    </div>
    <div class="visa">
    	<h4> visa de la structure emettrice </h4> <br> <br><br>
    </div>
    <div class="footer">
    	<h4> merci de renseigner 1 fiche par demandeur</h4>
    </div>
    <button type="submit" class="btn btn-primary" name= "envoyer">envoyer</button>
</form>

</body>
</html>