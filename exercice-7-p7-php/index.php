<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 7 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 7</h1>
          <h4 class="text-white m-4 text-center">Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</h4>
        </div>
      </header>
      <?php
        if (isset($_POST['gender']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_FILES['myFile'])) {
            echo 'bonjour ' . $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '. Vous avez envoyé le fichier ' . $_FILES['myFile']['name'] . ' ' . $_FILES['myFile']['type'];
        } else {
      ?>
      <form class="text-center" method="post" action="index.php" enctype="multipart/form-data">
        <select name="gender">
          <option value="Mr">Mr</option> 
          <option value="Mme" selected>Mme</option>
        </select>
        <input name="lastname" type="text" placeholder="nom"/>
        <input name="firstname" type="text" placeholder="prénom"/>
        <input type="file" name="myFile"/>.
        <input type="submit" value="Valider"/>
      </form>
      <p class="text-center">
        <?php
            echo 'Veuillez entrer les informations.';
            }
        ?>
      </p>
    </div>
  </body>
</html>
