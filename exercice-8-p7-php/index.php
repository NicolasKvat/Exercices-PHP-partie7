<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 8 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 8</h1>
          <h2 class="text-white m-4 text-center">Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.</h2>
        </div>
      </header>
      <?php
        if (!empty($_POST['gender']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
            var_dump($_FILES['myFile']);
            if (isset($_FILES['myFile']) && $_FILES['myFile']['error'] === 0) {
                $path = pathinfo($_FILES['myFile']['name']);
                if ($path['extension'] == 'pdf') {
                    echo 'bonjour ' . $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '. Vous avez envoyé le fichier ' . $path['basename'];
                    move_uploaded_file($_FILES['myFile']['tmp_name'], 'upload/toto.' . $path['extension']);
                } else {
                    echo 'Veuillez utiliser la bonne extension.';
                }
            }

        } else { ?>
      
      <form class="text-center" method="post" action="index.php" enctype="multipart/form-data">
        <select name="gender">
          <option value="Mr">Mr</option> 
          <option value="Mme" selected>Mme</option>
        </select>
        <input name="lastname" type="text" placeholder="nom"/>
        <input name="firstname" type="text" placeholder="prénom"/>
        <input type="file" name="myFile"/>.
        <input type="submit" value="Valider" accept=".html"/>
      </form>
      <?php } ?>
    </div>
  </body>
</html>
