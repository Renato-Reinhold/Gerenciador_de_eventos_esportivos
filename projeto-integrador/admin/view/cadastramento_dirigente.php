<?php 


  require_once "../controller/cadastramento_dirigentes_controller.php";

  $CDC = new cadastramento_dirigentes_controller();

  $arr = $CDC->buscar_equipes();

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

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="../index.html">Gestão esportiva</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <a href="index.html"><img class="img mr-3" style="margin-left: 75rem;" width="60" src="../imagem/ONE.png"></a>

      <!-- Navbar -->
      <ul class="d-none navbar-nav ml-auto mr-md-3 my-2 ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

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
            <a class="dropdown-item" href="cadastramento_dirigente.html">Dirigente</a>
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
            <a class="dropdown-item" href="table_dirigentes.php">Tabela de dirigentes</a>
          </div>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../index">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Cadastramento dirigente</li>
          </ol>

        </div>
        <div class="container-fluid">
          <form class="form" method="POST" action="../controller/cadastramento_dirigentes_controller.php?mod=inserir">
            <div class="form-row">
              <div class="col-md-10">
                <div class="row" style="padding-top: 10px;">
                  <div class="col-md-12">
                    <div class="form-group">
                      <h5 for="btn_f_name">Nome completo</h5>
                      <input type="text" class="form-control" name="nome" required id="btn_nome" placeholder="Nome completo">
                    </div>
                  </div>
                </div>

                <div class="row" style="padding-top: 20px;">

                  <div class="col-md-5">
                    <h5 for="slc_equipe">Equipe</h5>
                    <select id="slc_equipe" name="slc_equipe" required class="selectpicker form-control">
                          <?php foreach ($arr as $key => $e) {
                            echo "<option value=" . $arr[$key]->get_id() . ">" . $arr[$key]->get_nome() . " - " . $arr[$key]->get_modalidade() . "</option>";
                          } ?>
                    </select>
                  </div>

                  <div class="col-md-7">
                    <h5 for="data_nascimento">Data de nascimento</h5>
                    <input type="date" required class="form-control" name="data_nascimento">
                  </div>
                </div>

                <div class="row" style="padding-top: 30px;">
                      
                  <div class="col-md-6">
                    <h5>RG</h5>
                    <input type="text" maxlength="7" class="form-control" required name="rg" placeholder="RG"> 
                    <label>Digite apenas números sem quaisquer caracteres especiais. exemplo: 2856694</label>
                  </div>

                  <div class="col-md-6">
                    <h5>Siagep</h5>
                    <input type="text" maxlength="10" class="form-control" required name="Siagep" placeholder="Nùmero de inscrição">
                    <label>Digite apenas números sem quaisquer caracteres especiais. exemplo: 1234567891</label>
                  </div>
                </div>

                <div class="row" style="padding-top: 30px;">
                  <div class="col-md-12">
                    <h5 for="slc_cidade">Função</h5>
                      <input type="text" name="funcao" required class="form-control" placeholder="Funcao exercida...">
                  </div>
                </div>

                <div class="row form-group form-row" style="padding-top: 30px; ">
                  <div class="col-md-3 offset-md-9">
                    <input type="submit" class="btn btn-secondary form-control" value="Enviar">
                  </div>
                </div>

              </div>
            </div>
          </form>
        </div>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Administrador JIFSC 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

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

    <!-- Select Bootstrap -->
    <script type="text/javascript" src="../vendor/select/dist/js/bootstrap-select.min.js"></script>

    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type='text/javascript'>
      $("body").keydown(function(e){
         if(e.which==116){
              window.location.href = "cadastramento_dirigente.php";
              e.preventDefault();
          }
      });
      <?php
        if(isset($_GET['swal'])){
          if($_GET['swal'] == 'True'){
            echo "swal('Sucesso', 'Dirigente Cadastrado com sucesso.', 'success');";
          }
          else if($_GET['swal'] == 'False'){
            echo "swal('Erro', 'Falha ao cadastrar o dirigente.', 'error');";
          }
        }
      ?>
      $('.selectpicker').selectpicker();
    </script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

    

    <!-- Demo scripts for this page-->
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../js/demo/chart-area-demo.js"></script>

  </body>

</html>
