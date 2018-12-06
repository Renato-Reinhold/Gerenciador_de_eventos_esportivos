url_base = '/projeto-integrador/admin/'


function carregar_modalidades_js(){
	mod_id = $("#slc_modalidades").val();
	$.get(url_base+"controller/cadastramento_evento_controller.php?mod=" + mod_id , function(data){
		$("#slc_equipe").selectpicker('destroy');
		$("#slc_equipe").empty();
		$("#slc_equipe").append(data);
		$("#slc_equipe").selectpicker();
	});

}

function carregar_modalidades_js_template(numero){
	mod_id = $("#slc_modalidades" + numero).val();
	$.get(url_base+"controller/cadastramento_evento_controller.php?mod=" + mod_id , function(data){
		$("#slc_equipe" + numero).selectpicker('destroy');
		$("#slc_equipe" + numero).empty();
		$("#slc_equipe" + numero).append(data);
		$("#slc_equipe" + numero).selectpicker();
	});

}

function gerar_campos(){

	campo = $("#qtd_torneios").val();
	$.get(url_base+"controller/gerador_campo.php?campo=" +  campo, function(data){
		num = 0;
		for(i = 0; i <= campo; i++){
			num += $("#template" + i).length;
		}
			if(num + 1 == campo){
				$("#template" + i).remove();
				$("select").selectpicker('update');
			}
			else{
				$("#campos").append(data);
				$("#template" + campo).hide();
        		$("#template" + campo).show("slow");
				$("select").selectpicker('update');
			}
		
	});

}