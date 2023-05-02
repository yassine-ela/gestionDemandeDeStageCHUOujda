<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:connexion.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM administrateur WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Demandeur acceptés</title>
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
             <li> <a href="administrateur.php" class="btn btn-info btn-lg">administrateur</a></li>
                <li> <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a></li>
            </ul>
            </nav>
            <div class="text-center">


                <h1>Liste Des acceptés </h1>
    <br/>
            
            <table class="table">
        <thead>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>documents</th>
            <th>cause</th>
        
            
        
        </thead>
        <tbody>
            <?php
            require'connect_db.php';
            $req=$db->query('select id,categorie,nom,prenom,specialite,typestage,email,tel,name,file_url,etat,cause from demandeur');
             while($data=$req->fetch() ){ 
             if ($data["etat"]=='accepter'){
             ?>
                <tr>
            <td><?php echo  $data["id"]; ?></td>
            <td><?php echo  $data["nom"]; ?></td> 
            <td><?php echo  $data["prenom"]; ?></td>
            
            <td> <?php echo '<a href="'.$data['file_url'].'"  target="_blank">' .$data['name'].'</a>';?></td>
            <td><?php echo  $data["cause"]; ?></td>
          
          </tr> 
            <?php 
             }
            }
         

         
  
   ?>
        </tbody>
    </table>


    
    <hr />

                        
<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
  Changer mon mot de passe
</button>
</div>
</div>
</div>    

     <!-- Modal -->
     <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Changer mon mot de passe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                            <div class="modal-body">
                                <form action="layouts/change_password.php" method="POST">
                                    <label for='current_password'>Mot de passe actuel</label>
                                    <input type="password" id="current_password" name="current_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password'>Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
                                    <br />
                                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>


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
