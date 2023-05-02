<?php
require('connect_db.php');
$pdoStat =$db->prepare('Select * from demandeur where id = :num');
$pdoStat->bindValue(':num',$_GET['numCorrecteur'],PDO::PARAM_INT);
//execution de la requete
$executeIsOk = $pdoStat->execute();

//recuperer le demandeur
 $demandeur= $pdoStat->fetch();
 //var_dump($demandeur);
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="utf-8"> 
     <link rel="stylesheet" href="css/bootstrap.css"  >
     <link rel="icon" href="img\log.jpg">
     <script src="js/bootstrap.js"></script>
     <title>Réctification formulaire</title>
  
     <div class="navbar">
         <img  class="logo" src="img/log.jpg" alt="logo du chu" width="80" height="60">
         <a href=""><button type="button" class="btn btn-primary">Retour</button></a>
         
     </div>
 
 </head>
 <body class="border">
 
 <div class="c1">
             <form action="retaperFormulaireInsert.php" class="  mx-5 p-5  " method="POST" enctype="multipart/form-data"  >
             <input type="hidden" name="numCorrecteur" value="<?= $demandeur['id'] ?>"> 
         <div class="mb-3 mt-4">
             <label for="categorie">Catégorie <span class="etoile">*</span></label>
             <select class="mb-3 form-select form-control" id="categorie" aria-label="Default select example" name="categorie" value="<?= 
                        $demandeur['categorie']?>">
                 
                 <option value="ayant un diplome">ayant un diplome </option>
                 <option value="etudiant">Etudiant dans un etablissement superieur</option>
                 
 
               </select>
         </div>
         <div class="mb-3">
             <label for="nom" class="form-label">Nom <span class="etoile">*</span></label>
             <input type="text" class="form-control " id="nom"  name="nom" value="<?= 
                        $demandeur['nom']?>" required>
         </div>
         <div class="mb-3">
             <label for="prenom" class="form-label">Prenom <span class="etoile">*</span></label>
             <input type="text" class="form-control " id="prenom"  name="prenom"
             value="<?=  $demandeur['prenom']?>" required>
         </div>
 
 
         <div class="mb-3 mt-4">
             <label for="specialite">Spécialité(Service ou vous voulez effectuer votre stage)<span class="etoile">*</span></label>
             <select class="mb-3 form-select form-control" id="specialite" aria-label="Default select example" name="specialite" 
             value="<?=  $demandeur['specialite']?>">
                 
                 <option value="Service Informatique">Service Informatique</option>
                 <option value="service logistique">service logistique</option>
                 
                 
                 <option value="Autre">Autre</option>
 
               </select>
         </div>
 
 
         <div class="mb-3 mt-4">
             <label for="typestage">Type De stage<span class="etoile">*</span> </label>
             <select class="mb-3 form-select form-control " id="typestage" aria-label="Default select example" name="typestage" value="<?= 
                        $demandeur['typestage']?>">
                
                 <option value="stage d initiation">stage d'initiation</option>
                 <option value="stage d aplication">stage d'aplication</option>
                 <option value="stage de projet de fin d étude">stage de projet de fin d'étude</option>
                 
               </select>
         </div>
         <div class="mb-3">
             <label for="email" class="form-label">E-mail <span class="etoile">*</span></label>
             <input type="email" class="form-control " id="email"  name="email" value="<?= 
                        $demandeur['email']?>"required>
         </div>
         <div class="mb-3">
             <label for="tel" class="form-label">téléphone <span class="etoile">*</span></label>
             <input type="tel"  pattern="[0-9]{10}" class="form-control " id="tel"  name="tel"  value="<?= 
                        $demandeur['tel']?>"required>
         </div>
         <div class="mb-3">
             <label for="documents" class="form-label">documents <span class="etoile">*</span></label>
             <input type="file" class="form-control " id="documents"  name="documents" value="<?= 
                        $demandeur['documents']?>" required>
         </div>
          <!--
         <div class="mb-3">
             <label for="cv" class="form-label">Cv <span class="etoile">*</span></label>
             <input type="file" class="form-control " id="cv"  name="cv" required>
         </div>
         <div class="mb-3">
             <label for="cartenational" class="form-label">Carte National (copie) <span class="etoile">*</span></label>
             <input type="file" class="form-control " id="cartenational"  name="cartenational" required>
         </div>
         <div class="mb-3">
             <label for="assurance" class="form-label">Assurance (copie) <span class="etoile">*</span></label>
             <input type="file" class="form-control " id="assurance"  name="assurance" required>
         </div>
         <div class="mb-3">
             <label for="attestation" class="form-label">Attestation de poursuite d'etude ou copie du diplome <span class="etoile">*</span></label>
             <input type="file" class="form-control " id="attestation"  name="attestation" required>
         </div>
         <div class="mb-3">
             <label for="photo" class="form-label">Photo<span class="etoile">*</span></label>
             <input type="file" class="form-control " id="photo"  name="photo" required>
         </div>
 -->
 
         
         <div class="p-3 md-5">
             <button class="btn btn-secondary" type="submit" name="submit" > <b>Envoyer</b> </button>
         </div>
 
         
         
     </form>
     
     
 
 
 </body>
 
 <style>
     
     
     
   
   /* Style the navigation bar links */
   .navbar a {
     
     display: block;
     color: white;
     text-align: center;
     padding: 15px 25px; 
     text-decoration: none;
     
     
   
   }
   .a1 a{
       margin-right: 0px;
       margin-left: 150px;
   }
   .a2 a{
       margin-left: 0px;
   }
   .logo{
       margin-right: 310px;
       margin-top:0px;
      
   }
 
 
   /* form.border{
       align-self:center;
       margin-top: 60px;
       margin-left: 10vh;
       margin-right: 10vh;
       padding: 30px 50px 30px 70px;
       
      width: 65%;
       height: 50%;  
       
   }
    */
  
   
   .navbar a:hover {
     background-color: #ddd;
     color: black;
   }
   
   /* Active/current link */
   .navbar a.active {
     background-color: #666;
     color: white;
     
   }
 
     .btn{
     border-color: rgb(234, 234, 252);
     color: rgb(252, 252, 252);
     background-color: rgb(22, 23, 24);
     
 }
 body{
         align-self: center;
         background-image: url('');
         background-clip: inherit;
         /* background-color: rgb(108, 135, 209); */
         background-repeat: no-repeat;
         background-size:cover;
         
 }
 .etoile{
     color: red;
 }
 label{
     font-weight: 700;
 }
 .btn-primary{
     margin-right:  6px;
 }
 
 
 </style>
 
 
 
 </html>
 
     
 
  