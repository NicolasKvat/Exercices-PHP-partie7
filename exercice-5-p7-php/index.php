<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 5 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 5</h1>
          <h4 class="text-white m-4 text-center">
            Créer un formulaire sur la page index.php avec :
            
            Une liste déroulante pour la civilité (Mr ou Mme)
            Un champ texte pour le nom
            Un champ texte pour le prénom

            Ce formulaire doit rediriger vers la page index.php.
            Vous avez le choix de la méthode.
          </h4>
        </div>
      </header>
        <form class="text-center" method="post" action="index.php">
            <select name="gender">
                <option value="Mr">Mr</option> 
                <option value="Mme" selected>Mme</option>
            </select>
            <input name="lastname" type="text" placeholder="nom"/>
            <input name="firstname" type="text" placeholder="prénom"/>
            <input type="submit" value="Valider"/>
        </form>
        <p class="text-center">
            <?php
            if (isset($_POST['gender']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {
                echo 'Bonjour ' . $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . ' !';
            } else {
                echo 'Veuillez saisir toutes les informations.';    
            }
            ?>
        </p>
    </div>
  </body>
</html>
