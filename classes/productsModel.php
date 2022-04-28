<?php

require_once('classes/product.php');
require_once('classes/book.php');
require_once('classes/dvd.php');
require_once('classes/furniture.php');

class ProductsModel
{
    private $dbConnection;

    public function getDBConnection()
    {
        return $this->dbConnection;
    }

    public function __construct()
    {
        require_once('config.php');
        $this->dbConnection = new mysqli('localhost', 'root', $password, 'shop');
    }

    public function isValid($sku)
    {
        $sql = "SELECT * FROM products WHERE sku = '$sku'";
        $result = $this->dbConnection->query($sql);
        if ($result->num_rows > 0) {
            return true;
        }
        return false;
    }

    public function getProducts($orderBy = 'sku')
    {
        $products = [];
        $result = $this->dbConnection->query("SELECT * FROM products ORDER BY $orderBy");
        while ($row = $result->fetch_assoc()) {
            $class = $row['type'];
            $product = new $class($row);
            $products[] = $product;
        }
        return $products;
    }

    public function getProduct($sku)
    {
        $result = $this->dbConnection->query("SELECT * FROM products WHERE sku = '$sku'");
        $row = $result->fetch_assoc();
        $class = $row['type'];
        return new $class($row);
    }

    public function getTypes()
    {
        $types = [];
        $result = $this->dbConnection->query("SELECT distinct(type) FROM products");
        while ($row = $result->fetch_assoc())
            $types[] = $row['type'];
        return $types;
    }

    public function addProduct($product)
    {
        $sku = $product->getSku();
        $name = $product->getName();
        $price = $product->getPrice();
        $type = get_class($product);
        $weight = 'NULL';
        $size = 'NULL';
        $length = 'NULL';
        $width = 'NULL';
        $height = 'NULL';

        if (method_exists($product, "getWeight"))
            $weight = $product->getWeight();

        if (method_exists($product, "getSize"))
            $size = $product->getSize();

        if (method_exists($product, "getLength"))
            $length = $product->getLength();

        if (method_exists($product, "getWidth"))
            $width = $product->getWidth();

        if (method_exists($product, "getHeight"))
            $height = $product->getHeight();


        $query = "INSERT INTO products (sku, name, price, type, weight, size, length, width, height) VALUES ('$sku', '$name', $price, '$type', $weight, $size, $length, $width, $height)";
        $result = $this->dbConnection->query($query);
        return $result;
    }

    public function deleteProduct($sku)
    {
        $result = $this->dbConnection->query("DELETE FROM products WHERE sku = '$sku'");
        return $result;
    }
}