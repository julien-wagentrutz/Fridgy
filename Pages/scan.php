<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../Styles/main.css">
        <title>Document</title>
    </head>
    <body>

    <footer>
        <div class="navBar">
            <div class="icons list">
                <img src="../Images/Icons/navBar/list.svg" alt="list">
                <h3>Fridgy</h3>
            </div>
            <a href="manualAdd.html">
                <div class="icons add">
                    <img src="../Images/Icons/navBar/add.svg" alt="add">
                    <h3>Créer</h3>
                </div>
            </a>
            <a href="scan.php">
                <div class="icons barcode">
                    <svg width="25" height="21" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16667 0.5H0.833333C0.373333 0.5 0 0.873333 0 1.33333V4.66667C0 5.12667 0.373333 5.5 0.833333 5.5C1.29333 5.5 1.66667 5.12667 1.66667 4.66667V2.16667H4.16667C4.62667 2.16667 5 1.79333 5 1.33333C5 0.873333 4.62667 0.5 4.16667 0.5Z" fill="#5BA8BA"/>
                        <path d="M24.1667 15.5C23.7067 15.5 23.3333 15.8733 23.3333 16.3333V18.8333H20.8333C20.3733 18.8333 20 19.2067 20 19.6667C20 20.1267 20.3733 20.5 20.8333 20.5H24.1667C24.6267 20.5 25 20.1267 25 19.6667V16.3333C25 15.8733 24.6267 15.5 24.1667 15.5Z" fill="#5BA8BA"/>
                        <path d="M24.1667 0.5H20.8333C20.3733 0.5 20 0.873333 20 1.33333C20 1.79333 20.3733 2.16667 20.8333 2.16667H23.3333V4.66667C23.3333 5.12667 23.7067 5.5 24.1667 5.5C24.6267 5.5 25 5.12667 25 4.66667V1.33333C25 0.873333 24.6267 0.5 24.1667 0.5Z" fill="#5BA8BA"/>
                        <path d="M4.16667 18.8333H1.66667V16.3333C1.66667 15.8733 1.29333 15.5 0.833333 15.5C0.373333 15.5 0 15.8733 0 16.3333V19.6667C0 20.1267 0.373333 20.5 0.833333 20.5H4.16667C4.62667 20.5 5 20.1267 5 19.6667C5 19.2067 4.62667 18.8333 4.16667 18.8333Z" fill="#5BA8BA"/>
                        <path d="M5.00004 3.83334H3.33337V17.1667H5.00004V3.83334Z" fill="#5BA8BA"/>
                        <path d="M8.33329 3.83334H6.66663V13.8333H8.33329V3.83334Z" fill="#5BA8BA"/>
                        <path d="M11.6667 3.83334H10V13.8333H11.6667V3.83334Z" fill="#5BA8BA"/>
                        <path d="M15 3.83334H13.3334V17.1667H15V3.83334Z" fill="#5BA8BA"/>
                        <path d="M18.3333 3.83334H16.6666V13.8333H18.3333V3.83334Z" fill="#5BA8BA"/>
                        <path d="M21.6667 3.83334H20V17.1667H21.6667V3.83334Z" fill="#5BA8BA"/>
                        <path d="M8.33329 15.5H6.66663V17.1667H8.33329V15.5Z" fill="#5BA8BA"/>
                        <path d="M11.6667 15.5H10V17.1667H11.6667V15.5Z" fill="#5BA8BA"/>
                        <path d="M18.3333 15.5H16.6666V17.1667H18.3333V15.5Z" fill="#5BA8BA"/>
                    </svg>
                    <h3 class="isActive">Scanner</h3>
                </div>
            </a>
            <a href="stats.html">
                <div class="icons stat">
                    <img src="../Images/Icons/navBar/stat.svg" alt="stat">
                    <h3>Stat</h3>
                </div>
            </a>
            <a href="account.html">
                <div class="icons user">
                    <img src="../Images/Icons/navBar/user.svg" alt="user">
                    <h3>Compte</h3>
                </div>  
            </a>      
        </div>
    </footer>

        <div id="div-video-container">
            <video class="dbrScanner-video" playsinline="true"></video>
        </div>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-analytics.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/dynamsoft-javascript-barcode@7.2.2-v2/dist/dbr.js" data-productKeys="t0068NQAAAHhDARq7IafcEhQ7/lw6kBG4DA16q15Ta6uidHu89RxqT3YVqyst0e8ZblqDHS/pkmWKPJWTWzuYtkHuGyyVzig="></script>
        <script type="text/javascript" src="../Scripts/user.js"></script>
        <script>!
            firebase.auth().onAuthStateChanged(function(userFire) {
                if (userFire) {
                    user = userFire
                    console.log(userFire)
                } else {
                    // Envoyer vers parge de connexion
                }
            });
        </script>
        <script type="text/javascript" src="../Scripts/scan.js"></script>
    </body>
</html>