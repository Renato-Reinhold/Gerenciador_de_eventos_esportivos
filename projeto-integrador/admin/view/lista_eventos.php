<?php
  
  include_once "../controller/lista_eventos_controller.php";

  $eventos_controller = new lista_eventos_controller();

  $eventos = $eventos_controller->carregar_eventos();

?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home | Administrador JIFSC</title>

    <link href="../imagem/ONE.png" rel="shortcut icon"/>

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="../vendor/fontawesome-free/css/all.min.css">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/custom.css">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index/index.html">Gestão esportiva</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <a href="index/index.html"><img class="img mr-3" style="margin-left: 75rem;" width="60" src="../imagem/ONE.png"></a>

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
            <a class="dropdown-item" href="../view/cadastramento_atleta.php">Atleta</a>
            <a class="dropdown-item" href="../view/cadastramento_dirigente.php">Dirigente</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-address-card"></i>
            <span>Eventos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="">Lista de eventos</a>
            <a class="dropdown-item" href="../view/cadastramento_evento.php">Cadastrar um evento</a>
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
              <a href="index/index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Lista de eventos</li>
          </ol>

        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-sm">
                  <thead class="thead thead-dark">
                    <tr>
                      <th>Nome Evento</th>
                      <th>Data Evento</th>
                      <th>Local do Evento</th>
                      <th width="1px">Torneios</th>
                      <th width="1px">Settings</th>
                      <th width="1px">Deletar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                      foreach ($eventos as $key => $value) {
                        echo "<tr>
                                <td>" . utf8_encode($eventos[$key]->get_nome()) . "</td>
                                <td>" . $eventos[$key]->get_data() . "</td>
                                <td>" . utf8_encode($eventos[$key]->get_local_torneios()) . "</td>
                                <td class='text-center btn-link'><a href='partidas.php?evento=" . $eventos[$key]->get_id() . "'><i class='fas fa-edit'></i></a></td>
                                <td class='text-center btn-link'><a href='settings.php?evento=" . $eventos[$key]->get_id() . "'><i class='fas fa-cog'></i></a></td>
                                <td class='text-center btn-link'><a href='../controller/lista_eventos_controller.php?mod=excluir&evento=" . $eventos[$key]->get_id() . "'><i class='fas fa-times'></i></a></td>
                              </tr>";
                      }
                    ?>
                    
                  </tbody>
                </table>
            </div>
          </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type='text/javascript'>
      $("body").keydown(function(e){
         if(e.which==116){
              window.location.href = "lista_eventos.php";
              e.preventDefault();
          }
      });
      <?php
        if(isset($_GET['swal'])){
          if($_GET['swal'] == 'True'){
            echo "swal('Sucesso', 'Evento excluido com sucesso.', 'success');";
          }
          else{
            echo "swal('Erro', 'Falha ao excluir o evento.', 'error');";
          }
        }
      ?>
    </script>
    <script src="../custom.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

  </body>

</html>
