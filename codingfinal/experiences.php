<?php include('menu.php');
?>

<?php include('connexion.php');
  $msg="";
  if (isset($_POST['btnValider'])){
    $sql= "INSERT INTO codeuses (nom,prenoms,ddn,photo,specialisation,email,mdp,description)
       VALUES ('".mysqli_real_escape_string($link,$_POST['nom'])."',
            '".mysqli_real_escape_string($link,$_POST['prenoms'])."',
            '".mysqli_real_escape_string($link,$_POST['ddn'])."',
            '".mysqli_real_escape_string($link,$_POST['photo'])."'),
            '".mysqli_real_escape_string($link,$_POST['specialisation'])."'),
            '".mysqli_real_escape_string($link,$_POST['email'])."'),
            '".mysqli_real_escape_string($link,$_POST['mdp'])."'),
            '".mysqli_real_escape_string($link,$_POST['description'])."')";

    $result=mysqli_query($link,$sql);

    
    if ($result) {
      $msg='Insertion reussie';
    }else{
      $msg=mysqli_error($link);
    }
  }
  if (isset($_GET['id'])){
    $update="SELECT * FROM codeuses WHERE id=".$_GET['id'];
    $res=mysqli_query($link,$update);
    $dataU=mysqli_fetch_array($res);
  }

  if (isset($_GET['sup'])){
    $delete="DELETE FROM codeuses WHERE id=".$_GET['sup'];
    $res=mysqli_query($link,$delete);
  }
 ?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscrivez vos expériences</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="form-group">
    <div class="container">
      <div class="row">
          <div class="col-md-12" >
        <div class="col-md-8">
          <form action="" method="POST" role="form" enctype="multipart/form-data">
            <h1>Inscrivez vos expériences</h1>

            <span> <?php echo $msg; ?> </span>
          </form>
        </div>
      </div>
    </div>
 
</hr>
            <div class="form-group">
              <label for="">Organisation</label>
              <input name="text" type="text" class="form-control" id="" placeholder="Organisation ou Entreprise" value="<?php if (isset($_GET['id'])) echo $dataU['Organisation']; ?>">
            </div>

            <div class="form-group">
              <label for="">Poste occupé</label>
              <input name="Poste occupé" type="text" class="form-control" id="" placeholder="Poste occupé" value="<?php if (isset($_GET['id'])) echo $dataU['poste']; ?>">
            </div>
            <div class="form-group">
              <label for=""> Description</label>
              <input name="Description" type="text" class="form-control" id="" placeholder="Poste occupé" value="<?php if (isset($_GET['id'])) echo $dataU['poste']; ?>">
            </div>
            <div class="form-group">
              <label for="">Date de debut</label>
              <input name="text" type="text" class="form-control" id="" placeholder="jj/mm/aaaa" value="<?php if (isset($_GET['id'])) echo $dataU['ddd']; ?>">
            </div><div class="form-group">
              <label for="">Photo de profil</label>
              <input name="image" type="file" class="form-control" id="" placeholder="image">
            </div>
            <div class="form-group">
              <label for="">Specialisation</label>
              <input name="specialisation" type="text" class="form-control" id="" placeholder="Entrez votre specialisation" value="<?php if (isset($_GET['id'])) echo $dataU['specialisation']; ?>">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input name="email" type="text" class="form-control" id="" placeholder="Entrez votre email" value="<?php if (isset($_GET['id'])) echo $dataU['email']; ?>">
            </div>
            <div class="form-group">
              <label for="">Mot de passe</label>
              <input name="mdp" type="password" class="form-control" id="" placeholder="Mot de passe" value="<?php if (isset($_GET['id'])) echo $dataU['mdp']; ?>">
            </div>
            <div class="form-group">
              <label for="">Bref resumé </label>
              <input name="description" type="text" class="form-control" id="" placeholder="Décrivez vous en quelques mots" value="<?php if (isset($_GET['id'])) echo $dataU['description']; ?>">
            </div>


            <a href="dashboard.php">
  <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-success">Valider</button></a>
            
          </form>
        </div>
      </div>
      </div>
    </div>
</body>
</html>
<br>
     


    <!-- jQuery -->
    <script type="text/javaScript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script type="text/javaScript" src="js/bootstrap.min.js"></script>
    <script type="text/javaScript" src="js/control.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>
  