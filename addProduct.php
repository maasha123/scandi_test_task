<?php
$title = 'Product Add';

$buttons = [
    [
        'tag' => 'button',
        'text' => 'Save',
        'class' => 'btn btn-primary',
        'id' => 'delete-product-btn',
        'type' => 'submit',
        'form' => 'product_form',
    ],
    [
        'tag' => 'a',
        'text' => 'Cancel',
        'class' => 'nav-link link-dark',
        'href' => 'index.php',
    ]
];
?>

<?php require_once('header.php'); ?>

<div>
    <form class="mx-auto" style="width: 60%" id="product_form" method="POST" action="post.php">

        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label">SKU</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sku" name="sku" placeholder="Letters, numbers and dashes only (8-10)" minlength="8" maxlength="10"required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Insert any letters and numbers" minlength="3" maxlength="10" required>
            </div>
        </div>

        <div class="form-group row mb-4">
            <label class="col-sm-2 col-form-label">Price ($)</label>
            <div class="col-sm-10">
                <input type="number" min="0" step="0.01" class="form-control" id="price" name="price" placeholder="Insert any positive number" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label">Type Switcher</label>
            <div class="col-sm-10">
                <select class="form-control" id="productType" required>
                    <option value="">Select Type</option>

                    <?php
                    require_once('classes/productsModel.php');

                    $model = new ProductsModel();
                    $types = $model->getTypes();

                    foreach ($types as $type) {
                        echo "<option id=`{$type}` value='{$type}'>{$type}</option>";
                    }
                    ?>

                </select>
            </div>
        </div>

        <div id="attributes">

        </div>

    </form>
</div>

<script>
$('#productType').change(function() {
    var type = $(this).val().toLowerCase();
    console.log(type);

    if (type == '')
        $("#attributes").empty();
    else
        $("#attributes").load(`templates/input/${type}.php`);
});
</script>

<?php require_once('footer.php'); ?>