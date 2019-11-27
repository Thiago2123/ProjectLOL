
function getLigas(){
	var ligas = getFullDocument('Ligas');
	return ligas;
}

function createLigasTable (){
	var todasligas = getLigas();
	setTimeout(function(){
		for (var i = 0; i < Object.keys(todasligas).length; i++) {
			LigasTableRow(todasligas[Object.keys(todasligas)[i]])
		}
	},800)
}