firebase.initializeApp({
  apiKey: 'Hb7kSNYo2wN2NcaA4Fs9vWN76RYKeEeFndC6eDma',
  authDomain: 'league-of-stars.firebaseapp.com',
  projectId: 'league-of-stars'
});

var db = firebase.firestore();

function insertOnDb(coll, json){
	db.collection(coll).add(json)
}

function updateDb(coll, json, id){
  db.collection(coll).doc(id).set(json, { merge: true })
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

function getDbDocumentArray(coll, field, fieldValue){
  obj = {}
  var a = db.collection(coll).where(field, "array-contains", fieldValue).get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            // doc.data() is never undefined for query doc snapshots
            obj[doc.id] = doc.data();
        });
    })
    return obj;   
}

function getFullDocument(coll){
	obj = {}
	db.collection(coll).get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        obj[doc.id] = doc.data();
    });
});
	return obj;
}