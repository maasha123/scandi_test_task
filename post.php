<?php

require_once('classes/productsModel.php');

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$class = $_POST['type'];

$product = new $class($_POST);

$model = new ProductsModel();
$model->addProduct($product);

header('Location: index.php');