<!doctype html>
<html lang="en">
  <head>
    <title>message</title>
    <link rel="icon" href="img\log.jpg">
    <!-- Required meta tags -->
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
             <li> <a href="demandeurSansReponse.php" class="btn btn-info btn-lg">Liste des demandeur sans reponse</a></li>
                <li> <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a></li>
            </ul>
            </nav>
            <div class="text-center">


<?php
                
 require'connect_db.php';
 $pdoStat =$db->prepare('update  demandeur set etat=:etat ,cause=:cause
  where id=:num LIMIT 1');
  $pdoStat->bindValue(':num',$_POST['numDemandeur'],PDO::PARAM_INT); 
  $pdoStat->bindValue(':etat',$_POST['etat'],PDO::PARAM_STR); 
  $pdoStat->bindValue(':cause',$_POST['cause'],PDO::PARAM_STR); 
  
  $executeIsOk = $pdoStat->execute();
  
  $req=$db->query('select id,email from demandeur');
             while($data=$req->fetch() ){ 
             if ($data["id"]==$_POST['numDemandeur']){
              $dest=$data['email'];
             }
            }
             

  if($executeIsOk){ ?>
    <h1>la réponse a été enregistrée </h1>
<?php



$header="MIME-Version: 1.0\r\n";
$header.='From:"CHU OUJDA"<satgechuoujda1@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';


$objet='réponse a votre demande de stage a CHU Oujda';
if($_POST['etat']=='accepter'){
  $message = 'felicitation votre demande de stage a chu Oujda a été accepté  ,veuillez venir récupérer votre note de stage';
}
elseif($_POST['etat']=='refuser'){
  $message = 'votre demande a été refusé pour savoir la cause et la réctifier visiter notre site ';
}

//pour le local host
mail($dest , $objet , $message , $header);

}
  else{
    ?>
    <h1>la reponse n'a pas été enregistrée </h1>
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
