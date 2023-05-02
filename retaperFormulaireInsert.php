<!doctype html>
<html lang="en">
  <head>
    <title>Message</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img\log.jpg">
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
              require'connect_db.php';
              $file_name= $_FILES['documents']['name'];
              $file_extension =strrchr($file_name,".");
              $extensions_autorisees= array('.pdf','.PDF');
              $file_tmp_name= $_FILES['documents']['tmp_name'];
              $file_dest='files/'.$file_name;
              $pdoStat =$db->prepare('update  demandeur set  categorie=:categorie,nom=:nom,prenom=:prenom,specialite=:specialite,
              typestage=:typestage,email=:email,tel=:tel,name=:name,file_url=:file_url,etat=:etat,cause=:cause
               where id=:num LIMIT 1');
               $pdoStat->bindValue(':num',$_POST['numCorrecteur'],PDO::PARAM_INT); 
               $pdoStat->bindValue(':categorie',$_POST['categorie'],PDO::PARAM_STR);
               $pdoStat->bindValue(':nom',$_POST['nom'],PDO::PARAM_STR);
               $pdoStat->bindValue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
               $pdoStat->bindValue(':specialite',$_POST['specialite'],PDO::PARAM_STR);
               $pdoStat->bindValue(':typestage',$_POST['typestage'],PDO::PARAM_STR);
               $pdoStat->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
               $pdoStat->bindValue(':tel',$_POST['tel'],PDO::PARAM_STR);
               $pdoStat->bindValue(':name', $file_name,PDO::PARAM_STR); 
               $pdoStat->bindValue(':file_url',   $file_dest,PDO::PARAM_STR); 
               $pdoStat->bindValue(':etat',"pasDeReponse",PDO::PARAM_STR); 
               $pdoStat->bindValue(':cause',"pasDeReponsse",PDO::PARAM_STR); 


    
      
      if (in_array($file_extension,$extensions_autorisees)){
        if(move_uploaded_file($file_tmp_name,$file_dest)){
            $executeIsOk = $pdoStat->execute();
            if($executeIsOk){ ?>
                <h1>la modifiaction de vos donées a été faite avec succées </h1>
               
              <?php
              }
              else{
                ?>
                <h1>la reponse n'a pas été enregistrée </h1>
               <?php
              }

              
                  
                
              
                
        }
        else{?>
            <h1>Une erreur est survenu lors de l'insertion </h1>
            <?php
        }
    }
    else{
      ?>

<          <h1>Seul les fchier pdf sont autorisés </h1>
        <?php
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
