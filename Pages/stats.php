<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../Styles/main.css">
        <link rel="stylesheet" href="../Styles/stats.css">
        <title>Fridgy</title>
    </head>
    <body>
        <div class="header">
            <h1>Statistiques</h1>
        </div>
        <div class="navBar">
            <a href="homePage.php">
                <div class="icons list">
                    <img src="../Images/Icons/navBar/list.svg" alt="list">
                    <h3>Fridgy</h3>
                </div>
            </a>
            <a href="manualAdd.php">
                <div class="icons add">
                    <img src="../Images/Icons/navBar/add.svg" alt="add">
                    <h3>Créer</h3>
                </div>
            </a>
            <a href="scan.php">
                <div class="icons barcode">
                    <img src="../Images/Icons/navBar/barcode.svg" alt="scanner">
                    <h3>Scanner</h3>
                </div>
            </a>
            <a href="stats.php">
                <div class="icons stat">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.3456 12.8306H11.1749V3.66184C11.1749 3.29134 10.8785 2.99493 10.5079 2.99493C4.71696 2.99493 0.00317383 7.70773 0.00317383 13.4975C0.00317383 19.2872 4.71696 24 10.5079 24C16.2988 24 21.0126 19.2872 21.0126 13.4975C21.0126 13.1319 20.7112 12.8306 20.3456 12.8306ZM10.5079 22.6662C5.45318 22.6662 1.33726 18.5511 1.33726 13.4975C1.33726 8.6661 5.09248 4.69431 9.84086 4.35345V13.4975C9.84086 13.868 10.1373 14.1644 10.5079 14.1644H19.6538C19.3129 18.9117 15.3403 22.6662 10.5079 22.6662Z" fill="#5BA8BA"/>
                        <path d="M23.5326 10.9385C23.5227 8.38946 22.5889 5.93427 20.904 4.02247C18.9078 1.76487 16.0419 0.470581 13.0279 0.470581C12.6573 0.470581 12.3608 0.766983 12.3608 1.13749V10.9731C12.3608 11.3436 12.6573 11.64 13.0279 11.64H22.8656C23.2362 11.64 23.5326 11.3436 23.5326 10.9731C23.5326 10.9632 23.5326 10.9533 23.5326 10.9385ZM13.6949 10.3111V1.83403C16.0765 2.00693 18.3099 3.10856 19.9009 4.91168C21.235 6.41839 22.0256 8.31536 22.1738 10.3111H13.6949Z" fill="#5BA8BA"/>
                    </svg>    
                    <h3  class="isActive">Stats</h3>
                </div>
            </a>
            <a href="account.php">
                <div class="icons user">
                    <img src="../Images/Icons/navBar/user.svg" alt="user">
                    <h3>Compte</h3>
                </div>  
            </a>      
        </div>
        <main>
            <section>
                <div class="speechContainer">
                    <div class="bubbleContainer">
                        <img class="bubbleFridgy" src="../Images/statsFridgy1.svg" alt="fridgy">
                        <p class="bubbleText">" Voici vos statistiques du mois "</p>
                    </div>
                </div>
                <div class="statsContainer">
                    <div class="canvasContainer">
                        <div class="statsTitle"><p>Produits ajoutés</p></div>
                        <canvas id="firstCanvas"></canvas>
                        <div class="total">
                            <div id="total_product_js"></div>
                        </div>
                        <div><img class="happyFridgyCanvas1 happy1" src="../Images/statsFridgy2.svg" alt="fridgy"></div>
                        <div><img class="angryFridgyCanvas1 angry1" src="../Images/statsFridgy3.svg" alt="fridgy"></div>
                    </div>
                    <div class="cardStats">
                        <div class="cardStatsFlexSubContainer">
                            <div class="cardStatsGreen"></div>
                            <p class="cardStatsGreen">Produits consommés</p>
                        </div>
                        <div class="cardStatsNumber cardStatsGreen" id="total_eat_js"></div>
                    </div>
                    <div class="cardStats">
                        <div class="cardStatsFlexSubContainer">
                            <p class="cardStatsRed">Produits jetés</p>
                        </div>
                        <div class="cardStatsNumber cardStatsRed" id="total_trash_js"></div>
                    </div>
                </div>
                <div class="statsContainer">
                    <div class="canvasContainer">
                        <div class="statsTitle"><p>Poids total</p></div>
                        <canvas id="secondCanvas"></canvas>
                        <div class="totalkg">
                            <div class="kgNumber">68</div>
                            <div class="kgKg">kg</div>
                        </div>
                        <div><img class="happyFridgyCanvas2 happy2" src="../Images/statsFridgy2.svg" alt="fridgy"></div>
                        <div><img class="angryFridgyCanvas2 angry2" src="../Images/statsFridgy3.svg" alt="fridgy"></div>
                    </div>
                    <div class="cardStats">
                        <div class="cardStatsFlexSubContainer">
                            <div class="cardStatsGreen"></div>
                            <p class="cardStatsGreen cardStatsGreen">Poids consommés (Kg)</p>
                        </div>
                        <div class="cardStatsNumber cardStatsGreen">49</div>
                    </div>
                    <div class="cardStats">
                        <div class="cardStatsFlexSubContainer">
                            <p class="cardStatsRed">Poids jetés (Kg)</p>
                        </div>
                        <div class="cardStatsNumber cardStatsRed">19</div>
                    </div>
                </div>
            </section>
        </main>
        <script type="text/javascript" src="../Scripts/pieChart.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-analytics.js"></script>
        <script src="../Scripts/user.js"></script>
        <script src="../Scripts/stats.js"></script>
    </body>
</html>