
<!doctype html>
<html lang="en">
  <head>
    <title>Formulaire de demande de stage</title>
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


                <h1>Formulaire de demande de stage</h1>
             </div>
    <br/>
    <div class="c1">
            <form action="insert.php" class="  mx-5 p-5  " method="POST" enctype="multipart/form-data"  >
        <div class="mb-3 mt-4">
            <label for="categorie">Catégorie <span class="etoile">*</span></label>
            <select class="mb-3 form-select form-control" id="categorie" aria-label="Default select example" name="categorie">
                <option selected>---</option>
                <option value="ayant un diplome">ayant un diplome </option>
                <option value="etudiant">Etudiant dans un etablissement superieur</option>
                

              </select>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom <span class="etoile">*</span></label>
            <input type="text" class="form-control " id="nom"  name="nom" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom <span class="etoile">*</span></label>
            <input type="text" class="form-control " id="prenom"  name="prenom" required>
        </div>


        <div class="mb-3 mt-4">
            <label for="specialite">Spécialité(Service ou vous voulez effectuer votre stage)<span class="etoile">*</span></label>
            <select class="mb-3 form-select form-control" id="specialite" aria-label="Default select example" name="specialite">
                <option selected>---</option>
                <option value="Service Informatique">Service Informatique</option>
                <option value="service logistique">service logistique</option>
                
                
                <option value="Autre">Autre</option>

              </select>
        </div>


        <div class="mb-3 mt-4">
            <label for="typestage">Type De stage<span class="etoile">*</span> </label>
            <select class="mb-3 form-select form-control " id="typestage" aria-label="Default select example" name="typestage">
                <option selected>---</option>
                <option value="stage d initiation">stage d'initiation</option>
                <option value="stage d aplication">stage d'aplication</option>
                <option value="stage de projet de fin d étude">stage de projet de fin d'étude</option>
                
              </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail <span class="etoile">*</span></label>
            <input type="email" class="form-control " id="email"  name="email" required>
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">téléphone <span class="etoile">*</span></label>
            <input type="tel"  pattern="[0-9]{10}" class="form-control " id="tel"  name="tel" required>
        </div>
        <div class="mb-3">
            <label for="documents" class="form-label">documents <span class="etoile">*</span></label>
            <input type="file" class="form-control " id="documents"  name="documents" required>
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
