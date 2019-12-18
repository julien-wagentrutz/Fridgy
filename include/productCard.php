<div class="productCard" data-idproduct=<?php echo  $product['id'] ?>>
    <img src= <?php echo  $product['img_src'] ?> alt="innocent" class="productImage">
    <div class="cardContain">
        <div class="productInformation">
            <h2 class="productName"><?php echo  $product['product_name'] ?></h2>
            <h3 class="productBrand"><?php echo $product['product_brand'] ?></h3>
            <h3 class="productQuantity"><?php echo $product['product_quantity'] ?></h3>
            <span class="expiryDate"><?php echo $product['date_to consume'] ?></span>
        </div>
        <div class="sideBarContainer">
            <span class="daysLeft">2 jours</span>
            <div class="timeBar">
                <div class="fillTimeBar"></div>
            </div>
        </div>
        <div class="logoContainer">
                <img src="../Images/Icons/cardIcons/cutlery.svg" alt="cutlery" class="eat_js" data-idproduct=<?php echo  $product['id'] ?>>
                <img src="../Images/Icons/cardIcons/delete.svg" alt="delete" class="trash_js" data-idproduct=<?php echo  $product['id'] ?>>
            </div>
        </div>
    </div>
</div>