function pesquisa(){
	var selectElement = document.querySelector("#camp").value;
	console.log(selectElement);
	var divElement = document.querySelector("#mudatab");
    if (selectElement == "i2"){
		 var conteudo = '<table class="table"><thead class="thead-light"><tr><th scope="col">Campanhas Salvas</th></tr></thead><tbody><tr><td>Campanha 1</td></tr><tr><td>Campanha 2</td></tr><tr><td>Campanha 3</td></tr><tr><td>Campanha 4</td></tr><tr><td>Campanha 5</td></tr><tr><td>Campanha 6</td></tr></tbody></table>';
        divElement.innerHTML = conteudo;
	}
}