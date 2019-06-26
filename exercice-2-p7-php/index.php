<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 2 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 2</h1>
          <h4 class="text-white m-4 text-center">Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</h4>
        </div>
      </header>
        <form class="text-center d-flex flex-column align-items-center" method="post" action="user.php">
              <input name="lastname" type="text" placeholder="nom" class="form-control m-4 w-50 text-center"/>
              <input name="firstname" type="text" placeholder="prénom" class="form-control m-4 w-50 text-center"/>
              <input type="submit" value="Valider" class="btn btn-outline-primary btn-lg"/>
        </form>
    </div>
  </body>
</html>
