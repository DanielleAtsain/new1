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
    <title>Centre d'intérêt</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

    <div class="container">
            <div class="well">
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
              
          <form action="" method="POST" role="form">
            <h1>Centre d'intérêt</h1>
          </form>
    </div>
  </div>
</div>



<div class="jumbotron">
      <div class="container">

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">



      <label for="">Centre d'intérêt</label>
   <select name="interets" class="form-control">
        <option value="">Centre d'intérêt</option>
        <option value="Sport">Sport</option>
        <option value="natation">natation</option>
        <option value="football">Football</option>
        <option value="Handball">Handball</option>
        <option value="autres">Handball</option>
        
      </select>
    </div>

  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">
      <label for="">Description</label>
    <input type="text" name="Description" class="form-control" placeholder="Entrez vos centres d'interets" required=""/>
    </div>

  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">

    <a href="dashboard.php">
  <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-success">Valider</button></a>
  <div class="col-md-2"></div>
      </div>
      <br>
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th>Numero</th>
              <th>Centre d'interet</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $n=1;
              $list=" SELECT * FROM interets";
              $res= mysqli_query($link,$list);
              while ($data = mysqli_fetch_array($res)){?>
              <tr>
                <td> <?php echo $n; ?> </td>
                <td><?php echo $data['libelle']; ?></td>
                <td><?php echo $data['description']; ?></td>
                <td></td>
              </tr>
              <?php $n++;
            } ?>
          </tbody>
        </table>

      </div>
      

    </div>
    


  </div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>