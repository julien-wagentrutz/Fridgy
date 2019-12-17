<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

        <div id="div-video-container">
            <video class="dbrScanner-video" playsinline="true"></video>
        </div>
        <div class="img"></div>

        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-analytics.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/dynamsoft-javascript-barcode@7.2.2-v2/dist/dbr.js" data-productKeys="t0068NQAAAHhDARq7IafcEhQ7/lw6kBG4DA16q15Ta6uidHu89RxqT3YVqyst0e8ZblqDHS/pkmWKPJWTWzuYtkHuGyyVzig="></script>
        <script type="text/javascript" src="../Scripts/user.js"></script>
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
            firebase.auth().onAuthStateChanged(function(userFire) {
                if (userFire) {
                    user = userFire
                } else {
                    // Envoyer vers parge de connexion
                }
            });
        </script>
        <script type="text/javascript" src="../Scripts/scan.js"></script>
    </body>
</html>