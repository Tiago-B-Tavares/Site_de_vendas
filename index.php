<?php
include_once("controller/verurl.php");
include_once("model/dao/conexao.php");
include_once("model/dao/manipuladados.php");
$con = new conexao();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="view/js/bootstrap.min.js">


</head>

<body>

  <header class=" navbar-expand-lg  container-fluid navbar-custom ">

    <?php include("view/includes/menu.php") ?>


  </header>


  <main class="main">


    <?php
    $redireciona = new verurl();
    $redireciona->trocaUrl(@$_GET['secao']);
    ?>

  </main>


  <footer>
    <?php include("view/includes/footer.php") ?>
  </footer>


  <script src="js/bootstrap.js"></script>
</body>

</html>