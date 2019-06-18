console.log("Rodou!");

function mudarForm(){
	var selectElement = document.querySelector("#ideiaCamp").value;
	console.log(selectElement);
	var divElement = document.querySelector("#mudar");
	if(selectElement == "1"){
		var conteudo1 = '<br><form><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" placeholder="Titulo da solução proposta" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" placeholder="Descrição da solução proposta" disabled></textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" placeholder="Benefícios da solução proposta" disabled></p><p>Anexo</p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></form></div>';
		divElement.innerHTML = conteudo1;
	}else if(selectElement == "2"){
		var conteudo2 = '<br><form><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" placeholder="Titulo da solução proposta" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" placeholder="Descrição da solução proposta" disabled></textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" placeholder="Benefícios da solução proposta" disabled></p><p>Anexo</p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></form></div>';
		divElement.innerHTML = conteudo2;
	}else if(selectElement == "3"){
        var conteudo3 = '<br><form><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" placeholder="Titulo da solução proposta" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" placeholder="Descrição da solução proposta" disabled></textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" placeholder="Benefícios da solução proposta" disabled></p><p>Anexo</p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></form></div>';
		divElement.innerHTML = conteudo3;
    }else if(selectElement == "4"){
        var conteudo4 ='<br><form><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" placeholder="Titulo da solução proposta" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" placeholder="Descrição da solução proposta" disabled></textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" placeholder="Benefícios da solução proposta" disabled></p><p>Anexo</p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></form></div>';
		divElement.innerHTML = conteudo4;
    }else if(selectElement == "5"){
        var conteudo5 = '<br><form><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" placeholder="Titulo da solução proposta" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" placeholder="Descrição da solução proposta" disabled></textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" placeholder="Benefícios da solução proposta" disabled></p><p>Anexo</p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></form></div>';
		divElement.innerHTML = conteudo5;
    }
} 


function mudaIdeia(){
    valorSelecionado = $('#camp_id').val();

    //quando tiver visualizando o formulário o valor fica no campo text;
    if(!valorSelecionado){
        valorSelecionado = $('#camp_id').text();
    }
    switch(valorSelecionado) {
        case "c1":
            $('#r1').show();
            $('#r2').hide();
			$('#r3').show();
			$('#r4').hide();
            $('#r5').hide();
            break;

        case "c2":
            $('#r1').hide();
            $('#r2').show();
			$('#r3').hide();
			$('#r4').hide();
            $('#r5').show();
            break;

        case "c3":
            $('#r1').hide();
            $('#r2').hide();
			$('#r3').hide();
			$('#r4').show();
            $('#r5').hide();
            break;
        default:

    }
}