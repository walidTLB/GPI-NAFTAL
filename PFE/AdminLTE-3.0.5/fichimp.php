<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>fiche_inventaie</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #1a1f29;
	background: #ebeef2;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #384358;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #ebeef2;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #ebeef2;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #ebeef2;
}
table.table-striped.table-hover tbody tr:hover {
	background: #ebeef2;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #ebeef2;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #ebeef2;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 700 px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 50px     30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background:#ebeef2;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<style type="text/css">
	body{
	background-size: cover;
	font-family: Arial;
}
.fiche_d{
	margin:0px 30px 0px 50px;

}
.header h3{
	border-style: groove;
	text-align: center;
	margin-bottom: 0;
}
.header p{
		text-align: center;
 margin-top: 0;
}
.d_dem input{
	border:none;
	outline: none;

}
.demandeur input{
	border:none;
	outline: none;
}

ul{
	margin-left: 25px;
}


</style>

   <script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>

</head>
<body>
<div class="container-xl" id='t1"'>
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
					<img src="bg.png">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>FICHE D'INVENTAIRE</b>
					</div>
					
				</div>
			</div>
			
	<!-- <div class="modal-dialog"> -->
		<!-- <div class="modal-content"> -->
			<div class="demandeur">
    	<h4>Responsable de fiche:</h4>
    	 <ul>
    	 	<li><label for="nom">MLE:</label> <input type="text" name="id"><?php echo $_POST['MLE']; ?></li>
    	 	<li><label for="nom">nom</label> <input type="text" name="nom"><?php echo $_POST['nom']; ?></li>
    	 	<li><label for="prenom">prenom :</label> <input type="text" name="prenom"><?php echo $_POST['prenom']?></li>
    	 	<li><label for="structure">structure :</label> <input type="text" name="structure"><?php echo $_POST['structure']; ?></li>
    	 </ul>

    </div>
			<form action="fichimp.php" method="post">
				<div class="modal-header">						
					<h4 class="modal-title"></h4>
					
				</div>
				
								<div class="modal-body">					
									<!-- <div class="form-group"> -->
									<table>
									<h4>Unité centrale</h4>
												<tr class="form">
												 <td height="20">
												<label>Num Serie:</label>
												</td>
												<td>
												<INPUT TYPE="text" NAME="Num_serie" SIZE="25" MAXLENGTH="25" class="form-control" required /> <?php echo $_POST['Num_serie']; ?> 
												 </td><th><th>
												<!-- </tr> -->
												<!-- <tr class="form"> -->
												 <td height="20">
												<label>Num-Int:</label>
												</td>
												<td>
												<INPUT TYPE="text" NAME="Num-Int" SIZE="25" MAXLENGTH="25" class="form-control" required /> <?php echo $_POST['num-Int']; ?>
												 </td>
												<!-- </tr> -->
												<!-- <tr class="form"> -->
												 <td height="20">
												<label>Marque:</label>
												</td>
												<td>
												<INPUT TYPE="text" NAME="Marque" SIZE="25" MAXLENGTH="25" class="form-control" required /> <?php echo $_POST['marque']; ?>
												 </td>
												</tr>
												<tr class="form">
												 <td height="20">
												<label>Model:</label>
												</td>
												<td>
												<INPUT TYPE="text" NAME="Model" SIZE="25" MAXLENGTH="25" class="form-control" required /> <?php echo $_POST['model']; ?>
												 </td><th><th>
												<!-- </tr> -->
												<!-- <tr class="form"> -->
												 <td height="20">
												<label>Type:</label>
												</td>
												<td>
												<INPUT TYPE="text" NAME="type" SIZE="25" MAXLENGTH="25" class="form-control" required /> <?php echo $_POST['type']; ?>
												 </td>
												<!-- </tr> -->
												<!-- <tr class="form"> -->
												 <td height="20">
												<label>Utilisateur:</label>
												</td>
												<td>
												<INPUT TYPE="text" NAME="Utilisateur" SIZE="25" MAXLENGTH="25" class="form-control" required /> <?php echo $_POST['utilisateur']; ?>
												 </td>
												</tr>
								<tr>
								 <td height="20">
								<label>Etat:</label>
								  </td>
								  <td>
								<select name="role" id="nom-utili" class="form-control" required /> 
												  <?php echo $_POST['role']; ?>
								</select> 
								 </td>
								</tr>
								</table>
								</div><hr>
								
								</div>
								<tr>
 <tr><td colspan=2><?php if(isset( $message)) echo $message; ?></td></tr>
</table>
</nav><br>
 <tr height="40">
 <td colspan="2">
    <input type="button" name="imp"  onclick="printContent('t1')" value="Imprimer la demande "  />
<br>

 </td>
 </tr>
								
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>