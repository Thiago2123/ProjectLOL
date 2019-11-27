window.onload = function() {
    user = $("#usuario-div");
    user[0].textContent = `Bem-vindo ${localStorage.getItem('login')}`

    createLigasTable();
}

function getLigas(){
	ligas = getFullDocument('Ligas');
	return ligas;
}

function createLigasTable (){
	todasligas = getLigas();
	setTimeout(function(){
		for (var i = 0; i < Object.keys(todasligas).length; i++) {
			criartabelaLigas(todasligas[Object.keys(todasligas)[i]])
		}
	},800)
}

function criartabelaLigas(ligas){
    tr = document.createElement('tr');
    nome = ligas['Nome'];
        
    var LinhaLigas = `<tr>
        <td>${nome}</td>              
        <td>
            ${ligas['Pessoas'].length} 
            <i onClick="$('#modal_info_liga').modal('show')" class="fas fa-external-link-alt" style="cursor:pointer" title="Info da liga"></i> 
        </td>
    </tr>`;
    tr.innerHTML = LinhaLigas;
	inserirTabelaLigas(tr);
}

function inserirTabelaLigas (tr){
	var tbody = document.querySelector('#table-ligas tbody');
	tbody.appendChild(tr)
}

function criartabelaLigasResumo(ligas){
    var LinhaLigasResumo = `<div class="modal fade" id="modal_info_liga" >
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="border mt-4 ml-3 mr-3 row ">
                                <div class="col-10" style="height: 100px;">
                                    <h4>Liga Champions</h4>
                                    <p>Liga criada para fãs que gostam de uma boa parida de league of legends, pegando seu persongem preferido.</p>
                                        <i class="fas fa-users" style="color: green"> 200</i>
                                    <label class="d-flex justify-content-end" style="margin: -2%"> Criado em: 01/05/2018</label>
                                </div>
                            </div>        
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" onclick="$('#modal_info_liga').modal('hide')"><i class="fas fa-arrow-circle-left"></i> Fechar</button>
                        <button type="button" class="btn btn-success" onclick="$('#modal_info_liga').modal('hide');  $.notify({icon: 'fas fa-check-circle', message: 'Participando da liga'})"><i class="fas fa-sign-in-alt"></i> Entrar na liga</button>
                    </div>
                </div>
            </div>
        </div>`
    tr.innerHTML = LinhaLigasResumo;
    inserirTabelaLigas(tr);

}

function inserirTabelaLigas (tr){
	var tbody = document.querySelector('#table-ligas tbody');
	tbody.appendChild(tr)
}