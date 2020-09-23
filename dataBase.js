// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
  apiKey: "AIzaSyBk2E8DB9o0wETAXNznAsuK2MjY0W6FEzM",
  authDomain: "unioncredito.firebaseapp.com",
  databaseURL: "https://unioncredito.firebaseio.com",
  projectId: "unioncredito",
  storageBucket: "unioncredito.appspot.com",
  messagingSenderId: "1088071049848",
  appId: "1:1088071049848:web:5cccf7dae5133afc22c38d"
});

/* inicia dataBase */
var db = firebase.firestore();

db.collection("users").add({
  first: "Ada",
  last: "Lovelace",
  born: 1815
})
  .then(function (docRef) {
    console.log("Document written with ID: ", docRef.id);
  })
  .catch(function (error) {
    console.error("Error adding document: ", error);
  });
