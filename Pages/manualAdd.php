<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../Styles/main.css">
        <link rel="stylesheet" href="../Styles/manualAdd.css">
        <title>Fridgy - Créer</title>
    </head>
    <body>
        <div class="header">
            <h1>Créer</h1>
        </div>
        <main>
            <form action="" method="get" name="addProductForm" class="addProductForm">
                <div class="okButton">
                    <div class="okButtonV2">
                        <input type="submit" class="okButtonInput" value="OK">
                    </div>
                </div>
                <div class="cameraIcon" onclick="getfile()">
                    <img src="../Images/Icons/photo-camera.svg" alt="Camera icon">
                </div>
                <input type="file" class="userInput addPicture hiddenfile" accept="image/*" capture="environment" style="display: none;">
                <div class="userInput">
                    <p>Nom du produit</p>
                    <input type="text" class="productName" name="name" placeholder="Nom du produit" required>
                </div>
                <div class="userInput">
                    <p>Date de péremption</p>
                    <input type="date" class="productDate" name="dateConsume" required>
                </div>
            </form>
        </main>
        <footer>
            <div class="navBar">
                <a href="homePage.php">
                    <div class="icons list">
                        <img src="../Images/Icons/navBar/list.svg" alt="list">
                        <h3>Fridgy</h3>
                    </div>
                </a>
                <a href="manualAdd.php">
                    <div class="icons add">
                        <svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.78571 11.2185H6.0102V7.2873H9.94898V5.3409H6.0102V1.70251H3.78571V5.3409H0V7.2873H3.78571V11.2185Z" fill="#5BA8BA"/>
                            <path d="M22.6276 6.14731L18.5459 2.30251C18.5459 2.30251 20.9643 -0.315892 22.9822 1.57771C25.0026 3.47131 23.3367 5.36731 22.6276 6.14731ZM9.58674 18.5097L8.2245 16.3377L19.9286 5.24011L21.8827 6.85291L9.58674 18.5097ZM5.67093 20.0385L3.69389 18.0321L4.75766 15.3585C4.75766 15.3585 7.4796 15.8601 8.6046 18.9801L5.67093 20.0385ZM17.7168 2.85931L19.4337 4.69771L7.65817 15.7281L5.35205 14.4465L17.7168 2.85931ZM23.6327 0.884108C20.5561 -1.51109 17.7168 1.71931 17.7168 1.71931L3.75256 14.4777L1.97705 21.8505L10.0255 19.4913L23.6327 6.67771C23.6327 6.67771 26.7092 3.27931 23.6327 0.884108Z" fill="#5BA8BA"/>
                        </svg>
                        <h3 class="isActive">Créer</h3>
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
        </footer>
    </body>
<script type="text/javascript">
    function getfile(){
        document.querySelector('.hiddenfile').click();
    }
</script>
</html>