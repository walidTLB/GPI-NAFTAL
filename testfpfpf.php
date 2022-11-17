
<!DOCTYPE html>
<html>
<head>
	<title>demmande</title>
	<link rel="stylesheet" type="text/css" href="css/fiche_demande_inter.css">
</head>
<body>
  <?php
  require('fpdf182/fpdf.php');
  $title='user repport ';
  $pdf=new FPDF();
  $pdf->AddPage();
  $pdf->SetTitle($title);
  $pdf->Cell(10,10,$title,1,1,'C');
  $pdf->Output();

 ?>

<form method="POST" action="">
  <div class="box_dem">
  	<h2>Lieu :</h2>
  	<label for="site">site :</label>
  	<input type="text" name="site" placeholder="votre site ..."><br>
  	<label for="bureau">bureau</label>
  	<input type="text" name="bureau" placeholder="votre bureau..."> <br>
  	<label for="matriel">num serie matriel :</label>
  	<input type="text" name="matriel" placeholder="num serie matriel"><br>
  	<label for="probleme">probleme</label>
  	<select name="probleme" disabled="disabled">
  		<option ></option>
  		<option>probleme soft</option>
  		<option>probleme hard</option>
  		<option>probleme reseau</option>
  	</select><br>
  	<label for="dec_pro"> detail du probleme rencontre :
  	</label><br><br>
  	<textarea rows="10" cols="50" name="dec_pro" placeholder="description de probleme .....">

  		
  	</textarea>
     <input type="submit" value="valider">  	
  </div>
  </form>
</body>
</html>