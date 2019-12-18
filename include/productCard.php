<div class="productCard">
    <img src= <?php echo  $product['img_src'] ?> alt="innocent" class="productImage">
    <div class="cardContain">
        <div class="productInformation">
            <h2 class="productName"><?php echo  $product['product_name'] ?></h2>
            <h3 class="productBrand"><?php echo $product['product_brand'] ?></h3>
            <h3 class="productQuantity"><?php echo $product['product_quantity'] ?></h3>
            <span class="expiryDate">11.12.20</span>
            <span class="daysLeft">2 jours</span>
            <div class="timeBar">
                <div class="fillTimeBar"></div>
            </div>
            <div class="cardIcons">
                <img src="../Images/Icons/cardIcons/cutlery.svg" alt="cutlery">
                <img src="../Images/Icons/cardIcons/cutlery.svg" alt="cutlery">
                <img src="../Images/Icons/cardIcons/delete.svg" alt="delete">
            </div>
        </div>
    </div>
</div>