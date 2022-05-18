$('#productType').change(function() {
    var type = $(this).val().toLowerCase();
    console.log(type);

    if (type == '')
        $("#attributes").empty();
    else
        $("#attributes").load(`templates/input/${type}.php`);
});
$(document).ready(() => {
    $("#delete-product-btn").click(() => {
        let selected = $(".delete-checkbox:checked");
        let SKUs = $.map(selected, (e) => $(e).data('sku'));

        console.log(SKUs);

        $.post('delete.php', {
            products: SKUs
        }, (data) => {
            console.log(data);
            location.reload();
        });
    });
});