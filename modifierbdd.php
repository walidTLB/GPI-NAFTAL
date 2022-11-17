 <?php


$conn = new mysqli('localhost','root','','naftal2');
          $num_utili=$_GET['edit'];
          $update=true;
 if(isset($_POST['update']))
       { 
          

    
         
          
            
            $query ="UPDATE `utilisateur` SET (username=' ".$_POST['username']." ', nom=' ".$_POST['nom']." ' prenom=' ".$_POST['prenom']." ', mp=' ".$_POST['mp']." ', code_str=' ".$_POST['code_str']." ', fonction=' ".$_POST['fonction']." ' WHERE `num_utili`=' ".$num_utili." ' );";
            $res= $conn->query($query);
       
          }
   header("location:list.php");
  ?>