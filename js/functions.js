function cadastrar(){
	var name = $("#cad_nome").val();
	var email = $("#cad_email").val();
	var senha = $("#cad_senha").val();
	
	removeClass("#cad_nome", "input-empty");
	removeClass("#cad_email", "input-empty");
	removeClass("#cad_senha", "input-empty");

	var errors = checkLogin();
	if (errors.length > 0){
		var ItemWithError = $("#"+errors);
		$(ItemWithError).addClass("input-empty");
		return;
	}
	obj ={
		'name': name,
		'email': email,
		'password': senha,
		'Valor': 50,
		'Pontuacao': 0
	};
	$.notify({
				//options
				icon: 'fas fa-check-circle', 
				message: 'Cadastrado com sucesso'
			},{
				//settings
				type: 'success',
				position: "absolute",
				placement: {
					from: "bottom", 
					align: "center"
				},
				animate:{
					enter: "fadeOutUp",
				},
				onShow: function() {
					this.css({'width':'auto','height':'auto'});
				},
			});
	$("#cad_nome").val("");
	$("#cad_email").val("");
	$("#cad_senha").val("");
	insertOnDb('users', obj)
}

function checkLogin(){
	var name = $("#cad_nome").val();
	var email = $("#cad_email").val();
	var senha = $("#cad_senha").val();
	console.log(email.split('@'))
	errorList = []
	var errorLabel = document.querySelector("#error");
	if (name.length == 0){
		errorLabel.textContent = 'Nome não pode ser vazio';
		return "cad_nome";
	}
	if (email.length == 0){
		errorLabel.textContent = 'E-mail não pode ser vazio';
		return "cad_email";
	}
	if (email.indexOf('@') < 0){
		errorLabel.textContent = 'E-mail inválido';
		return "cad_email";
	}
	if (email.split("@").length != 2 || email.split("@")[1] == ""){
		errorLabel.textContent = 'E-mail inválido';
		return "cad_email";
	}
	if (senha.length < 5 || senha.length > 10){
		errorLabel.textContent = 'A senha deve ter entre 5 e 10 caracteres';
		return "cad_senha";
	}
	return ""
}

function removeClass(id, classe) {
	$(id).removeClass(classe);
}


function getUserLogin() {
	var email = $("#email").val();
	var senha = $("#senha").val();

	var user = getDbDocument('users', 'email', email);

	setTimeout(function(){ 
		if(Object.values(user).length == 0){
		document.querySelector('#erroLogin').textContent = 'Credenciais não encontradas'
		localStorage.clear();
		return;
		
		}
		console.log();
		if (senha == Object.values(user)[0]['password']){
			window.open('escalacao', '_self');
			localStorage.setItem('login',Object.values(user)[0]['name']);
			return;
		}
		document.querySelector('#erroLogin').textContent = 'Credenciais não encontradas'
		; }, 1000);
	
}