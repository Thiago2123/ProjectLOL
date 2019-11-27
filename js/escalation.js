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


	user[0].textContent = `Bem-vindo ${localStorage.getItem('login')}`

	createPlayerTable()
}

$('#nometime').click(function(){
	$('#nometime').attr('contenteditable', true);
});

function getPlayers (){
	var players = getFullDocument('players');
	return players;
}

function getUserData (){
	var money = $("#valorteste");
	var moneyUser = getDbDocument('users', 'name', localStorage.getItem('login'));


	setTimeout(function(){
	money[0].innerHTML = `<i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> ${Object.values(moneyUser)[0]['Valor']}` 	
	
	var teamList = Object.keys(Object.values(moneyUser)[0]['time'])

	var items = Object.values(moneyUser)[0]['time']

	for (var i = 0; i < teamList.length; i++) {
		if (teamList[i] != 'Nome'){
			if (items[teamList[i]] != ""){
				console.log(teamList[i].indexOf('Valor'))
				console.log(teamList[i])
				if (+teamList[i].indexOf('Valor') >= 0){
					$('#'+teamList[i])[0].textContent = items[teamList[i]]
				}
				if (+teamList[i].indexOf('Valor') < 0){
					$('#'+teamList[i])[0].innerHTML = `<i class="fas fa-times" style="color: red; cursor: pointer; text-shadow: 2px 2px darkred;" title="Tirar do time" onclick="remover(this)"></i> ${items[teamList[i]]}`
				}
			}
		}
	}
		localStorage.setItem('id',Object.keys(moneyUser)[0])
	valoresParaTotal()

	}, 500)
}

function createPlayerTable (){
	var testes = getPlayers();
	setTimeout(function(){
		for (var i = 0; i < Object.keys(testes).length; i++) {
			playerTableRow(testes[Object.keys(testes)[i]])
		}
		getUserData();
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
	atualizaTotal(total);
}

function atualizaTotal(valor){
	var totalFinal = $("#valorteste")[0].textContent;

	var fieldTotal = $('#valorTotal')[0];

	var val = (+totalFinal)-(+valor);

	fieldTotal.textContent = val;

	checaValores(val);
}

function checaValores(valor){
	var a = $('#table-players tbody tr');
	console.log(a)
	for(var i = 0; i<a.length ; i++){
		console.log('AAAAAAAAAAAAAA')
		var td = a[i].querySelectorAll('td');
		var val = a[i].querySelectorAll('td')[3].textContent
		console.log(val)
		a[i].querySelectorAll('td')[3].querySelectorAll('i')[1].style['color'] = 'white';
		a[i].querySelectorAll('td')[3].querySelectorAll('i')[1].style['cursor'] = 'pointer';
		a[i].querySelectorAll('td')[3].querySelectorAll('i')[1].setAttribute("onclick","func(this)");
		if(+val > (+valor)){
			a[i].querySelectorAll('td')[3].querySelectorAll('i')[1].style['color'] = 'grey';
			a[i].querySelectorAll('td')[3].querySelectorAll('i')[1].style['cursor'] = '';
			a[i].querySelectorAll('td')[3].querySelectorAll('i')[1].removeAttribute("onclick");
		}


	}
	
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
	for (var i = 0; i< times.length; i++){
		if(times[i].textContent.indexOf('Adicione') > 0){
			alert(times[i].textContent);
			return
		}
	}

	var top = document.querySelector('#table-time #Top').textContent;
	var jg = document.querySelector('#table-time #Jg').textContent;
	var mid = document.querySelector('#table-time #Mid').textContent;
	var bot = document.querySelector('#table-time #Bot').textContent;
	var sup = document.querySelector('#table-time #Sup').textContent;

	var topValue = document.querySelector('#table-time #Valor-Top').textContent;
	var jgValue = document.querySelector('#table-time #Valor-Jg').textContent;
	var midValue = document.querySelector('#table-time #Valor-Mid').textContent;
	var botValue = document.querySelector('#table-time #Valor-Bot').textContent;
	var supValue = document.querySelector('#table-time #Valor-Sup').textContent;

	obj = 	{'time': 
				{'Top': top,
				'Jg': jg,
				'Mid': mid,
				'Bot': bot,
				'Sup': sup,
				'Valor-Top': topValue,
				'Valor-Jg': jgValue,
				'Valor-Mid': midValue,
				'Valor-Bot': botValue,
				'Valor-Sup': supValue}}

	updateDb('users', obj, localStorage.getItem('id'))

}
