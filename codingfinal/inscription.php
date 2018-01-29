<?php include('entete.php');
?>

<?php include('connexion.php');
  $msg="";
  if (isset($_POST['btnValider'])){
    if (move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/'.$_FILES['photo']['name'])) {
      
     $sql= "INSERT INTO codeuses (nom,prenoms,ddn,photo,specialisation,email,mdp,description)
       VALUES ('".mysqli_real_escape_string($link,$_POST['nom'])."',
            '".mysqli_real_escape_string($link,$_POST['prenoms'])."',
            '".mysqli_real_escape_string($link,$_POST['ddn'])."',
            '".($_FILES['photo']['name'])."',
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
  }
 ?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>
    <div class="form-group">
    <div class="container">
      <div class="row">
        <div class="col-md-12" >
        <div class="col-md-8">
         
          <form action="" method="POST" role="form" enctype="multipart/form-data">
            <h1>Formulaire d'inscription</h1>

            <span> <?php echo $msg; ?> </span>
          </form>
        </div>
      </div>
    </div>
<hr>
            <div class="form-group">
              <label for="">Nom</label>
              <input type="text" class="form-control" name="nom" id="" placeholder="Entrer votre nom" value="<?php if (isset($_GET['id'])) echo $dataU['nom']; ?>">

            </div>

            <div class="form-group">
              <label for="">Prenoms</label>
              <input name="prenoms" type="text" class="form-control" id="" placeholder="Entrer vos prenoms" value="<?php if (isset($_GET['id'])) echo $dataU['prenoms']; ?>">
            </div><div class="form-group">
              <label for="">Date de naissance</label>
             <input type="date" class="form-control" name="ddn" value="<?php if (isset($_GET['id'])) echo $dataU['ddn']; ?>">
            </div>
            <div class="form-group">
              <label for="">Photo de profil</label>
              <input name="photo" type="file" class="form-control" id="" placeholder="image">
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
              <textarea class="form-control" name="description" id="" placeholder="Entrez une briève description de vous" value="<?php if (isset($_GET['id'])) echo $dataU['description']; ?>" rows="5"></textarea>
            </div>
            <a href="dashboard.php">
            <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-success">Valider</button></a>
            
          </form>
        </div>
      </div>
      </div>
    
  </body>
</html>

    <!-- jQuery -->
    <script type="text/javaScript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script type="text/javaScript" src="js/bootstrap.min.js"></script>
    <script type="text/javaScript" src="js/control.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>