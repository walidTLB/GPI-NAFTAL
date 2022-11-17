<!DOCTYPE html>
<html>
<head>
	<title>fiche demmand d'intervention </title>
 
	<link rel="stylesheet" type="text/css" href="css/fiche_demen_interfinal.css">
</head>
<body >
	

<form method="POST" action="testi.php">
<div class="fiche_d" >
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
    <div class="demandeur">
    	<h4>demandeur</h4>
    	 <ul>
    	 	<li><label for="nom">nom :</label> <input type="text" name="nom"></li>
    	 	<li><label for="prenom">prenom :</label> <input type="text" name="prenom"></li>
    	 	<li><label for="fonction">fonction :</label> <input type="text" name="fonction"></li>
    	 	<li><label for="structure">structure :</label> <input type="text" name="structure"></li>
    	 </ul>

    </div>
    <div class="lieu">
    	<h4>Lieu</h4>
    	<ul>
    		<li><label for="site">site:</label><input type="text" name="site"></li>
    		<li><label for="site">bureau:</label><input type="text" name="bureau"></li>

    	</ul>
    	
    </div>
    <div class="matriel">
    	<h4>matriel</h4>
    	<ul>
    		<li><label> numero serie de matriel:</label>
    	<input type="text" name="matriel"></li>
    	</ul>
    </div>
    <div class="probleme">
    	<h4>probleme:</h4>
    	<ul>
    		<li><label>probleme concerne:</label>
    	<input type="text" name="prob"></li>
    	</ul>
    	
    </div>
    <div class="detail_probleme">
    	<h4>detail du probleme rencontre</h4>
    	<textarea rows="10" cols="150"></textarea>
    	
    </div>
    <div class="visa">
    	<h4> visa de la structure emettrice </h4> <br> <br><br>
    </div>
    <div class="footer">
    	<h4> merci de renseigner 1 fiche par demandeur</h4>
    </div>
   
   
	 <input type="submit" name = "btnPDF"class="btn btn-success" value="Envoyer">
</div>
</form>


</body>
</html>