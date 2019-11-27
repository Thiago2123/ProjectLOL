window.onload = function() {
	var user = $("#usuario-div");
	var money = $("#valorteste");
	createPlayerTable()
	user[0].textContent = `Bem-vindo ${localStorage.getItem('login')}`

	setTimeout(function(){
		var moneyUser = getDbDocument('users', 'name', localStorage.getItem('login'));

		setTimeout(function(){
		money[0].innerHTML = `<i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> ${Object.values(moneyUser)[0]['Valor']}` 	
		
		var teamList = Object.keys(Object.values(moneyUser)[0]['time'])

		var items = Object.values(moneyUser)[0]['time']

		for (var i = 0; i < teamList.length; i++) {
			if (teamList[i] != 'Nome'){
				if (items[teamList[i]] != ""){
					if (items[teamList[i]].indexOf('Valor') >= 0){
						$('#'+teamList[i])[0].textContent = items[teamList[i]]
					}
					if (items[teamList[i]].indexOf('Valor') < 0){
						$('#'+teamList[i])[0].innerHTML = `<i class="fas fa-times" style="color: red; cursor: pointer; text-shadow: 2px 2px darkred;" title="Tirar do time" onclick="remover(this)"></i> ${items[teamList[i]]}`
					}
				}
			}
		}
		}, 300)
	
		}, 500)



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
	var icone = '<i class="fas fa-times" style="color: red; cursor: pointer; text-shadow: 2px 2px darkred;" title="Tirar do time" onclick="remover(this)"></i>';
	
	var tds = val.closest('tr').querySelectorAll('td');
	var nome = tds[0].querySelector('b').textContent;
	var rota = tds[2].querySelector('img').getAttribute('src');
	var valor = tds[3].textContent

	var tabela = $("#table-time").find(`[src='${rota}']`).closest('tr')[0];

	var tabelaTd = tabela.querySelectorAll('td');

	tabelaTd[0].innerHTML = icone +' '+ nome;
	tabelaTd[2].textContent = valor;

	valoresParaTotal()
}

function valoresParaTotal(){
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

	var fieldTotal = $('#valorTotal')[0];

	fieldTotal.textContent = (+totalFinal)-(+valor)
}



function remover(val){
	var obj = {	'../ProjectLOL/img/Rotas/Top.png': 'Topo', 
			'../ProjectLOL/img/Rotas/Jg.png': 'Selva',
			'../ProjectLOL/img/Rotas/Mid.png': 'Meio',
			'../ProjectLOL/img/Rotas/Bot.png': 'Atirador',
			'../ProjectLOL/img/Rotas/Sup.png': 'Suporte'}

	var tds = val.closest('tr').querySelectorAll('td');

	var rota = tds[1].querySelector('img').getAttribute('src')

	tds[0].innerHTML = `<b class="text-success"> Adicione um ${obj[rota]} </b>`

	tds[2].textContent = 0

	valoresParaTotal()
}

function salvar_time() {
	var times = document.querySelectorAll('#table-time tbody tr td');
	times.forEach(function(time){
		console.log(time.textContent)
	})
	console.log(times)
}
