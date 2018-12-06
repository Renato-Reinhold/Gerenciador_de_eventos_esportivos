<?php

	require_once '../vendor/vendor/autoload.php';
	// reference the Dompdf namespace
	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();

	$dompdf->loadHtml('

		<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.css">
		<style>
			
		</style>

		<div class="container-fluid" style="margin-left: 2rem;">
			<h1 style="font-size: 20px; margin-left: 45rem;">Instituto Federal de Santa Catarina | ONE</h1>
			<div class="row">
				<div class="col-sm-2" style="margin-left: 18.1rem;">
					<input style="width: 300px; font-size: 10px;" value="" type="text"/>
					<input style="width: 40px;" type="text"/>
					<label style="font-size: 30px;">X</label>
					<input style="width: 40px;" type="text"/>
					<input style="width: 300px;" type="text"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<table style="width: 75.7%;" class="table">
						<tbody>
							<tr>
								<td width="110" style="border: solid;">Equipe "A" Saída 0</td>
								<td style="border: solid;">Técnico</td>
								<td style="border: solid;">Capitão</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-bordered">
						<thead class="thead thead-dark">
							<tr>
								<th>Registro</th>
								<th width="200">Jogadores</th>
								<th width="30">Nº</th>
								<th colspan="5">Iniciantes</th>
								<th colspan="2">Amarelo</th>
								<th colspan="2">Vermelho</th>
								<th colspan="6">Gols</th>
							</tr>
						</thead>
						<tbody>
							<tr style="border:solid;">
								
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">01</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">02</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">03</td>
								<td width="30"></td>

							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border: solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">04</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">05</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">06</td>
								<td width="30"></td>

							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td  width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">07</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">08</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">09</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>

							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">10</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">11</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">12</td>
								<td width="30"></td>

							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left-style: dotted;"></td>

								<!-- gols -->
								<td height="10" style="border-left-style: double;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">13</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">14</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">15</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">16</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">17</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">18</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">19</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">20</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">21</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Técnico</td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">P. Físico</td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">22</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">23</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">24</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Atendimento Médico</td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Atendimento</td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<table style="width: 75.7%;" class="table">
						<tbody>
							<tr>
								<td width="110" style="border: solid;">Equipe "B" Saída 0</td>
								<td style="border: solid;">Técnico</td>
								<td style="border: solid;">Capitão</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-bordered">
						<thead class="thead thead-dark">
							<tr>
								<th>Registro</th>
								<th width="200">Jogadores</th>
								<th width="30">Nº</th>
								<th colspan="5">Iniciantes</th>
								<th colspan="2">Amarelo</th>
								<th colspan="2">Vermelho</th>
								<th colspan="6">Gols</th>
							</tr>
						</thead>
						<tbody>
							<tr style="border:solid;">
								
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">01</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">02</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">03</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border: solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">04</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">05</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">06</td>
								<td width="30"></td>

							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td  width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">07</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">08</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">09</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>

							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">10</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">11</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">12</td>
								<td width="30"></td>

							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left-style: dotted;"></td>

								<!-- gols -->
								<td height="10" style="border-left-style: double;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">13</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">14</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">15</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">16</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">17</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">18</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;"></td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">19</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">20</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">21</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Técnico</td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">P. Físico</td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left-style: double;">22</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left :solid;">23</td>
								<td width="30"></td>
								<td width="30" style="text-align:center; color: white; background-color: #212529; border-left: solid;">24</td>
								<td width="30"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Atendimento Médico</td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
							<tr style="border:solid;">
								<!-- registro -->
								<td></td>

								<!-- jogador -->
								<td style="border-left-style: double;">Atendimento</td>

								<!-- Número -->
								<td style="border:solid;"></td>

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
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
								<td style="border-left: solid;"></td>
								<td style="border-left-style: dotted;"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="margin-right: 10rem; transform: translate(50%, 79%) rotate(270deg) ">
			<div class="row">
				<div class="col-sm-12" style="margin-top: 2;">
					<div class="row">
						<div class="col-sm-8" >
							<table style="width: 50% " class="table table-bordered table-sm">
								<thead class="thead-dark thead">
									<tr>
										<th colspan="5">Identificação do jogo</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="border-bottom: solid;">Competição</td>
										<td style="border-bottom: solid;"></td>
										<td style="border-bottom: solid;"></td>
										<td style="border-left: solid; border-bottom: solid;">Categoria</td>
										<td style="border-bottom: solid;"></td>
									</tr>
									<tr>
										<td style="border-left: solid; border-bottom: solid;">Nº jogo</td>
										<td style="border-left: solid; border-bottom: solid;">Grupo</td>
										<td style="border-left: solid; border-bottom: solid;">Fase</td>
										<td style="border-left: solid; border-bottom: solid;">Chave</td>
										<td style="border-left: solid; border-bottom: solid;">Data</td>
									</tr>
									<tr>
										<td style="border-left: solid;">Ginásio</td>
										<td></td>
										<td style="border-left: solid;">Cidade</td>
										<td></td>
										<td style="border-left: solid;">UF</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-8">
							<table style="width: 50%;" class="table table-bordered table-sm">
								<thead class="thead-dark thead">
									<tr>
										<th colspan="2">Equipe de arbitragem</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="border-bottom: solid;"></td>
										<td style="border-left: solid; border-bottom: solid;">Atributo 1</td>
									<tr>
										<td style="border-bottom: solid;"></td>
										<td style="border-left: solid; border-bottom: solid;">Atributo 2</td>
									</tr>
									<tr>
										<td style="border-left: solid; border-bottom: solid;"></td>
										<td style="border-left: solid;border-bottom: solid;">Anotador</td>
									</tr>
									<tr>
										<td style="border-left: solid; border-bottom: solid;"></td>
										<td style="border-left: solid; border-bottom: solid;">Cronometrista</td>
									</tr>
									<tr>
										<td style="border-left: solid; border-bottom: solid;"></td>
										<td style="border-left: solid; border-bottom: solid;">Delegado</td>
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
								<tr style="border: solid;">
									<td>1º Período</td>
									<td style="border-left: solid;"></td>
									<td style="border-left: solid;"></td>
								</tr>
								<tr style="border: solid;">
									<td>2º Período</td>
									<td style="border-left: solid;"></td>
									<td style="border-left: solid;"></td>
								</tr>
								<tr style="border: solid;">
									<td>Período extra</td>
									<td style="border-left: solid;"></td>
									<td style="border-left: solid;"></td>
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
								<tr style="border: solid;">
									<td width="100">1º Período</td>
									<td style="border-left: solid;"></td>
									<td width="1" style="background-color: #212529; color: white; text-align:center;">X</td>
									<td style="border-left: solid;"></td>
								</tr>
								<tr style="border: solid;">
									<td>2º Período</td>
									<td style="border-left: solid;"></td>
									<td style="background-color: #212529; color:white; text-align:center;">X</td>
									<td style="border-left: solid;"></td>
								</tr>
								<tr style="border: solid;">
									<td>Período extra</td>
									<td style="border-left: solid;"></td>
									<td style="background-color: #212529; color: white; text-align:center;">X</td>
									<td style="border-left: solid;"></td>
								</tr>
								<tr>
									<td>Final</td>
									<td style="border-left: solid;"></td>
									<td style="background-color: #212529; color: white;" text-align:center;>X</td>
									<td style="border-left: solid;"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div style="transform: translate(2%, 30%);">
			<img src="../imagem/one_sumula.png" width="90"></img>
		</div>
		
		<div style="transform: translate(95%, -90%)">
			<img src="../imagem/ifsc.png" width="40"></img>
		</div>

		<div class="row" style="transform: transform: translate(30.5%, -285%) rotate(270deg);">
			<div class="col-sm-2" style="text-align: center;">
				<table style="width: 15%;" class="table table-sm table-bordered">
					<thead  class="thead thead-dark">
						<tr>
							<th colspan="3">Pedidos de tempo</th>
						</tr>
					</thead>
					<tbody>
						<tr style="border: solid;">
							<td width="30" style="border-left: solid;">1º Período</td>
							<td width="30" style="border-left: solid;">2º Período</td>
							<td width="30" style="border-left: solid;">Período extra</td>
						</tr>
						<tr style="border: solid;">
							<td height="9.5" style="border-left: solid;"></td>
							<td style="border-left: solid;"></td>
							<td style="border-left: solid;"></td>
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
						<tr style="border: solid;">
							<td style="border-left: solid;">1º Período</td>
							<td style="border-left: solid;">1</td>
							<td style="border-left: solid;">2</td>
							<td style="border-left: solid;">3</td>
							<td style="border-left: solid;">4</td>
							<td style="border-left: solid;">5</td>
							<td style="border-left: solid;">6</td>
						</tr>
						<tr style="border: solid;">
							<td style="border-left: solid;">2º Período</td>
							<td style="border-left: solid;">1</td>
							<td style="border-left: solid;">2</td>
							<td style="border-left: solid;">3</td>
							<td style="border-left: solid;">4</td>
							<td style="border-left: solid;">5</td>
							<td style="border-left: solid;">6</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="row" style="transform: transform: translate(29.8%, -93%) rotate(270deg);">
			<div class="col-sm-2" style="text-align: center;">
				<table style="width: 15%;" class="table table-sm table-bordered">
					<thead  class="thead thead-dark">
						<tr>
							<th colspan="3">Pedidos de tempo</th>
						</tr>
					</thead>
					<tbody>
						<tr style="border: solid;">
							<td width="30" style="border-left: solid;">1º Período</td>
							<td width="30" style="border-left: solid;">2º Período</td>
							<td width="30" style="border-left: solid;">Período extra</td>
						</tr>
						<tr style="border: solid;">
							<td height="9.5" style="border-left: solid;"></td>
							<td style="border-left: solid;"></td>
							<td style="border-left: solid;"></td>
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
						<tr style="border: solid;">
							<td style="border-left: solid;">1º Período</td>
							<td style="border-left: solid;">1</td>
							<td style="border-left: solid;">2</td>
							<td style="border-left: solid;">3</td>
							<td style="border-left: solid;">4</td>
							<td style="border-left: solid;">5</td>
							<td style="border-left: solid;">6</td>
						</tr>
						<tr style="border: solid;">
							<td style="border-left: solid;">2º Período</td>
							<td style="border-left: solid;">1</td>
							<td style="border-left: solid;">2</td>
							<td style="border-left: solid;">3</td>
							<td style="border-left: solid;">4</td>
							<td style="border-left: solid;">5</td>
							<td style="border-left: solid;">6</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	');

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream('Sumula.pdf', array('Attachment' => 0));