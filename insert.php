<!doctype html>
<html lang="en">
  <head>
    <title>Message</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="img\log.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
  <nav>
                <div class="logo"><img src="img/log.jpg" alt="logo du CHU"></div>
        
             <ul>
             <li> <a href="choixdemandeur.php" class="btn btn-info btn-lg">Retour</a></li>
                
            </ul>
            </nav>
            <div class="text-center">


<?php
             
    
 
/*
$server="localhost";
$username="root";
$password="";
$dbname="gestiondemandedestage";

*/
require'connect_db.php';

 //$conn= mysqli_connect($server,$username,$password,$dbname); 
 if(isset($_POST['submit'])){
  /*
   if(!empty($_POST['categorie']) && !empty($_POST['nom']) && !empty($_POST['prenom']) &&
   !empty($_POST['specialite']) && !empty($_POST['typestage']) && 
   !empty($_POST['email']) && !empty($_POST['tel']) ) {
       */

    
    
    /*
    $query ="insert into demandeur(categorie,nom,prenom,specialite,typestage,email,tel
    ) values ('$categorie','$nom','$prenom','$specialite','$typestage',
    '$email','$tel')";
    //xdfcyjguvkilhjmkjlhguyftdrtytfguhij
          */

    if( !empty($_FILES) && !empty($_POST['categorie']) && !empty($_POST['nom']) && !empty($_POST['prenom']) &&
    !empty($_POST['specialite']) && !empty($_POST['typestage']) && 
    !empty($_POST['email']) && !empty($_POST['tel'])){



      $categorie= $_POST['categorie'];
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $specialite= $_POST['specialite'];
    $typestage= $_POST['typestage'];
    $email= $_POST['email'];
    $tel= $_POST['tel'];
     $etat="pasDeReponse";
     $cause="pasDeReponse";



      $file_name= $_FILES['documents']['name'];
      $file_extension =strrchr($file_name,".");
      $extensions_autorisees= array('.pdf','.PDF');
      $file_tmp_name= $_FILES['documents']['tmp_name'];
      $file_dest='files/'.$file_name; 
      if (in_array($file_extension,$extensions_autorisees)){
          if(move_uploaded_file($file_tmp_name,$file_dest)){
               $req=$db->prepare('Insert INTO demandeur(categorie,nom,prenom,specialite,typestage,email,tel,name,file_url,etat,cause )
               values (?,?,?,?,?,?,?,?,?,?,?)');
               $req->execute(array($categorie,$nom,$prenom,$specialite,$typestage,$email,$tel,$file_name,$file_dest,$etat,$cause));
               ?>

               <h1>Le formulaire a été remplit avec succées<h1>
               <?php
          }
          else{
            ?>
             
              <?php
          }
      }
      else{
        ?>
          <h1>seul les fichiers pdf sont autorisés<h1>
          <?php
      }
    }
  }

    
      
     
   
 
               
               
               
             
               
 
?>
   <style>
/* css de la barre de navigation */
nav{
    display: flex;
    height: 125px;
    width: 100%;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px 0 100px;
  }

  nav ul{
    display: flex;
    flex-wrap: wrap;
    list-style: none;
  }
  nav ul li{
    margin: 0 5px;
  }
  nav ul li a{
    color: #6d6262;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
  }
  nav ul li a.active,
  nav ul li a:hover{
    color: rgb(250, 243, 243);
    background: rgb(73, 70, 72);
  }
             </style>   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
