<div class='card m-2' style='width: 18rem;'>
    <div class='card-body'>
        <div class="container">
            <div class="d-flex bd-highlight">
                <div class="me-auto p-2 bd-highlight">
                    <input type='checkbox' class='delete-checkbox' data-sku="<?php echo $product->getSKU(); ?>">
                </div>
                <div class="p-2 bd-highlight">
                    <h6><?php echo get_class($product); ?></h6>
                </div>
            </div>
        </div>
        <h6 class='card-title text-center'><?php echo $product->getName(); ?></h6>
        <p class='card-text text-center mb-1'><?php echo $product->getSKU(); ?></p>
        <p class='card-text text-center mb-1'><?php echo $product->getPrice(); ?> $</p>
        <?php echo $attrs; ?>
    </div>
</div>