<?php
	
	require_once '../controller/Sumula_controller.php';
	require_once '../vendor/vendor/autoload.php';

	$sumula_controller = new Sumula_controller();

	$chave = $sumula_controller->select_equipes_for_chave($_GET['chave']);

	$equipe_a = $chave[0];
	$equipe_b = $chave[1];

	$estatisticas_a = $sumula_controller->select_estatisticas_equipe($equipe_a->get_id());
	$estatisticas_b = $sumula_controller->select_estatisticas_equipe($equipe_b->get_id());

	// reference the Dompdf namespace
	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	
	$html = '

	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.css">

		<div class="container-fluid" style="margin-left: 2rem;">
			<h1 style="font-size: 20px; margin-left: 45rem;">Instituto Federal de Santa Catarina | ONE</h1>
			<div class="row">
				<div class="col-sm-2" style="margin-left: 18.1rem;">
					<input style="width: 310px; text-align: center;" value="' . $equipe_a->get_nome() . '" type="text"/>
					<input style="width: 40px; text-align: center;" value="' . $estatisticas_a[0] . '" type="text"/>
					<label style="font-size: 20px;">X</label>
					<input style="width: 40px; text-align: center;" value="' . $estatisticas_b[0] . '" type="text"/>
					<input style="width: 310px; text-align: center;" value="' . $chave[1]->get_nome() . '" type="text"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<table style="width: 75%;" class="table">
						<tbody>
							<tr>
								<td width="110" style="border: solid #212529;">Equipe "A" Saída ' . $equipe_a->get_nome() . '</td>
								<td style="border: solid #212529;">Técnico</td>
								<td style="border: solid #212529;">Capitão</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-bordered">
						<thead class="thead thead-dark">
							<tr>
								<th>Registro</th>
								<th width="200">Jogadores</th>
								<th width="20">Nº</th>
								<th colspan="5">Iniciantes</th>
								<th colspan="2">Amarelo</th>
								<th colspan="2">Vermelho</th>
								<th colspan="6">Gols</th>
							</tr>
						</thead>
						<tbody>';

						for ($i=0; $i < 6; $i++) {

							if(isset($equipe_a->get_atletas()[$i])){
								$html .= '
						
									<tr style="border:solid #212529;">
										
										<!-- registro -->
										<td></td>

										<!-- jogador -->
										<td style="border-left-style: double;">' . $equipe_a->get_atletas()[$i]->get_nome() . '</td>

										<!-- Número -->
										<td style="border:solid #212529;"></td>

										<!-- iniciantes -->
										<td width="100" style="border-left-style: double;"></td>
										<td></td>
										<td></td>
										<td></td>
										<td style="border-right-style: double;"></td>

										<!-- amarelo -->
										<td></td>
										<td style="border-left-style: dotted;"></td>

										<!-- vermelho -->
										<td style="border-left-style: double;"></td>
										<td style="border-left-style: dotted; border-right-style: double;"></td>

										<!-- gols -->
										<td width="20" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">' . ((3*$i+1)) . '</td>
										<td width="20"></td>
										<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid  #212529;">' . ((3*$i+2)) . '</td>
										<td width="20"></td>
										<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid #212529;">' . ((3*$i+3)) . '</td>
										<td width="20"></td>

									</tr>';
							}
							else{

								$html .= '
						
								<tr style="border:solid #212529;">
									
									<!-- registro -->
									<td></td>

									<!-- jogador -->
									<td style="border-left-style: double;"></td>

									<!-- Número -->
									<td style="border:solid #212529;"></td>

									<!-- iniciantes -->
									<td width="100" style="border-left-style: double;"></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="border-right-style: double;"></td>

									<!-- amarelo -->
									<td></td>
									<td style="border-left-style: dotted;"></td>

									<!-- vermelho -->
									<td style="border-left-style: double;"></td>
									<td style="border-left-style: dotted; border-right-style: double;"></td>

									<!-- gols -->
									<td width="20" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">' . ((3*$i+1)) . '</td>
									<td width="20"></td>
									<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid  #212529;">' . ((3*$i+2)) . '</td>
									<td width="20"></td>
									<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid #212529;">' . ((3*$i+3)) . '</td>
									<td width="20"></td>

								</tr>';
							}
							if(isset($equipe_a->get_atletas()[$i+1])){
								$html .= '
								<tr style="border:solid #212529;">
									<!-- registro -->
									<td></td>

									<!-- jogador -->
									<td style="border-left-style: double;">' . $equipe_a->get_atletas()[$i+1]->get_nome() . '</td>

									<!-- Número -->
									<td style="border:solid #212529;"></td>

									<!-- iniciantes -->
									<td style="border-left-style: double;"></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="border-right-style: double;"></td>

									<!-- amarelo -->
									<td></td>
									<td style="border-left-style: dotted;"></td>

									<!-- vermelho -->
									<td style="border-left-style: double;"></td>
									<td style="border-left-style: dotted; border-right-style: double;"></td>

									<!-- gols -->
									<td height="10" style="border-left-style: double;"></td>
									<td style="border-left-style: dotted;"></td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left-style: dotted;"></td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left-style: dotted;"></td>
								</tr>
								';
							}
							else{
								$html .= '
								<tr style="border:solid #212529;">
									<!-- registro -->
									<td></td>

									<!-- jogador -->
									<td style="border-left-style: double;"></td>

									<!-- Número -->
									<td style="border:solid #212529;"></td>

									<!-- iniciantes -->
									<td style="border-left-style: double;"></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="border-right-style: double;"></td>

									<!-- amarelo -->
									<td></td>
									<td style="border-left-style: dotted;"></td>

									<!-- vermelho -->
									<td style="border-left-style: double;"></td>
									<td style="border-left-style: dotted; border-right-style: double;"></td>

									<!-- gols -->
									<td height="10" style="border-left-style: double;"></td>
									<td style="border-left-style: dotted;"></td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left-style: dotted;"></td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left-style: dotted;"></td>
								</tr>
								';
							}
							
							
						}
							$html .= '
							<tr style="border:solid #212529;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid #212529;"></td>

								<!-- iniciantes -->
								<td style="border-bottom-style: double; border-left-style: double;"></td>
								<td style="border-bottom-style: double;"></td>
								<td style="border-bottom-style: double;"></td>
								<td style="border-bottom-style: double;"></td>
								<td style="border-bottom-style: double; border-right-style: double;"></td>

								<!-- amarelo -->
								<td></td>
								<td style="border-left-style: dotted;"></td>

								<!-- vermelho -->
								<td style="border-left-style: double;"></td>
								<td style="border-left-style: dotted; border-right-style: double;"></td>

								<!-- gols -->
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">19</td>
								<td width="20"></td>
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left :solid #212529;">20</td>
								<td width="20"></td>
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid #212529;">21</td>
								<td width="20"></td>
							</tr>
							<tr style="border:solid #212529;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Técnico</td>

								<!-- Número -->
								<td style="border:solid #212529;"></td>

								<!-- iniciantes -->
								<td style="border-left-style: double;"></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="border-right-style: double;"></td>

								<!-- amarelo -->
								<td></td>
								<td style="border-left-style: dotted;"></td>

								<!-- vermelho -->
								<td style="border-left-style: double;"></td>
								<td style="border-left-style: dotted; border-right-style: double;"></td>

								<!-- gols -->
								<td height="10" style="border-left-style: double;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid #212529;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">P. Físico</td>

								<!-- Número -->
								<td style="border:solid #212529;"></td>

								<!-- iniciantes -->
								<td style="border-left-style: double;"></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="border-right-style: double;"></td>

								<!-- amarelo -->
								<td></td>
								<td style="border-left-style: dotted;"></td>

								<!-- vermelho -->
								<td style="border-left-style: double;"></td>
								<td style="border-left-style: dotted; border-right-style: double;"></td>

								<!-- gols -->
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">22</td>
								<td width="20"></td>
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left :solid #212529;">23</td>
								<td width="20"></td>
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid #212529;">24</td>
								<td width="20"></td>
							</tr>
							<tr style="border:solid #212529;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Atendimento Médico</td>

								<!-- Número -->
								<td style="border:solid #212529;"></td>

								<!-- iniciantes -->
								<td style="border-left-style: double;"></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="border-right-style: double;"></td>

								<!-- amarelo -->
								<td></td>
								<td style="border-left-style: dotted;"></td>

								<!-- vermelho -->
								<td style="border-left-style: double;"></td>
								<td style="border-left-style: dotted; border-right-style: double;"></td>

								<!-- gols -->
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid #212529;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Atendimento</td>

								<!-- Número -->
								<td style="border:solid #212529;"></td>

								<!-- iniciantes -->
								<td style="border-left-style: double;"></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="border-right-style: double;"></td>

								<!-- amarelo -->
								<td></td>
								<td style="border-left-style: dotted;"></td>

								<!-- vermelho -->
								<td style="border-left-style: double;"></td>
								<td style="border-left-style: dotted; border-right-style: double;"></td>

								<!-- gols -->
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<table style="width: 75%;" class="table">
						<tbody>
							<tr>
								<td width="110" style="border: solid #212529;">Equipe "B": ' . $equipe_b->get_nome() . '</td>
								<td style="border: solid #212529;">Técnico</td>
								<td style="border: solid #212529;">Capitão</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-bordered">
						<thead class="thead thead-dark">
							<tr>
								<th>Registro</th>
								<th width="200">Jogadores</th>
								<th width="20">Nº</th>
								<th colspan="5">Iniciantes</th>
								<th colspan="2">Amarelo</th>
								<th colspan="2">Vermelho</th>
								<th colspan="6">Gols</th>
							</tr>
						</thead>
						<tbody>';
							
						for ($i=0; $i < 6; $i++) {

							if(isset($equipe_b->get_atletas()[$i])){
								$html .= '
						
									<tr style="border:solid #212529;">
										
										<!-- registro -->
										<td></td>

										<!-- jogador -->
										<td style="border-left-style: double;">' . $equipe_b->get_atletas()[$i]->get_nome() . '</td>

										<!-- Número -->
										<td style="border:solid #212529;"></td>

										<!-- iniciantes -->
										<td width="100" style="border-left-style: double;"></td>
										<td></td>
										<td></td>
										<td></td>
										<td style="border-right-style: double;"></td>

										<!-- amarelo -->
										<td></td>
										<td style="border-left-style: dotted;"></td>

										<!-- vermelho -->
										<td style="border-left-style: double;"></td>
										<td style="border-left-style: dotted; border-right-style: double;"></td>

										<!-- gols -->
										<td width="20" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">' . ((3*$i+1)) . '</td>
										<td width="20"></td>
										<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid  #212529;">' . ((3*$i+2)) . '</td>
										<td width="20"></td>
										<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid #212529;">' . ((3*$i+3)) . '</td>
										<td width="20"></td>

									</tr>';
							}
							else{

								$html .= '
						
								<tr style="border:solid #212529;">
									
									<!-- registro -->
									<td></td>

									<!-- jogador -->
									<td style="border-left-style: double;"></td>

									<!-- Número -->
									<td style="border:solid #212529;"></td>

									<!-- iniciantes -->
									<td width="100" style="border-left-style: double;"></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="border-right-style: double;"></td>

									<!-- amarelo -->
									<td></td>
									<td style="border-left-style: dotted;"></td>

									<!-- vermelho -->
									<td style="border-left-style: double;"></td>
									<td style="border-left-style: dotted; border-right-style: double;"></td>

									<!-- gols -->
									<td width="20" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">' . ((3*$i+1)) . '</td>
									<td width="20"></td>
									<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid  #212529;">' . ((3*$i+2)) . '</td>
									<td width="20"></td>
									<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid #212529;">' . ((3*$i+3)) . '</td>
									<td width="20"></td>

								</tr>';
							}
							if(isset($equipe_b->get_atletas()[$i+1])){
								$html .= '
								<tr style="border:solid #212529;">
									<!-- registro -->
									<td></td>

									<!-- jogador -->
									<td style="border-left-style: double;">' . $equipe_b->get_atletas()[$i+1]->get_nome() . '</td>

									<!-- Número -->
									<td style="border:solid #212529;"></td>

									<!-- iniciantes -->
									<td style="border-left-style: double;"></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="border-right-style: double;"></td>

									<!-- amarelo -->
									<td></td>
									<td style="border-left-style: dotted;"></td>

									<!-- vermelho -->
									<td style="border-left-style: double;"></td>
									<td style="border-left-style: dotted; border-right-style: double;"></td>

									<!-- gols -->
									<td height="10" style="border-left-style: double;"></td>
									<td style="border-left-style: dotted;"></td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left-style: dotted;"></td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left-style: dotted;"></td>
								</tr>
								';
							}
							else{
								$html .= '
								<tr style="border:solid #212529;">
									<!-- registro -->
									<td></td>

									<!-- jogador -->
									<td style="border-left-style: double;"></td>

									<!-- Número -->
									<td style="border:solid #212529;"></td>

									<!-- iniciantes -->
									<td style="border-left-style: double;"></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="border-right-style: double;"></td>

									<!-- amarelo -->
									<td></td>
									<td style="border-left-style: dotted;"></td>

									<!-- vermelho -->
									<td style="border-left-style: double;"></td>
									<td style="border-left-style: dotted; border-right-style: double;"></td>

									<!-- gols -->
									<td height="10" style="border-left-style: double;"></td>
									<td style="border-left-style: dotted;"></td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left-style: dotted;"></td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left-style: dotted;"></td>
								</tr>
								';
							}
							
							
						}
							$html .= '
							<tr style="border:solid #212529;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid #212529;"></td>

								<!-- iniciantes -->
								<td style="border-bottom-style: double; border-left-style: double;"></td>
								<td style="border-bottom-style: double;"></td>
								<td style="border-bottom-style: double;"></td>
								<td style="border-bottom-style: double;"></td>
								<td style="border-bottom-style: double; border-right-style: double;"></td>

								<!-- amarelo -->
								<td></td>
								<td style="border-left-style: dotted;"></td>

								<!-- vermelho -->
								<td style="border-left-style: double;"></td>
								<td style="border-left-style: dotted; border-right-style: double;"></td>

								<!-- gols -->
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">19</td>
								<td width="20"></td>
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left :solid #212529;">20</td>
								<td width="20"></td>
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid #212529;">21</td>
								<td width="20"></td>
							</tr>
							<tr style="border:solid #212529;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Técnico</td>

								<!-- Número -->
								<td style="border:solid #212529;"></td>

								<!-- iniciantes -->
								<td style="border-left-style: double;"></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="border-right-style: double;"></td>

								<!-- amarelo -->
								<td></td>
								<td style="border-left-style: dotted;"></td>

								<!-- vermelho -->
								<td style="border-left-style: double;"></td>
								<td style="border-left-style: dotted; border-right-style: double;"></td>

								<!-- gols -->
								<td height="10" style="border-left-style: double;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid #212529;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">P. Físico</td>

								<!-- Número -->
								<td style="border:solid #212529;"></td>

								<!-- iniciantes -->
								<td style="border-left-style: double;"></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="border-right-style: double;"></td>

								<!-- amarelo -->
								<td></td>
								<td style="border-left-style: dotted;"></td>

								<!-- vermelho -->
								<td style="border-left-style: double;"></td>
								<td style="border-left-style: dotted; border-right-style: double;"></td>

								<!-- gols -->
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">22</td>
								<td width="20"></td>
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left :solid #212529;">23</td>
								<td width="20"></td>
								<td width="20" style="text-align:center; color: white; background-color: #212529; border-left: solid #212529;">24</td>
								<td width="20"></td>
							</tr>
							<tr style="border:solid #212529;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Atendimento Médico</td>

								<!-- Número -->
								<td style="border:solid #212529;"></td>

								<!-- iniciantes -->
								<td style="border-left-style: double;"></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="border-right-style: double;"></td>

								<!-- amarelo -->
								<td></td>
								<td style="border-left-style: dotted;"></td>

								<!-- vermelho -->
								<td style="border-left-style: double;"></td>
								<td style="border-left-style: dotted; border-right-style: double;"></td>

								<!-- gols -->
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid #212529;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Atendimento</td>

								<!-- Número -->
								<td style="border:solid #212529;"></td>

								<!-- iniciantes -->
								<td style="border-left-style: double;"></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="border-right-style: double;"></td>

								<!-- amarelo -->
								<td></td>
								<td style="border-left-style: dotted;"></td>

								<!-- vermelho -->
								<td style="border-left-style: double;"></td>
								<td style="border-left-style: dotted; border-right-style: double;"></td>

								<!-- gols -->
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="margin-right: 10rem; transform: translate(50%, 75%) rotate(270deg) ">
			<div class="row">
				<div class="col-sm-12" style="margin-top: 2;">
					<div class="row">
						<div class="col-sm-8" >
							<table style="width: 49% " class="table table-bordered table-sm">
								<thead class="thead-dark thead">
									<tr>
										<th colspan="5">Identificação do jogo</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="border-bottom: solid #212529;">Competição</td>
										<td style="border-bottom: solid #212529;"></td>
										<td style="border-bottom: solid #212529;"></td>
										<td style="border-left: solid #212529; border-bottom: solid #212529;">Categoria</td>
										<td style="border-bottom: solid #212529;"></td>
									</tr>
									<tr>
										<td style="border-left: solid #212529; border-bottom: solid #212529;">Nº jogo</td>
										<td style="border-left: solid #212529; border-bottom: solid #212529;">Grupo</td>
										<td style="border-left: solid #212529; border-bottom: solid #212529;">Fase</td>
										<td style="border-left: solid #212529; border-bottom: solid #212529;">Chave</td>
										<td style="border-left: solid #212529; border-bottom: solid #212529;">Data</td>
									</tr>
									<tr>
										<td style="border-left: solid #212529;">Ginásio</td>
										<td></td>
										<td style="border-left: solid #212529;">Cidade</td>
										<td></td>
										<td style="border-left: solid #212529;">UF</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-8">
							<table style="width: 49%;" class="table table-bordered table-sm">
								<thead class="thead-dark thead">
									<tr>
										<th colspan="2">Equipe de arbitragem</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="border-bottom: solid #212529;"></td>
										<td style="border-left: solid #212529; border-bottom: solid #212529;">Atributo 1</td>
									<tr>
										<td style="border-bottom: solid #212529;"></td>
										<td style="border-left: solid #212529; border-bottom: solid #212529;">Atributo 2</td>
									</tr>
									<tr>
										<td style="border-left: solid #212529; border-bottom: solid #212529;"></td>
										<td style="border-left: solid #212529;border-bottom: solid #212529;">Anotador</td>
									</tr>
									<tr>
										<td style="border-left: solid #212529; border-bottom: solid #212529;"></td>
										<td style="border-left: solid #212529; border-bottom: solid #212529;">Cronometrista</td>
									</tr>
									<tr>
										<td style="border-left: solid #212529; border-bottom: solid #212529;"></td>
										<td style="border-left: solid #212529; border-bottom: solid #212529;">Delegado</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="margin-right: 10rem; transform: translate(92%, 43%) ">
			<div class="row">
				<div class="col-sm-2">
					<div class="row">
						<table style="width: 18%;" class="table table-bordered table-sm">
							<thead class="thead thead-dark">
								<tr>
									<th>Hórario</th>
									<th>Início</th>
									<th>Término</th>
								</tr>
							</thead>
							<tbody>
								<tr style="border: solid #212529;">
									<td>1º Período</td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left: solid #212529;"></td>
								</tr>
								<tr style="border: solid #212529;">
									<td>2º Período</td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left: solid #212529;"></td>
								</tr>
								<tr style="border: solid #212529;">
									<td>Período extra</td>
									<td style="border-left: solid #212529;"></td>
									<td style="border-left: solid #212529;"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="row">
						<table style="width: 18%;" class="table table-bordered table-sm">
							<thead class="thead thead-dark">
								<tr>
									<th colspan="4">Contagem</th>
								</tr>
							</thead>
							<tbody>
								<tr style="border: solid #212529;">
									<td width="100">1º Período</td>
									<td style="border-left: solid #212529;"></td>
									<td width="1" style="background-color: #212529; color: white; text-align:center;">X</td>
									<td style="border-left: solid #212529;"></td>
								</tr>
								<tr style="border: solid #212529;">
									<td>2º Período</td>
									<td style="border-left: solid #212529;"></td>
									<td style="background-color: #212529; color:white; text-align:center;">X</td>
									<td style="border-left: solid #212529;"></td>
								</tr>
								<tr style="border: solid #212529;">
									<td>Período extra</td>
									<td style="border-left: solid #212529;"></td>
									<td style="background-color: #212529; color: white; text-align:center;">X</td>
									<td style="border-left: solid #212529;"></td>
								</tr>
								<tr>
									<td>Final</td>
									<td style="border-left: solid #212529;"></td>
									<td style="background-color: #212529; color: white;" text-align:center;>X</td>
									<td style="border-left: solid #212529;"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div style="transform: translate(2%, 20%);">
			<img src="../imagem/one_sumula.png" width="90"></img>
		</div>
		
		<div style="transform: translate(95%, -90%)">
			<img src="../imagem/ifsc.png" width="40"></img>
		</div>

		<div class="row" style="transform: transform: translate(30.5%, -288%) rotate(270deg);">
			<div class="col-sm-2" style="text-align: center;">
				<table style="width: 15%;" class="table table-sm table-bordered">
					<thead  class="thead thead-dark">
						<tr>
							<th colspan="3">Pedidos de tempo</th>
						</tr>
					</thead>
					<tbody>
						<tr style="border: solid #212529;">
							<td width="20" style="border-left: solid #212529;">1º Período</td>
							<td width="20" style="border-left: solid #212529;">2º Período</td>
							<td width="20" style="border-left: solid #212529;">Período extra</td>
						</tr>
						<tr style="border: solid #212529;">
							<td height="9.5" style="border-left: solid #212529;"></td>
							<td style="border-left: solid #212529;"></td>
							<td style="border-left: solid #212529;"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-2">
				<table class="table table-sm table-bordered" style="transform: translate(100%, 0%); width: 15%; text-align: center;">
					<thead class="thead thead-dark">
						<tr>
							<th colspan="7">Faltas Acumuladas</th>
						</tr>
					</thead>
					<tbody>
						<tr style="border: solid #212529;">
							<td style="border-left: solid #212529;">1º Período</td>
							<td style="border-left: solid #212529;">1</td>
							<td style="border-left: solid #212529;">2</td>
							<td style="border-left: solid #212529;">3</td>
							<td style="border-left: solid #212529;">4</td>
							<td style="border-left: solid #212529;">5</td>
							<td style="border-left: solid #212529;">6</td>
						</tr>
						<tr style="border: solid #212529;">
							<td style="border-left: solid #212529;">2º Período</td>
							<td style="border-left: solid #212529;">1</td>
							<td style="border-left: solid #212529;">2</td>
							<td style="border-left: solid #212529;">3</td>
							<td style="border-left: solid #212529;">4</td>
							<td style="border-left: solid #212529;">5</td>
							<td style="border-left: solid #212529;">6</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="row" style="transform: transform: translate(29.8%, -98%) rotate(270deg);">
				<div class="col-sm-2" style="text-align: center;">
					<table style="width: 15%;" class="table table-sm table-bordered">
						<thead  class="thead thead-dark">
							<tr>
								<th colspan="3">Pedidos de tempo</th>
							</tr>
						</thead>
						<tbody>
							<tr style="border: solid #212529;">
								<td width="20" style="border-left: solid #212529;">1º Período</td>
								<td width="20" style="border-left: solid #212529;">2º Período</td>
								<td width="20" style="border-left: solid #212529;">Período extra</td>
							</tr>
							<tr style="border: solid #212529;">
								<td height="9.5" style="border-left: solid #212529;"></td>
								<td style="border-left: solid #212529;"></td>
								<td style="border-left: solid #212529;"></td>
							</tr>
						</tbody>
					</table>
				</div>
			<div class="col-sm-2">
				<table class="table table-sm table-bordered" style="transform: translate(100%, 0%); width: 15%; text-align: center;">
					<thead class="thead thead-dark">
						<tr>
							<th colspan="7">Faltas Acumuladas</th>
						</tr>
					</thead>
					<tbody>
						<tr style="border: solid #212529;">
							<td style="border-left: solid #212529;">1º Período</td>
							<td style="border-left: solid #212529;">1</td>
							<td style="border-left: solid #212529;">2</td>
							<td style="border-left: solid #212529;">3</td>
							<td style="border-left: solid #212529;">4</td>
							<td style="border-left: solid #212529;">5</td>
							<td style="border-left: solid #212529;">6</td>
						</tr>
						<tr style="border: solid #212529;">
							<td style="border-left: solid #212529;">2º Período</td>
							<td style="border-left: solid #212529;">1</td>
							<td style="border-left: solid #212529;">2</td>
							<td style="border-left: solid #212529;">3</td>
							<td style="border-left: solid #212529;">4</td>
							<td style="border-left: solid #212529;">5</td>
							<td style="border-left: solid #212529;">6</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	';

	$dompdf->loadHtml($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream('Sumula.pdf');

	header("location: lista_eventos.php");