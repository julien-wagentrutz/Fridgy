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
        <div class="header qMark">
            <h1>Fridgy</h1>
            <img class="js-menu-button1" src="../Images/Icons/cardIcons/questionMark.svg" alt="">
        </div>

        <div class="cards" id="card_product_js">

        </div>

        <aside class="menu js-menu">
            <main class="mover">
                <div class="arrowLeft">
                    <img class="js-menu-button2" src="../Images/Icons/expiryIcons/arrowLeft.svg" alt="arrowLeft">
                </div>
        
                <div class="expiry">
                    <h3>Les dates de péremption</h3>
                </div>
        
                <div class="productSection">
                    <div class="yogurt">
                        <img src="../Images/Icons/expiryIcons/yogurt.svg" alt="yogurt">
                        <p>Les yaourts peuvent être consommés encore jusqu’à 2 semaines après leur date de péremption.</p>
                    </div>
                    <div class="milk">
                        <img src="../Images/Icons/expiryIcons/milk-bottle.svg" alt="milk">
                        <p>S’ils ne sont pas ouverts, ces produits peuvent être consommés jusqu’à 2 mois après leur DDM. Mais s’ils sont ouverts, les placer au réfrigérateur et les consommer dans les 4 jours.</p>
                    </div>
                    <div class="egg">
                        <img src="../Images/Icons/expiryIcons/egg.svg" alt="egg">
                        <p>Les oeufs ont une date de consommation fixée à 28 jours après la ponte. Après la DCR, l’oeuf est encore consommable pendant quelques semaines si la coquille n’est pas fendue, ni lavée et qu’il est conservé au frais. </p>
                    </div>
                    <div class="cheese">
                        <img src="../Images/Icons/expiryIcons/cheese.svg" alt="cheese">
                        <p>Pour les fromages à pâte dure comme le gruyère, s’il y a présence de moisissure en surface, il faut la retirer avant de consommer le produit. Mais s’il y en a même dans le cœur du produit, il vaut mieux éviter de le consommer.</p>
                    </div>
                    <div class="ketchup">
                        <img src="../Images/Icons/expiryIcons/ketchup.svg" alt="ketchup">
                        <p>Si le produit n’est pas ouvert il peut être conservé des mois après leurs dates limites. 
                        En moyenne, la mayonnaise se garde 2 à 3 mois.d
                        Le ketchup 6 mois environ et la moutarde jusqu’à 1 an environ. 
                        Par contre, pour la mayonnaise maison pas plus de 24 h. </p>
                    </div>
                    <div class="ham">
                        <img src="../Images/Icons/expiryIcons/ham.svg" alt="ham">
                        <p>Dans de bonnes conditions de conservation, il peut être consommé jusqu’à deux semaines après ouverture</p>
                    </div>
                </div>
            </main>
        </aside>
        
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
                <h3 class="isActive">Fridgy</h3>
            </div>
            <a href="manualAdd.php">
                <div class="icons add">
                    <img src="../Images/Icons/navBar/add.svg" alt="add">
                    <h3>Créer</h3>
                </div>
            </a>
            <a href="scan.php">
                <div class="icons barcode">
                    <img src="../Images/Icons/navBar/barcode.svg" alt="barcode">
                    <h3>Scanner</h3>
                </div>
            </a>
            <a href="stats.php">
                <div class="icons stat">
                    <img src="../Images/Icons/navBar/stat.svg" alt="stat">
                    <h3>Stat</h3>
                </div>
            </a>
            <a href="account.php">
                <div class="icons user">
                    <img src="../Images/Icons/navBar/user.svg" alt="user">
                    <h3>Compte</h3>
                </div>  
            </a>      
        </div>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-analytics.js"></script>
        <script src="../Scripts/user.js"></script>
        <script src="../Scripts/homePage.js"></script>
        <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', () => {
                    navigator.serviceWorker.register('/service-worker.js')
                        .then((reg) => {
                          //  console.log('Service worker registered.', reg);
                        });
                });
            }
        </script>
        <script>
            callScript('../Treatment/getProductFromUser.php','userId=' + window.localStorage.getItem('userId'),'#card_product_js');
        </script>
    </body>
</html>