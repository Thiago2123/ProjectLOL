window.onload = function() {
	createPlayerTable()
}

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
	},700)
}

function playerTableRow (players){
	var tr = document.createElement('tr');
	console.log(players)
	var nickname = players['Nome'].split(' ')[1]

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
			<i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 10 
			<i class="fas fa-shopping-cart"  style="cursor:pointer" title="Comprar"></i> 
		</div>
	</td>
	`;
	tr.innerHTML = td;

	insertTable(tr);
}

function insertTable (tr){
	var tbody = document.querySelector('#table-players tbody');
	console.log(tbody)
	tbody.appendChild(tr)
}