<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doceria</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Doceria Show de bala</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo doce</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Doces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novoe">Nova Encomenda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listare">Listar Encomenda</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
        switch(@$_REQUEST["page"]){
            case "novo":
                include("novo-doce.php");
                break;
            case "novoe":
                include("novo-encomenda.php");
                break;
            case "listar":
                include("listar-doce.php");
                break;
            case "listare":
                include("listar-encomenda.php");
                break;
            case "salvar":
                include("salvar-doce.php");
                break;
            case "salvare":
                include("salvare.php");
                break;
            case "editar":
                include("editar-doce.php");
                break;
            case "editare":
                include("editar-encomenda.php");
                break;
            default:
            print "<h1>Bem vindos ao sistema da doceria Show de Bala!</h1>";
        }

    ?>
            </div>
        </div>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>