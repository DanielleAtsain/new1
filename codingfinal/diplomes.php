<?php include('menu.php');
?>
  <?php session_start() ?>
<?php include('connexion.php') ?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diplomes obtenus</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body1>

    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">

          <form action="" method="POST" role="form">
            <h2>Diplomes</h2>
          </form>
    </div>
 



<div class="jumbotron">
      <div class="container">

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">
      <label for="">Etablissement</label>
    <input type="name" name="email" class="form-control" placeholder="Entrez le nom de votre etablissement" required="">
    </div>

  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">

       <label for="">Diplomes</label>
   <select name="Diplomes" class="form-control">
        <option value="Baccalauréat">Baccalauréat</option>
        <option value="Licence1">Licence1</option>
        <option value="Licence2">Licence2</option>
        <option value="Licence3">Licence3</option>
        <option value="BTS">BTS</option>
        <option value="Master1">Master1</option>
        <option value="Master2">Master2</option>
        <option value="Autres">Autres</option>
       </select>
    </div>

  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
 
    <a href="dashboard.php">
  <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-danger">Valider</button></a>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</body1>
</html>