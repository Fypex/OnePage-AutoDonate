
$('#id-нажатой кнопки').click(function() {
    var data = $('#id-формы').serializeArray();
    $.ajax({
        url: '/order',
        type: 'POST',
        dataType : 'JSON',
        data: data,
        success: function(data) {

        }
    });
});

function buyProduct(obj) {

    $.ajax({
        url: '/order/'+obj.id,
        type: 'POST',
        dataType : 'JSON',
        success: function(data) {

        }
    });

}

// $('#menu').click(function () {
//    $('.uk-navbar-nav').css("display","block");
// });