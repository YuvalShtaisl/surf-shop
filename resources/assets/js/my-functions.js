export default {
    ajaxAddToCart(productId) {
        /*    e.preventDefault();
            e.stopPropagation();*/
        $.ajax({
            url: BASE_URL + 'shop/add-to-cart',
            type: 'GET',
            dataType: 'html',
            data: {pid: productId},
        }).then(function (res) {
            //location.reload();
            return 1;
        },function (res) {
            return 0;
        });
    }
}
