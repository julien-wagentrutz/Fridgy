<div class="productCard">
<<<<<<< HEAD
    <img src="../Images/innocent.png" alt="innocent" class="productImage">
    <div class="productInformationContainer">
        <div class="productInformation">
            <div class="caracteristicsProduct">
                <h2 class="productName"><?php echo  $product['product_name'] ?></h2>
                <h3 class="productBrand"><?php echo $product['product_brand'] ?></h3>
                <h3 class="productQuantity">1L</h3>
            </div>
=======
    <img src= <?php echo  $product['img_src'] ?> alt="innocent" class="productImage">
    <div class="cardContain">
        <div class="productInformation">
            <h2 class="productName"><?php echo  $product['product_name'] ?></h2>
            <h3 class="productBrand"><?php echo $product['product_brand'] ?></h3>
            <h3 class="productQuantity"><?php echo $product['product_quantity'] ?></h3>
>>>>>>> 5b71b412395d1eff0c8b2923b0df98ab707c598d
            <span class="expiryDate">11.12.20</span>
        </div>
        <div class="sideBarContainer">
            <span class="daysLeft">2 jours</span>
            <div class="timeBar">
                <div class="fillTimeBar"></div>
            </div>
<<<<<<< HEAD
        </div>
        <div class="logoContainer">
            <img src="../Images/Icons/cardIcons/cutlery.svg" alt="cutlery">
            <img src="../Images/Icons/cardIcons/delete.svg" alt="delete">
=======
            <div class="cardIcons">
                <img src="../Images/Icons/cardIcons/less.svg" alt="less" class="js-less">
                <img src="../Images/Icons/cardIcons/cutlery.svg" alt="cutlery" class="eat_js" data-idproduct=<?php echo  $product['id'] ?>>
                <img src="../Images/Icons/cardIcons/delete.svg" alt="delete" class="trash_js" data-idproduct=<?php echo  $product['id'] ?>>
            </div>
>>>>>>> 5b71b412395d1eff0c8b2923b0df98ab707c598d
        </div>
    </div>
</div>