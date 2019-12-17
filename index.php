<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <meta name="theme-color" content="#E19A45"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Fridgy">
        <link rel="apple-touch-icon" href="/Images/Icons/192x192.png">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">



        <script src="https://www.gstatic.com/firebasejs/ui/4.3.0/firebase-ui-auth__fr.js"></script>
        <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
        <link rel="stylesheet" href="Styles/main.css">
        <link rel="manifest" href="/manifest.json">
        <title>Fridgy - Connexion </title>
    </head>
    <body>
        <div class="container container_connexion">
            <div class="container_logo">
                <h1 class="text_logo">Fridgy</h1>
                <img class="img_logo_big" src="Images/Fridgy.svg" alt="Logo de l'application">
            </div>
            <div id="firebaseui-auth-container"></div>
        </div>
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-analytics.js"></script>
        <script src="Scripts/user.js"></script>
        <script>
            let ui = new firebaseui.auth.AuthUI(firebase.auth());
            ui.start('#firebaseui-auth-container', {
                signInFlow: 'popup',
                signInSuccessUrl: 'https://julienwagentrutz.com/Pages/homePage.php',
                signInOptions: [
                    // List of OAuth providers supported.
                    firebase.auth.EmailAuthProvider.PROVIDER_ID,
                    firebase.auth.GoogleAuthProvider.PROVIDER_ID,
                    firebase.auth.FacebookAuthProvider.PROVIDER_ID,
                ],
            });

            window.localStorage.setItem('user', firebase.auth());

        </script>
        <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', () => {
                    navigator.serviceWorker.register('/service-worker.js')
                        .then((reg) => {
                            console.log('Service worker registered.', reg);
                        });
                });
            }
        </script>
    </body>
</html>