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
  <title>Venda Fácil | Inicio</title>
  <link rel="stylesheet" href="view/css/bootstrap.css">
  <link rel="stylesheet" href="view/js/bootstrap.min.js">
  <link rel="stylesheet" href="view/css/app.css">
  <!-- Adiciona o Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>

<body>

  <header class="header-menu px-0 container-fluid navbar-expand-lg   navbar-custom ">
    <?php include("view/includes/topo.php") ?>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>