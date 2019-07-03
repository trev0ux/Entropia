console.log("Rodou!");

function mudarForm(){
	var selectElement = document.querySelector("#ideiaCamp").value;
	console.log(selectElement);
	var divElement = document.querySelector("#mudar");
	if(selectElement == "1"){
        var conteudo1 = '<form method="post" action=""><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" value="controle de água" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" disabled>diminuir o gasto de água na empresa</textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" value="economia na conta de água" disabled></p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea></p><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></div></form>';
        divElement.innerHTML = conteudo1;
    }else if(selectElement == "2"){
        var conteudo2 = '<form method="post" action=""><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" value="reutilizar papel" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" disabled>imprimir folhas frente e verso</textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" value="diminuir gastos com papel" disabled></p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea></p><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></div></form>';
        divElement.innerHTML = conteudo2;
    }else if(selectElement == "3"){
        var conteudo3 = '<form method="post" action=""><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" value="cidades sensiveis" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" disabled>cidades que aumentam a participação do cidadão</textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" value="aumentar o lucro" disabled></p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea></p><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></div></form>';
        divElement.innerHTML = conteudo3;
    }else if(selectElement == "4"){
        var conteudo4 ='<form method="post" action=""><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" value="pareceira com empresas de energia" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" disabled>diminuir gastos com a energia da empresa</textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" value="reenvestir na organização" disabled></p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea></p><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></div></form>';
        divElement.innerHTML = conteudo4;
    }else if(selectElement == "5"){
        var conteudo5 = '<form method="post" action=""><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" value="realidade aumentada" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" disabled>facilitar a elaboração de novas pesquisas</textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" value="lucro imediato para empresa" disabled></p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea></p><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></div></form>';
        divElement.innerHTML = conteudo5;
    }else if(selectElement == "6"){
        var conteudo5 = '<form method="post" action=""><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" value="palestras de conscientização" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" disabled>promover debates e alavancar o conhecimmento dentro do ambiente de trabalho</textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" value="agregar valor e conhecimento aos funcionários" disabled></p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea></p><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></div></form>';
        divElement.innerHTML = conteudo6;
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
            $('#r1').hide();
            $('#r2').hide();
			$('#r3').show();
			$('#r4').hide();
            $('#r5').show();
			$('#r6').hide();
            break;

        case "c2":
            $('#r1').show();
            $('#r2').hide();
			$('#r3').hide();
			$('#r4').show();
            $('#r5').hide();
			$('#r6').hide();
            break;

        case "c3":
            $('#r1').hide();
            $('#r2').show();
			$('#r3').hide();
			$('#r4').hide();
            $('#r5').hide();
			$('#r6').show();
            break;
		 case "c4":
            $('#r1').hide();
            $('#r2').hide();
			$('#r3').hide();
			$('#r4').hide();
            $('#r5').hide();
			$('#r6').hide();
            break;
        default:

    }
}
