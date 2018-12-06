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

      <a href="index/index.html"><img class="img mr-3" style="margin-left: 100rem;" width="60" src="../imagem/ONE.png"></a>


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
          <ul id="tab" class="nav nav-tabs col-md-8 offset-md-2 nav-justified" style=" padding-top: 50px; " role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">Evento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1">Torneio</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <form method="POST" action="../controller/receber_cadastramento_evento.php?mod=inserir">
            <div class="tab-content border mb-3">
              <div id="home" class="container tab-pane active" style="margin-top: 5rem;">

                  <div class="row form-row">
                    <div class="col-md-4 offset-md-2">
                      <h5>Nome do evento</h5>
                      <input type="text" class="form-control" required name="nome" placeholder="Nome do evento...">
                    </div>
                    <div class="col-md-4">
                      <h5>Local do evento</h5>
                      <input type="text" class="form-control" required name="local_torneios" placeholder="Local do evento...">
                      <label>Digite apenas a cidade.</label>
                    </div>
                  </div>
                  <div class="row form-row" style="padding-top: 10px;">
                    <div class="col-md-8 offset-md-2">
                      <h5>Data do evento</h5>
                      <input type="date" class="form-control" required name="data">
                    </div>
                  </div>
                  <div class="row form-row" style="margin-top: 20px;">
                    <div class="col-md-4 offset-md-6">
                      <a class="form-control btn btn-secondary" data-toggle="tab" href="#menu1" onclick="$('#tab a:last').tab('show')" value="Próximo">Próximo</a>
                    </div>
                  </div>

              </div>
              <div id="menu1" class="container tab-pane fade" style="margin-top: 3rem;">

                  <div class="row form-row">
                    <div class="col-md-2 offset-md-8">
                      <h2>Torneios</h2>
                      <input id="qtd_torneios" type="number" onchange="gerar_campos();" min="1" max="10" name="qtd_torneios" value="1" class=" form-control">
                      <label style="font-size: 12px;">Quantos torneios haverá neste evento?</label>
                    </div>
                  </div>

                  <div class="card form-row" style="margin-top: 30px; padding-top: 20px;">
                    <div class="row">
                      <div class="col-md-3 offset-md-1">
                        <h3>Modalidade</h3>
                        <select id="slc_modalidades" name="modalidade1" required class="selectpicker form-control" onchange="carregar_modalidades_js()">
                           <?php foreach ($modalidades as $key => $m) {
                                  echo "<option value=" . $modalidades[$key]->get_id() . ">" . $modalidades[$key]->get_nome() . "</option>";
                            }?>
                        </select>
                      </div>
                      <div class="col-md-5 offset-md-1">
                        <h3>Equipes participantes</h3>
                        <select id="slc_equipe" name="equipes1[]" required class="selectpicker form-control" multiple>
                          <?php foreach ($equipes as $key => $e) {
                              echo "<option value=" . $equipes[$key]->get_id() . ">" . $equipes[$key]->get_nome() . "</option>";
                          } ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div id="campos">
                    
                  </div>

                  <div class="row form-row" style="margin-top: 20px;">
                    <div class="col-md-4 offset-md-6">
                      <input type="submit" class="form-control btn btn-secondary" value="Enviar">
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </form>


      </div>
    </div>
    <!-- /#wrapper -->
    


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

    <!-- Select Bootstrap -->
    <script src="../vendor/select/dist/js/bootstrap-select.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type='text/javascript'>
      $("body").keydown(function(e){
        if(e.which==116){
              window.location.href = "cadastramento_evento.php";
              e.preventDefault();
          }
      });
      <?php
        if(isset($_GET['swal'])){
          if($_GET['swal'] == 'True'){
            echo "swal('Sucesso', 'Evento cadastrado com sucesso.', 'success');";
          }
          else if($_GET['swal'] == 'False'){
            echo "swal('Erro', 'Falha ao cadastrar o evento.', 'error');";
          }
        }
      ?>
    </script>

    <!-- Meus scripts -->
    <script src="../custom2.js"></script>

    <script src="../vendor/number-input/src/bootstrap-input-spinner.js"></script>
    <script>
        $("input[type='number']").inputSpinner();
    </script>
    
    <script type="text/javascript">
      $('.selectpicker').selectpicker();
    </script>
    
  </body>

</html>
