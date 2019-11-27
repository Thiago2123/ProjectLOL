var user = $("#usuario-div");

window.onload = function() {
	createPlayerTable();
	console.log(user)
	user[0].textContent = `Bem-vindo ${localStorage.getItem('login')}`
}

$('#nometime').click(function(){
	$('#nometime').attr('contenteditable', true);
});

function getPlayers (){
	var players = getFullDocument('players');
	return players;
}

function createPlayerTable (){
	var testes = getPlayers();
	setTimeout(function(){
		for (var i = 0; i < Object.keys(testes).length; i++) {
			playerTableRow(testes[Object.keys(testes)[i]])
		}
	},800)
}

function playerTableRow (players){
	var tr = document.createElement('tr');
	var nickname = players['Nome'].split(' ')[1];

	var td = `<td>
	    <div class="row">
			<img src="../ProjectLOL/img/CBLOL/${players['Time'].split(' ')[0]}/${nickname}.png" class="rounded img-fluid img-player">
			<div style="text-align: left;">
			<label>${players['Nome'].split(' ')[0]} "<b class="text-info">${nickname}</b>" ${players['Nome'].split(' ')[2]} <br> <br>
			Idade: ${players['Idade']} <br>Cidade: ${players['Cidade']}</label>
		</div>
	</td>
	<td>
		<div><img src="../ProjectLOL/img/Times/${players['Time'].split(' ')[0]}.png" class="rounded img-fluid" style="width:150px; height: 90px;"></div>
	</td>
	<td>
		<div style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/${players['Rota']}.png" class="border border-secondary" style="width:40px; height: 30px"></div>
	</td>
	<td>
		<div style="margin-left: 10%;">
			<i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> ${players['Valor']}
			
			<i onClick="func(this)" class="fas fa-shopping-cart compradores" style="cursor:pointer" title="Comprar"></i> 
		</div>
	</td>`;
	tr.innerHTML = td;
	insertTable(tr);
}

function insertTable (tr){
	var tbody = document.querySelector('#table-players tbody');
	tbody.appendChild(tr)
}


function func(val) {
	var icone = '<i class="fas fa-times" style="color: red; cursor: pointer; text-shadow: 2px 2px darkred;" title="Tirar do time" onclick="remover()"></i>';
	
	var tds = val.closest('tr').querySelectorAll('td');
	var nome = tds[0].querySelector('b').textContent;
	var rota = tds[2].querySelector('img').getAttribute('src');
	var valor = tds[3].textContent

	var tabela = $("#table-time").find(`[src='${rota}']`).closest('tr')[0];

	var tabelaTd = tabela.querySelectorAll('td');

	tabelaTd[0].innerHTML = icone +' '+ nome;
	tabelaTd[2].textContent = valor;

	var comprados = $('.valor-comprados');
	var total = 0
	for (let i = 0; i<comprados.length; i++){
    	total = (+total) + (+comprados[i].textContent);
	}
	console.log(total)
	atualizaTotal(total);
}

function atualizaTotal(valor){
	var totalFinal = $("#valorteste")[0].textContent;
	fieldTotal = $('#valorTotal')[0];

	fieldTotal.textContent = (+totalFinal)-(+valor)
	
		getDbDocument('players', 'valor', fieldTotal.textContent)
		
	
}
/*
function a(){
	
	testes = getDbDocument('players', 'valor', "10")
	for (var i = 0; i < Object.keys(testes).length; i++) {
		//playerTableRow(testes[Object.keys(testes)[i]])
	}
}*/

