<?php

require_once('classes/productsModel.php');

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$model = new ProductsModel();

foreach ($_POST['products'] as $product) {
    $model->deleteProduct($product);
}