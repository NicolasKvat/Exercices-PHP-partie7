<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 1 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 1</h1>
          <h4 class="text-white m-4 text-center">Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</h4>
        </div>
      </header>
        <p class="text-center">
            <?php
            echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
            ?>
        </p>
        <a href="index.php">Retour</a>
    </div>
  </body>
</html>
