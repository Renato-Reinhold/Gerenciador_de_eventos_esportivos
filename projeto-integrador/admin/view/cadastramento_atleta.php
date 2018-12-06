<?php  

  include_once "../controller/cadastramento_atleta_controller.php";

  $atleta_controller = new cadastramento_atleta_controller;
  
  $modalidades = $atleta_controller->buscar_modalidades();
  $cidades = $atleta_controller->buscar_cidades();
  $equipes = $atleta_controller->carregar_equipes_and_modalidades();

#Chamar o método BuscarModalidades que vai retornar um arrayList de objetos modalidade

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

    <!-- select bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../vendor/select/dist/css/bootstrap-select.min.css">

    <!-- custom -->
    <link rel="stylesheet" type="text/css" href="../css/custom_atleta.css">

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
            <span>Cadastramento</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="cadastramento_atleta.php">Atleta</a>
            <a class="dropdown-item" href="cadastramento_dirigente.php">Dirigentes</a>
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
            <a class="dropdown-item" href="table_atletas.php">Tabela de Atletas</a>
            <a class="dropdown-item" href="tabela_dirigentes.php">Tabela de dirigentes</a>
          </div>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
          	<li class="breadcrumb-item">
            	<a href="../index.html">Home</a>
            </li>
            <li class="breadcrumb-item">Cadastramento atleta</li>
          </ol>

        </div>
        <!-- end breadcrumbs -->

        <!-- page content -->

        <div class="container-fluid">
          <form class="form" method="POST" action="../controller/receber_cadastramento_atleta.php?mod=inserir">

            <div class="form-row">

              <div class="col-md-10">

                <div class="row" style="padding-top: 10px;">

                  <div class="col-md-12">
                    <div class="form-group">
                      <h5 for="btn_f_name">Nome completo</h5>
                      <input type="text" class="form-control" required name="nome_atleta" id="btn_f_name" placeholder="Nome completo">
                    </div>
                  </div>
                </div>

                <div class="row" style="padding-top: 20px;">

                  <div class="col-md-5">
                    <h5 for="slc_cidade">Campus</h5>
                    <select id="slc_cidade" required name="slc_cidade" class="selectpicker form-control">
                      <?php foreach ($cidades as $key => $c) {
                        echo "<option value=" . $cidades[$key]->get_id() . ">" . $cidades[$key]->get_nome() . "</option>";
                      } ?>
                    </select>
                  </div>

                  <div class="col-md-7">
                    <h5>Data de nascimento</h5>
                    <input type="date" required class="form-control" name="data_nascimento">
                  </div>
                </div>

                <div class="row" style="padding-top: 30px;">
                  
                  <div class="col-md-6">
                    <h5>RG</h5>
                    <input type="text" required maxlength="7" required class="form-control" name="rg" placeholder="RG">
                    <label>Digite apenas números sem quaisquer caracteres especiais. exemplo: 2856694</label>
                  </div>

                  <div class="col-md-6">
                    <h5>Nùmero de inscrição do IFSC</h5>
                    <input type="text" maxlength="10" required class="form-control" name="ins_ifsc" placeholder="Nùmero de inscrição">
                    <label>Digite apenas números sem quaisquer caracteres especiais. exemplo: 1234567891</label>
                  </div>
                </div>

                <div class="form-row form-group" style="padding-top: 30px;">
                  <div class="col-md-2">
                    <div class="card">
                      <div class="card-header">
                        <h4>Sexo</h4>
                        <div class="card-body" style="">
                          <div class="row form-group">
                            <label class="form-control form-group btn btn-primary">
                              <input  type="radio" required value="M" name="sexo"> Mulher
                            </label>
                            <label class="form-control btn btn-primary">
                              <input  type="radio" required value="H" name="sexo"> Homem
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10">
                  <div class="card">
                    <div class="card-header">
                      <h4>Praticas</h4>
                      <div class="card-body" style="padding-bottom: 30px;">
                        <div class="form-row form-group" style="padding-top: 20px;">
                          <div class="col-md-4">
                            <h5>Modalidade</h5>
                            <select id="slc_modalidades" required name="slc_modalidades" class="selectpicker form-control"  onchange="carregar_modalidades_js()">
                              <?php foreach ($modalidades as $key => $m) {
                                echo "<option value=" . $modalidades[$key]->get_id() . ">" . $modalidades[$key]->get_nome() . "</option>";
                              }?>
                            </select>
                          </div>
                          <div class="col-md-6">
                            <h5>Equipe</h5>
                            <select id="slc_equipe" required name="slc_equipe" class="selectpicker form-control">
                              <?php foreach ($equipes as $key => $e) {
                                  echo "<option value=" . $equipes[$key]->get_id() . ">" . $equipes[$key]->get_nome() . " - " . $equipes[$key]->get_modalidade() . "</option>";
                              } ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>

              <div class="row form-row form-group">
                <div class="col-md-4 offset-md-8">
                  <input type="submit" name="submit" value="Enviar" class="btn btn-secondary form-control">
                </div>
              </div>

            </div>
          </form>
        </div>

        <!-- end page content -->



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

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

    <!-- Select Bootstrap -->
    <script type="text/javascript" src="../vendor/select/dist/js/bootstrap-select.min.js"></script>

    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type='text/javascript'>
      $("body").keydown(function(e){
          if(e.which==116){
              window.location.href = "cadastramento_atleta.php";
              e.preventDefault();
          }
      });
    <?php
      if(isset($_GET['swal'])){
        if($_GET['swal'] == 'True'){
          echo "swal('Sucesso', 'Atleta Cadastrado com sucesso.', 'success');";
        }
        else{
          echo "swal('Erro', 'Falha ao cadastrar o atleta.', 'error');";
        }
      }
    ?>
    </script>
    <script type="text/javascript" src="../custom.js"></script>

  </body>

</html>

