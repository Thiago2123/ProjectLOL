var obj = {"0":{"name":"pedro","email":"pedrod.ss@hotmail.com", "password":"2131"}}

function teste(){
	var id = +Object.keys(obj)[Object.keys(obj).length-1]+1;
	var name = document.querySelector("#cad_nome").value;
	var email = document.querySelector("#cad_email").value;
	var senha = document.querySelector("#cad_senha").value;
	
	removeClass("#cad_nome", "input-empty");
	removeClass("#cad_email", "input-empty");
	removeClass("#cad_senha", "input-empty");

	var errors = checkEmpty(name, email, senha);
	if (errors.length > 0){
		var ItemWithError = document.querySelector("#"+errors);
		ItemWithError.classList.add("input-empty");
		return;
	}

	obj[id] ={
		'name': name,
		'email': email,
		'password': senha
		};
}

function checkEmpty(name, email, senha){
	errorList = []
	if (name.length == 0){
		return "cad_nome";
	}
	if (email.length == 0){
		return "cad_email";
	}
	if (senha.length == 0){
		return "cad_senha";
	}
	return ""
}

function removeClass(id, classe) {
	document.querySelector(id).classList.remove(classe);
}

function sendCheck() {
	var username = document.querySelector("#email").value;
	var senha = document.querySelector("#senha").value;

	checkLogin(username, senha)
	// body...
}
function checkLogin(username, senha){
	console.log(username)
	Object.keys(obj).forEach(
		function(key){
			if (obj[key]['email'] == username){
				if (obj[key]['password'] == senha){
					window.open("escalacao", "_self");
				}
				else{
					console.log("Senha não encontrado");
				}
			}
			else{
				console.log("Senha não encontrado2");
			}
		}
		);
}
