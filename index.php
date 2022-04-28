<?php
require_once('classes/productsModel.php');

$title = 'Product List';

$buttons = [
    [
        'tag' => 'a',                       // Сам тег, на выбор: <button>, <a>, <input>, etc.
        'text' => 'ADD',                    // Вставляется в тег, по сути innerHTML
        'class' => 'nav-link link-dark',
        'href' => 'addproduct.php',
    ],
    [
        'tag' => 'a',
        'text' => 'MASS DELETE',
        'class' => 'nav-link link-dark',
        'id' => 'delete-product-btn',
        'href' => 'massdelete.php',
    ]
];

$model = new ProductsModel();
$products = $model->getProducts();

?>

<?php require_once('header.php'); ?>

<div class="d-flex flex-wrap justify-content-center">
    <?php
    require_once('classes/template.php');

    foreach ($products as $product) {
        $type = strtolower(get_class($product));
        echo Template::render("card/${type}", ['product' => $product]);
    }
    ?>
</div>
<!--<script>
      $.ajax({
        method: "POST",
        url: "index.php",
        data: { name: "John", location: "Boston" }
             })
        
        $.ajax({ 
        url: "index.html",
        cache: false
            })
         .done(function( html ) {
         $( "#results" ).append( html );
           });
</script>-->


<?php require_once('footer.php'); ?>