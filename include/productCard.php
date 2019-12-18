<<<<<<< HEAD
<div class="productCard">
<img src= <?php echo  $product['img_src'] ?> alt="innocent" class="productImage">
    <div class="productInformationContainer">
        <div class="productInformation">
            <div class="caracteristicsProduct">
                <h2 class="productName"><?php echo  $product['product_name'] ?></h2>
                <h3 class="productBrand"><?php echo $product['product_brand'] ?></h3>
                <h3 class="productQuantity"><?php echo $product['product_quantity'] ?></h3>
            </div>
            <span class="expiryDate js-expiry">11.12.20</span>
=======
<div class="productCard" data-idproduct=<?php echo  $product['id'] ?>>
    <img src= <?php echo  $product['img_src'] ?> alt="innocent" class="productImage">
    <div class="cardContain">
        <div class="productInformation">
            <h2 class="productName"><?php echo  $product['product_name'] ?></h2>
            <h3 class="productBrand"><?php echo $product['product_brand'] ?></h3>
            <h3 class="productQuantity"><?php echo $product['product_quantity'] ?></h3>
            <span class="expiryDate">11.12.20</span>
>>>>>>> 3eeafb21525be206d71058c03747442d39626d1d
        </div>
        <div class="sideBarContainer">
            <div class="daysLeftContainer">
                <span class="daysLeft js-daysLeft">4</span>
                <span class="days js-days">jours</span>
            </div>
            <div class="timeBar">
                <div class="fillTimeBar js-fillTimeBar"></div>
            </div>
<<<<<<< HEAD
            <div class="cardIcons">
=======
        </div>
        <div class="logoContainer">
>>>>>>> 3eeafb21525be206d71058c03747442d39626d1d
                <img src="../Images/Icons/cardIcons/cutlery.svg" alt="cutlery" class="eat_js" data-idproduct=<?php echo  $product['id'] ?>>
                <img src="../Images/Icons/cardIcons/delete.svg" alt="delete" class="trash_js" data-idproduct=<?php echo  $product['id'] ?>>
            </div>
        </div>
    </div>
</div>