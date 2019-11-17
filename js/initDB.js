firebase.initializeApp({
  apiKey: 'Hb7kSNYo2wN2NcaA4Fs9vWN76RYKeEeFndC6eDma',
  authDomain: 'league-of-stars.firebaseapp.com',
  projectId: 'league-of-stars'
});

var db = firebase.firestore();

function insertOnDb(coll, json){
	db.collection(coll).add(json)
}


function getDbDocument(coll, field, fieldValue){
	obj = {}
	var a = db.collection(coll).where(field, "==", fieldValue).get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            // doc.data() is never undefined for query doc snapshots
            obj[doc.id] = doc.data();
        });
    })
    return obj;   
}