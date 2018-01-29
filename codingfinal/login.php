<?php include('entete.php');
?>
  <?php session_start() ?>
<?php include('connexion.php') ?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

    <div class="container">
          
      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
       
        

          <form action="" method="POST" role="form" enctype="multipart/form-data">
            <h1>Formulaire de connexion</h1>
          </form>
    </div>
  </div>
</div>



<div class="jumbotron">
      <div class="container">

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">
      <label for="">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Entrez votre email" required="">
    </div>

  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">
      <label for="">Mot de passe</label>
    <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required=""/>
    </div>

  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
  <a href="dashboard.php">
  <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-success">Valider</button></a>
  </div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>