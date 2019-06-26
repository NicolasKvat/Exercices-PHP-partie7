<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 6 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 6</h1>
          <h4 class="text-white m-4 text-center">Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse. Utiliser qu'une seule page.</h4>
        </div>
      </header>
        <?php
            if (!empty($_POST['gender']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
                echo 'bonjour ' . $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'];
            } else {
            ?>
        <form class="text-center" method="post" action="index.php">
            <select name="gender">
                <option value="Mr">Mr</option> 
                <option value="Mme" selected>Mme</option>
            </select>
                <option value="Mme" selected>Mme</option>
            </select>
            <input name="lastname" type="text" placeholder="nom"/>
            <input name="firstname" type="text" placeholder="prénom"/>
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
