<?php 

    require_once "../controller/terminar_partida_controller.php";

    $partida_controller = new terminar_partida_controller();

    $chave = $partida_controller->select_equipes_for_chave($_GET['chave']);

    $equipe_a = $chave[0]->get_atletas();
    $equipe_b = $chave[1]->get_atletas();

?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Partidas | Administrador JIFSC</title>

    <link href="../imagem/one_sumula.png" rel="shortcut icon"/>

    <link rel="icon" href="vendor/fontawesome-free/svgs/regular/futbol.svg" type="image/ico" />

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/custom_partidas.css">

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
            <a class="dropdown-item" href="lista_eventos.php">Lista de eventos</a>
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
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

        </div>

        <div class="container-fluid">
          <form method="post" action="../controller/receber_partida_terminada.php?chave=<?php echo($_GET['chave']); ?>&evento=<?php echo($_GET['evento']); ?>&torneio=<?php echo($_GET['torneio']); ?>">
            <div class="row">
              <div class="col-sm-5">
                <div class='card' style='margin-bottom: 20px;'>
                  <div class='card-header' >
                      <div class="row">
                        <div class="col-sm-10">
                          <h4 style="padding-top: 30px;" class="text-center"><?php echo $chave[0]->get_nome(); ?></h4>
                        </div>
                        <div class="col-sm-2">
                          <label>Pontos</label>
                          <input type="text" hidden value="<?php echo($chave[0]->get_id()); ?>" name="id_equipe_a">
                          <input value="0" maxlength="2" id="pontos_equipe_a" type="text" name="pontos_equipe_a" class="text-center form-control" style="border-radius: 100px; height: 60px; width: 60px;">
                        </div>
                      </div>
                    </div>
                </div>
              </div>

              <div class="col-sm-5 offset-sm-2">
                
                <div class='card' style='margin-bottom: 20px;'>
                    <div class='card-header' >
                      <div class="row">
                        <div class="col-sm-2">
                          <label>Pontos</label>
                          <input type="text" hidden value="<?php echo($chave[1]->get_id()); ?>" name="id_equipe_b">
                           <input value="0" maxlength="2" id="pontos_equipe_b" type="text" name="pontos_equipe_b" class="text-center form-control" style="border-radius: 100px; height: 60px; width: 60px;">
                        </div>
                        <div class="col-sm-10">
                          <h4 style="padding-top: 30px;" class="text-center"><?php echo $chave[1]->get_nome(); ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row" style="padding-top: 20px;">
              <div class="col-sm-5">
                
                <table class="table table-hover table-sm table-bordered">
                  <thead class="thead thead-dark">
                    <th width="2px">Nº</th>
                    <th>Atletas</th>
                    <th width="5px" class="text-center">Faltas</th>
                    <th width="1">Gols</th>

                  </thead>
                  <tbody>
                    <?php

                      foreach ($equipe_a as $key => $e) {
                        $cont = 0;
                        echo "<tr>
                                <td style='padding-top: 35px;' class='text-center'>" . $equipe_a[$key]->get_id() . "</td>
                                <td style='padding-top: 35px;'>" . $equipe_a[$key]->get_nome() . "</td>
                                <td>
                                  <table class='table table-hover table-bordered table-sm'>
                                    <thead class='thead thead-dark'>
                                      <th class='text-center'>Amarelo</th>
                                      <th class='text-center'>Vermelho</th>
                                    </thead>
                                    <tbody>
                                      <td><input value='0' type='number' max='1' min='0' name='amarelo_a" . $cont . "' class='text-center form-control'></td>
                                      <td><input value='0' type='number' max='1' min='0' name='vermelho_a" . $cont . "' class='text-center form-control'></td>
                                    </tbody>
                                  </table>
                                </td>
                                <td style='padding-top: 35px;'><input id='gols" . $cont . "' value='0' maxlength='1' type='text' class='form-control' name='gols_a" . $cont . "'></td>
                              </tr>
                              <input type='text' hidden name='id_atleta_a" . $cont . "' value='" . $equipe_a[$key]->get_id() . "'>";
                          $cont++;
                      }
                    ?>
                    <input type="text" hidden name="qtd_equipe_a" value="<?php echo $cont; ?>">
                  </tbody>
                </table>
              </div>
              <div class="col-sm-2">
              </div>
              <div class="col-sm-5">
                
                <table class="table table-hover table-sm table-bordered">
                  <thead class="thead thead-dark">
                    <th width="2px">Nº</th>
                    <th>Atletas</th>
                    <th width="5px" class="text-center">Faltas</th>
                    <th width="1">Gols</th>

                  </thead>
                  <tbody>
                    <?php
                      
                      foreach ($equipe_b as $key => $e) {
                        $cont = 0;

                        echo "<tr>
                                <td style='padding-top: 35px;' class='text-center' name='id'>" . $equipe_b[$key]->get_id() . "</td>
                                <td style='padding-top: 35px;'>" . $equipe_b[$key]->get_nome() . "</td>
                                <td>
                                  <table class='table table-hover table-bordered table-sm'>
                                    <thead class='thead thead-dark'>
                                      <th class='text-center'>Amarelo</th>
                                      <th class='text-center'>Vermelho</th>
                                    </thead>
                                    <tbody>
                                      <td><input value='0' type='number' max='1' min='0' name='amarelo_b" . $cont . "' class='text-center form-control'></td>
                                      <td><input value='0' type='number' max='1' min='0' name='vermelho_b" . $cont . "' class='text-center form-control'></td>
                                    </tbody>
                                  </table>
                                </td>
                                <td style='padding-top: 35px;'><input id='gols_b" . $cont . "' value='0' maxlength='1' type='text' class='form-control' name='gols_b" . $cont . "'></td>
                              </tr>
                              <input type='text' hidden name='id_atleta_b" . $cont . "' value=" . $equipe_b[$key]->get_id() . ">";
                        $cont++;

                      }

                    ?>
                    <input type="text" hidden name="qtd_equipe_b" value="<?php echo $cont; ?>">
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 offset-sm-4">
                <button style="margin-bottom: 30px; margin-top: 30px;" class="form-control btn btn-secondary">Gerar Súmula</button>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
            crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
            crossorigin="anonymous"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

  </body>

</html>
