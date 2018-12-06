<?php 
  
  include_once "../controller/cadastramento_evento_controller.php";

  $controller_evento = new cadastramento_evento_controller();

  $equipes = $controller_evento->carregar_equipe_futebol();

  $modalidades = $controller_evento->carregar_modalidades();
  
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cadastramentos | Administrador JIFSC</title>
    
    <!-- icone -->
    <link href="../imagem/ONE.png" rel="shortcut icon"/>

    <!-- fontes -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">

    <!-- normalize -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="../vendor/select/dist/css/bootstrap-select.css" rel="stylesheet" >

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index/index.html">Gestão esportiva</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <a href="index/index.html"><img class="img mr-3" style="margin-left: 75rem;" width="60" src="../imagem/ONE.png"></a>


    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index/index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-address-card"></i>
            <span>Cadastramentos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="cadastramento_atleta.php">Atleta</a>
            <a class="dropdown-item" href="cadastramento_dirigente.php">Dirigente</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-address-card"></i>
            <span>Eventos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="../view/lista_eventos.php">Lista de eventos</a>
            <a class="dropdown-item" href="cadastramento_evento.php">Cadastrar um evento</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-table"></i>
            <span>Tabelas</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="table_atletas.php">Tabela de atletas</a>
            <a class="dropdown-item" href="tabela_dirigentes.php">Tabela de dirigentes</a>
          </div>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index/index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Cadastramento evento</li>
          </ol>

        </div>
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-2 offset-sm-1">
              <label>Escolha o que deseja alterar</label>
              <select class="form-control selectpicker" multiple>
                <option value="">Nome</option>
                <option value="">Data</option>
                <option value="">Local</option>.
              </select>
            </div>
            <div class="col-sm-9">
              <div class="card w-75 text-center">
                <div class="card-header">
                  Campos
                </div>
                <div class="card-body">
                  <button type="submit" class="btn btn-primary">Alterar</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- /#wrapper -->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

    <!-- Select Bootstrap -->
    <script src="../vendor/select/dist/js/bootstrap-select.js"></script>

    <script type="text/javascript">
      
    </script>
    
  </body>

</html>
