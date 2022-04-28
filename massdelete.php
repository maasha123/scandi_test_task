<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
<title>Mass Delete</title>
</head>
<body>
<fieldset>
<?php
require 'config.php';
$select_sql = "SELECT sku, name, price, type, weight, size, length, width, height FROM products";
$result = $this->dbConnection->query("DELETE FROM products WHERE sku = '$sku'");
return $result;
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
do
{
printf("<input type='radio' name='products' value='%s'>%s %s<br/><br/>", $row['sku'], $row['name'], $row['price']); 
}
while($row = mysql_fetch_array($result))
?>
</fieldset>
</body>
</html>

