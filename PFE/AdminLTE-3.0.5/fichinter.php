
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


       
   <!DOCTYPE html>
<html>
<head>
  <title>demande d'intervention </title>
  
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
.lieu input{
  border:none;
  outline: none;
}
.matriel input{
  border:none;
  outline: none;
}
.probleme input{
  border:none;
  outline: none;
}
ul{
  margin-left: 25px;
}
.detail_probleme textarea {
  margin-left: 25px;
}
.footer{
      text-align: center;


}
.visa {
  margin-left: 70px;
}


  </style>
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
table{
border-collapse: collapse;
}
th, td{
boder: 1px solide black;
padding:10px;
}

      .vertical-line{
        border-left: 2px solid #000;
        display: inline-block;
        height: 130px;
        margin: 0 20px;
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
<body id="target">
<div id="t1">

  <div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      
      <form>
      <br><br><br>
        <div class="modal-header">            
            <table width="100%" border="1" cellspacing="1" cellpadding="5">
                  <tr>
                    <td rowspan="3" align="center">
                      <img src="bg.png">
                      <br align="center">
                      <i align="center">BRANCHE</i>
                      <BR>
                      <i align="center">COMMERCIALISATION<i>
                    </td>
                    <td rowspan="3" align="center"><b>demande d'intervention<br align="center"></b></td>
                    <td align="center">FE FROM SIF 05 V1</td>
                    <tr>
                      <td align="center">DATE D'APPLICATION:
                      <br>
                      <input id="Aujourdhui" type="date" name="date" value="" readonly>
        <script>
           document.getElementById("Aujourdhui").valueAsDate = new Date();
        </script>
                      <!-- <input type="date" placeholder="date de naissance" required> -->
                    
                      </td>
                    </tr>
                    <tr>
                      <td align="center">PAGE 1 SUR 1</td>
                    </tr>
                      
                  </tr>
                  </table>
                              
        </div>
<div class="fiche_d" >
    <div class="header">
    
    <p>a deposer au niveau du secretariat du departement informatique <br> ou faxer au 021 82 07 32</p>
    </div>
 
    <div class="demandeur">
      <h4>demandeur</h4>
       <ul>
        <li><label for="nom">nom :</label> <input type="text" name="nom"><?php echo $_POST['nom']; ?></li>
        <li><label for="prenom">prenom :</label> <input type="text" name="prenom"><?php echo $_POST['prenom']; ?></li>
        <li><label for="fonction">fonction :</label> <input type="text" name="structure"><?php echo $_POST['structure']; ?></li>
        <li><label for="structure">structure :</label> <input type="text" name="fonction"><?php echo $_POST['fonction'];?></li>
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
        <textarea rows="10" cols="100"  name="descri"> <?php echo $_POST['dec_pro']; ?> </textarea>

      
      </div>
        <div class="visa">
                 <h4> visa de la structure emettrice </h4> <br> <br><br>
       </div>
           <div class="footer">
             <h4> merci de renseigner 1 fiche par demandeur</h4>
           </div>
   </div>
   </div>
   <div class="btn_imp">
  <button tybe="submit" onclick="printContent('t1')" class="btn btn_success">imprimer</button>
  <button type="submit" class="btn btn-primary" name= "submit">envoyer</button>
  </div>
</div>

</body>
</html>