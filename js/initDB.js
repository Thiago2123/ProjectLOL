firebase.initializeApp({
  apiKey: 'Hb7kSNYo2wN2NcaA4Fs9vWN76RYKeEeFndC6eDma',
  authDomain: 'league-of-stars.firebaseapp.com',
  projectId: 'league-of-stars'
});

var db = firebase.firestore();

function insert(coll){
	db.collection(coll).add({
		username: document.querySelector("#cad_nome").value,
		email: document.querySelector("#cad_email").value,
		senha: document.querySelector("#cad_senha").value
	})
}