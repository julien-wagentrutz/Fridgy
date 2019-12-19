
<div class="productCard" data-idproduct=<?php echo  $product['id'] ?>>
    <img src= <?php echo  $product['img_src'] ?> alt="innocent" class="productImage">
    <div class="productInformationContainer">
        <div class="productInformation">
            <div class="caracteristicsProduct">
                <h2 class="productName"><?php echo  $product['product_name'] ?></h2>
                <h3 class="productBrand"><?php echo $product['product_brand'] ?></h3>
                <h3 class="productQuantity"><?php echo $product['product_quantity'] ?></h3>
            </div>

            <span class="expiryDate"><?php echo $product['date_to_consume'] ?></span>
        </div>
        <div class="sideBarContainer">
            <div class="daysLeftContainer">
                <span class="daysLeft js-daysLeft"><?php echo $product['dayLeft'] ?></span>
                <span class="days js-days">jours</span>
            </div>
            <div class="timeBar">
                <div class="fillTimeBar js-fillTimeBar"></div>
            </div>
        </div>
        <div class="logoContainer">
                <img src="../Images/Icons/cardIcons/cutlery.svg" alt="cutlery" class="eat_js" data-idproduct=<?php echo  $product['id'] ?>>
                <img src="../Images/Icons/cardIcons/delete.svg" alt="delete" class="trash_js" data-idproduct=<?php echo  $product['id'] ?>>
            </div>
        </div>
    </div>
</div>