<?php
require('connect_db.php');
$pdoStat =$db->prepare('Select * from demandeur where id = :num');
$pdoStat->bindValue(':num',$_GET['numDemandeur'],PDO::PARAM_INT);
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
    <script src="js/bootstrap.js"></script>
    <title>réponse administrateur</title>
    <link rel="icon" href="img\log.jpg">
 
    <div class="navbar">
        <img  class="logo" src="img/log.jpg" alt="logo du chu" width="80" height="60">
        <a href=""><button type="button" class="btn btn-primary">retour</button></a>
        
    </div>

</head>
<body class="border">

    <div class="c1">
            <form action="repondre.php" class="  mx-5 p-5  " method="POST" enctype="multipart/form-data"  >
       <input type="hidden" name="numDemandeur" value="<?= $demandeur['id'] ?>"> 
        <div class="mb-3 mt-4">
            <label for="etat">etat <span class="etoile">*</span></label>
            <select class="mb-3 form-select form-control" id="etat" aria-label="Default select example" name="etat">
                
                <option value="accepter">accepter </option>
                <option value="refuser">refuser</option>
                

              </select>
        </div>
        
        <div class="mb-3">
            <label for="cause" class="form-label">cause <span class="etoile">*</span></label>
            <input type="cause" class="form-control " id="cause"  name="cause" required>
        </div>
        
        
        <div class="p-3 md-5">
            <button class="btn btn-secondary" type="submit" name="confirmer" > <b>Confirmer</b> </button>
        </div>

        
        
    </form>
    </div>
    
    


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

    

 