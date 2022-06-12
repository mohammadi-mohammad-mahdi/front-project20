<article>
    
    <div class="card_Filled">
        <img class="img" src = '<?php echo $product['image_product']; ?>'>
        <div class="card-body">
            <h3 class="card-title">
                <a href="product-details.php?code_product=<?php echo $product['code_product']; ?>">
                <?php echo $product['name_product']; ?>
                </a>
            </h3>
            <p>قیمت: <?php echo $product['money_product'];?>  تومان</p>
            <div style="text-align:left;">
                <a href="" class="btn Outlined"><i class="far fa-heart"></i></a>
            </div>
        </div>
    </div>

    </article>