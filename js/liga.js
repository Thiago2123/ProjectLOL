window.onload = function() {
    var user = $("#usuario-div");
    user[0].textContent = `Bem-vindo ${localStorage.getItem('login')}`

    createLigasTable();
}

function getLigas(){
	var ligas = getFullDocument('Ligas');
	return ligas;
}

function createLigasTable (){
	var todasligas = getLigas();
	setTimeout(function(){
		for (var i = 0; i < Object.keys(todasligas).length; i++) {
			criartabelaLigas(todasligas[Object.keys(todasligas)[i]])
		}
	},800)
}

function criartabelaLigas(ligas){
    var tr = document.createElement('tr');
    var nome = ligas['Nome'];
        
    var LinhaLigas = `<tr>
        <td>${nome}</td>              
        <td>
            ${ligas['Pessoas'].length} 
            <i onClick="$('#modal_info_liga').modal('show')" class="fas fa-external-link-alt" style="cursor:pointer" title="Info da liga"></i> 
        </td>
    </tr>`;
    tr.innerHTML = LinhaLigas;
	insertTable(tr);
}

function insertTable (tr){
	var tbody = document.querySelector('#table-ligas tbody');
	tbody.appendChild(tr)
}