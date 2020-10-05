/*The core Firebase JS SDK is always required and must be listed first-- >*/
<script src="https://www.gstatic.com/firebasejs/7.22.0/firebase-app.js"></script>
/*
<!--TODO: Add SDKs for Firebase products that you want to use
https://firebase.google.com/docs/web/setup#available-libraries -->
*/
// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyBk2E8DB9o0wETAXNznAsuK2MjY0W6FEzM",
  authDomain: "unioncredito.firebaseapp.com",
  databaseURL: "https://unioncredito.firebaseio.com",
  projectId: "unioncredito",
  storageBucket: "unioncredito.appspot.com",
  messagingSenderId: "1088071049848",
  appId: "1:1088071049848:web:5cccf7dae5133afc22c38d"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

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

/* 
rules_version = '2';
service cloud.firestore {
  match / databases / { database } / documents {
    match / { document=**} {
      allow read, write: if
          request.time < timestamp.date(2020, 11, 4);
    }
  }
} */