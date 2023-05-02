<?php
 require'connect_db.php';
 
            
         
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Espace reponse</title>
    <!-- Required meta tags -->
    <link rel="icon" href="img\log.jpg">
    <meta charset="utf-8">
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


                <h1><?php  $req=$db->query('select id,nom,prenom,email,etat,cause from demandeur');
             while($data=$req->fetch() ){ 
           
             if (($data["nom"]==$_POST['nom']) and ($data["prenom"]==$_POST['prenom']) and ($data["email"]==$_POST['email'])){
                echo  'M./Mme' . '  '. $data["nom"]. '  '.$data["prenom"]; }}?></h1>
    <br/>
            
            <table class="table">
        <thead>
            <th>id</th>
           
            <th>etat</th>
            
            <th>modifier</th>
            
        
        </thead>
        <tbody>
            <?php
             $req=$db->query('select id,nom,prenom,email,etat,cause from demandeur');
             while($data=$req->fetch() ){ 
             
             if (($data["nom"]==$_POST['nom']) and ($data["prenom"]==$_POST['prenom']) and ($data["email"]==$_POST['email'])){
             ?>
                
                <tr>
            <td><?php echo  $data["id"]; ?></td>
            <td><?php echo  $data["etat"]; ?></td> 
            
            <td>  <a href="retaperFormulaire.php?numCorrecteur=<?= $data['id']?>" class="btn btn-info ">corrigerVotreErreur</a>
              

            </td> 
            </tbody>
    </table>
    <?php 
    if ($data["etat"]=="accepter"){
      ?>
    <h5>veuillez venir a CHU OUJDA  pour prendre votre note de stage et déposer les originaux</h5>
    <?php
  }
  elseif($data["etat"]=="refuser"){
?>
<h5>la cause de votre refus est : <?php echo  $data["cause"]; ?></h5>
 
<?php
  }
  elseif($data["etat"]=="pasDeReponse"){
    ?>
    <h5>votre demande n'a pas encore été traité ,veuillez revenir ultérieurement </h5>
<?php
  }
  else{
    ?>
    <h5>vous n'avez pas postulé un stage chez nous </h5>
<?php

  }
      ?>    
          </tr> 
            <?php 
             }
             else{
             
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
