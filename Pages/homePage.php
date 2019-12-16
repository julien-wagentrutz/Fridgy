<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">        <link rel="stylesheet" href="../Styles/main.css">
        <link rel="stylesheet" href="../Styles/homePage.css">
        <title>Fridgy</title>
    </head>
    <body>
        <div class="header">
            <h1>Fridgy</h1>
        </div>

        <div class="cards">
            <?php include '../include/productCard.html'; ?>
            <?php include '../include/productCard.html'; ?>
            <?php include '../include/productCard.html'; ?>
        </div>
        

        <div class="navBar">
            <div class="icons list">
                <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.33337 1.25H19.875" stroke="#5BA8BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.33337 7.5H19.875" stroke="#5BA8BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.33337 13.75H19.875" stroke="#5BA8BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.125 1.25H1.13596" stroke="#5BA8BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.125 7.5H1.13596" stroke="#5BA8BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.125 13.75H1.13596" stroke="#5BA8BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3>Fridgy</h3>
            </div>
            <div class="icons add">
                <img src="../Images/Icons/navBar/add.svg" alt="add">
                <h3>Créer</h3>
            </div>
            <div class="icons barcode">
                <img src="../Images/Icons/navBar/barcode.svg" alt="barcode">
                <h3>Scanner</h3>
            </div>
            <div class="icons stat">
                <img src="../Images/Icons/navBar/stat.svg" alt="stat">
                <h3>Stat</h3>
            </div>
            <div class="icons user">
                <img src="../Images/Icons/navBar/user.svg" alt="user">
                <h3>Compte</h3>
            </div>        
        </div>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-analytics.js"></script>
        <script>
            // Your web app's Firebase configuration
            let firebaseConfig = {
                apiKey: "AIzaSyCMxzO2knPCoMQW-tuqxEb9OTDSkXi4ofQ",
                authDomain: "fridgy-8e67c.firebaseapp.com",
                databaseURL: "https://fridgy-8e67c.firebaseio.com",
                projectId: "fridgy-8e67c",
                storageBucket: "fridgy-8e67c.appspot.com",
                messagingSenderId: "931542015674",
                appId: "1:931542015674:web:3eb48eff1ff87069c2ec83",
                measurementId: "G-8YF6289D3X"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    console.log(user)
                } else {
                    console.log('ifdhfs')
                }
            });
        </script>
    </body>
</html>