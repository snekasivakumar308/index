<html>
<head>
    <title>Google Authentication</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <center>
     <button type="button" id="googlebtn" onclick="GoogleLogin();"></button>
 </center>
<script src="https://www.gstatic.com/firebasejs/6.0.1/firebase.js"></script>
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    apiKey: "AIzaSyCnu0tcc9ZkkC6JqEYmUGWnVew7PtmNNL4",
    authDomain: "vote-login-652d4.firebaseapp.com",
    databaseURL: "https://vote-login-652d4.firebaseio.com",
    projectId: "vote-login-652d4",
    storageBucket: "vote-login-652d4.appspot.com",
    messagingSenderId: "678832559714",
    appId: "1:678832559714:web:89b5e16c453acf65b1e33b"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script>

    //first of all create google provider object

    var provider=new firebase.auth.GoogleAuthProvider();
    //Login with popup window
    firebase.auth().signInWithPopup(provider).then(function () {
        //code executes after successful login

        window.location="home.php";
    }).catch(function (error) {
        var errorMessage=error.message;
        alert(errorMessage);
    });
</script>
<!-- <script src="js/google.js" type="text/javascript"></script> -->

</body>
</html>