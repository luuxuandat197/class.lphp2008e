$(document).ready(function () {
    //--------------------------------------------------------------------------------------------
    $('#search').keyup(function () {
        var keyword = $(this).val().toLowerCase();
        var products = $('.product');

        // products.each(function (index) {
        //     var name = $(this).text().toLowerCase();

        //     if (name.indexOf(keyword) > -1) {
        //         $(this).show();
        //     } else {
        //         $(this).hide();
        //     }
        // });

        $('.product').show().filter(function () {
            return $(this).text().toLowerCase().indexOf(keyword) == -1;
        }).hide();

        // toggle
    });

    $('#sort').change(function () {
        var type = $(this).val();
        sortProduct(type);
    });

    function sortProduct(type) {
        var products = $('.product');
        var priceArr = [];

        products.each(function (index) {
            var price = $(this).find('i:last-child').text();
            price = price.replace('$', '');
            priceArr.push(price);

            $(this).addClass(price);
        });

        if (type == 1) {
            // Decrease
            priceArr.sort(function (a, b) {
                return b - a
            });
        } else if (type == 2) {
            // Increase
            priceArr.sort(function (a, b) {
                return a - b
            });
        }

        var productOrder = [];

        console.log(priceArr);

        $.each(priceArr, function (index, price) {
            console.log(index, price);
            var product = $('.' + price);
            productOrder.push(product);
        });

        $('#products').empty();
        $('#products').append(productOrder);
    }

    //--------------------------------------------------------------------------------------------
    $('.buy-click').after('<input type="number" class="buy-quantity form-control" min="1" value="1" style="display: inline; width: 40%; margin-left: 5px">');
    $('.buy-click').css('display', 'inline');
    //
    //
    // $('.buy-quantity').css('display',"inline");
    // $('.buy-quantity').css('width','40%');
    // $('.buy-quantity').css('margin-left','5px');

    $('.buy-click').on('click', function (event) {
        var number = $(this).parent('.card-body').find('input.buy-quantity').val();

        console.log(number + ' ' + typeof number);
        if (number && number > 0) {
            number = parseInt(number);
        } else {
            number = 1;
        }
        console.log(number + ' ' + typeof number);

        event.preventDefault();
        var curentQuantity = $('.card_number').text();
        var newQuantity = parseInt(curentQuantity) + number;
        $('.card_number').text(newQuantity);
    });

    //--------------------------------------------------------------------------------------------
    $('.my-card').css('cursor', 'pointer');
    $('.buy-click').each(function (index) {
        $(this).attr('product-id', 'sp' + index);
    });

    // function add to cart
    $(document).on('click', '.buy-click', function () {
        var productID = $(this).attr('product-id');
        var listCartItem = $('.cart-item_cell-id').map(function (index, item) {
            return $(item).text();
        });
        var productQuantity = $(this).parent('.card-body').find('input.buy-quantity').val();

        if ($.inArray(productID, listCartItem) == -1) {
            var productName = $(this).parent('.card-body').find('h4.card-title').text();
            var productSTT = $('.cart-page-shop-section').length + 1;
            console.log("info: " + productName + "," + productID + "," + productQuantity + ", " + productSTT);

            var new_cartPageSection = '<tr class="cart-page-shop-section cart-page_id-' + productID + '" >' +
                '                        <th scope="row">' + productSTT + '</th>' +
                '                        <td>' + productName + '</td>' +
                '                        <td class="cart-item_cell-id">' + productID + '</td>' +
                '                        <td class="cart-item_cell-quantity">' +
                '                            <div class="shop-input-quantity">' +
                '                                <button style="font-size:15px" class="cart-change cart-item_down"> <i class="fa fa-angle-down"></i></button>' +
                '                                <input type="text" value="' + productQuantity + '" style="width: 50px; text-align: center;">' +
                '                                <button style="font-size:15px" class="cart-change cart-item_up"> <i class="fa fa-angle-up"></i></button>' +
                '                            </div>' +
                '                        </td>' +
                '<td class="cart-item_cell-action"><i style="font-size:24px; cursor: pointer;" class="fa delete">&#xf014;</i></td>' +
                '                    </tr>';
            $('.cart-page_body').append(new_cartPageSection);
        } else {
            console.log(listCartItem);
            console.log($.inArray(productID, listCartItem));
            var quantityUpdate = $('.cart-page_id-' + productID).find('input');
            quantityUpdate.val(parseInt(quantityUpdate.val()) + parseInt(productQuantity));
        }
        swal("Success!", "Thanhk You bought!", "success");

    });

    $(document).on('click', '.shop-input-quantity button', function () {
        console.log('dat oki' + $(this));
        var quantityTag = $(this).parent().find('input');
        var quantity = parseInt(quantityTag.val());
        console.log(quantity);
        console.log($(this));
        console.log($(this).hasClass('cart-item_down'));
        console.log($(this).hasClass('cart-item_up'));
        if (quantity && quantity > 0) {
            if ($(this).hasClass('cart-item_up')) {
                quantity += 1;
                quantityTag.val(quantity);
            } else if ($(this).hasClass('cart-item_down')) {
                quantity -= 1;
                quantityTag.val(quantity);
            }
        }
        if (!quantity || quantity < 1) {
            quantityTag.val('1');
        }
    });

    $(document).on('click', '.cart-item_cell-action .delete', function () {
        // alert('.cart-item_cell-action .delete');
        // var s = $(this).parent().parent().find('td.cart-item_cell-id').text();
        var s = $(this).parent().parent().remove();
        console.log(s);
    });
});