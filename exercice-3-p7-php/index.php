<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 3 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 3</h1>
          <h4 class="text-white m-4 text-center">Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</h4>
        </div>
      </header>
      <form class="text-center" method="get" action="user.php">
            <input name="lastname" type="text" placeholder="nom"/>
            <input name="firstname" type="text" placeholder="prénom"/>
            <input type="submit" value="Valider"/>
       </form>
    </div>
  </body>
</html>
