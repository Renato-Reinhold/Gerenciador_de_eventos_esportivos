<?php 

include_once "../controller/cadastramento_evento_controller.php";

  $controller_evento = new cadastramento_evento_controller();

  $equipes = $controller_evento->carregar_equipe_futebol();

  $modalidades = $controller_evento->carregar_modalidades();

?>

<div class="card form-row" id="template<?=$_GET['campo'] ?>" style="margin-top: 30px; padding-top: 20px;">
  <div class="row">
    <div class="col-md-3 offset-md-1">
      <h3>Modalidade</h3>
      <select id="slc_modalidades<?=$_GET['campo'] ?>" name="modalidade<?=$_GET['campo'] ?>" onchange="carregar_modalidades_js_template(<?=$_GET['campo']?>)" class="selectpicker form-control">
        <?php foreach ($modalidades as $key => $m) {
          echo "<option value=" . $modalidades[$key]->get_id() . ">" . $modalidades[$key]->get_nome() . "</option>";
         }?>
      </select>
    </div>
    <div class="col-md-5 offset-md-1">
      <h3>Equipes participantes</h3>
      <select id="slc_equipe<?=$_GET['campo'] ?>" name="equipes<?=$_GET['campo'] ?>" class="selectpicker form-control" multiple>
        <?php foreach ($equipes as $key => $e) {
          echo "<option value=" . $equipes[$key]->get_id() . ">" . $equipes[$key]->get_nome() . "</option>";
        } ?>
      </select>
    </div>
  </div>
</div>