<?php include('connexion.php');
    $msg="";
    if (isset($_POST['btnValider'])){
        $sql= "INSERT INTO liens (codeuses,facebook,twitter,github) VALUES ('".$_POST['codeuses']."','".$_POST['facebook']."','".$_POST['twitter']."','".$_POST['github']."')";
        $result=mysqli_query($link  ,$sql);
        if ($result) {
            $msg='Insertion reussie';
        }else{
            $msg=mysqli_error($link);
        }
    }
 ?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Accueil</title>

</head>
<body>
     <div class="container">
      <div class="row" >


          <nav class="navbar navbar-inverse" role="navigation">

       
          <a class="navbar-brand" href="accueil"><b>SHEISTHECODE CV</b></a>
            
            <ul class="nav navbar-nav">
              <li>
                <a href="admin.php">A propos</a>
              </li>
              <li>
                <a href="inscription.php">S'inscrire</a>
              </li>
              <li>
                <a href="connexion.php">Se connecter</a>
              </li>
            </ul>
          </nav>
       
        
      </div> 

     <div class="row" style="background-color: silver">
          <div class="col-md-4">
          <img src="img/jesuislecode.jpg" class="img-circle" height="100" width="100"><br>
                <p>Atsain Lucette</p>      
            </div>
            <div class="col-md-4">
              <h3>Developpeuse</h3>
              <p>je suis une étudiante en Sciences de Gestion passionnée des Tics et des NTICS et web developpeur debutante chez sheisthecode,passionnee de UI/UX. J'aime bien cree des interfaces beaux et pratiques pour les utilisateurs</p>
            </div>
            <div class="col-md-4"> 
              <button>
                <a href="cv.html">Consulter le cv</a>
              </button>
            </div>     
        </div>
         <br>
        <div class="row" style="background-color: silver">
          <div class="col-md-4">
          <img src="img/jesuislecode.jpg" class="img-circle" height="100" width="100"><br>
                <p>Atsain Lucette</p>      
            </div>
            <div class="col-md-4">
              <h3>Developpeuse</h3>
              <p>je suis une étudiante en Sciences de Gestion passionnée des Tics et des NTICS et web developpeur debutante chez sheisthecode,passionnee de UI/UX. J'aime bien cree des interfaces beaux et pratiques pour les utilisateurs</p>
            </div>
            <div class="col-md-4"> 
              <button>
                <a href="cv.html">Consulter le cv</a>
              </button>
            </div>     
        </div>
        <br>
        <div class="row" style="background-color: silver">
          <div class="col-md-4">
          <img src="img/jesuislecode.jpg" class="img-circle" height="100" width="100"><br>
                <p>Atsain Lucette</p>      
            </div>
            <div class="col-md-4">
              <h3>Developpeuse</h3>
              <p>je suis une étudiante en Sciences de Gestion passionnée des Tics et des NTICS et web developpeur debutante chez sheisthecode,passionnee de UI/UX. J'aime bien cree des interfaces beaux et pratiques pour les utilisateurs</p>
            </div>
            <div class="col-md-4">
               <button>
                <a href="cv.html">Consulter le cv</a>
              </button>
              
            </div>     
        </div>
        <br>
       </div>
      </div>
      </div>
    </div>
   </div>
  </div>
</div>
</body>
</html>