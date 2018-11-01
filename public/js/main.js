function buyProduct(obj) {
    var data = $('#buy-product-'+obj.id).serializeArray();
    $.ajax({
        url: '/order',
        type: 'POST',
        dataType : 'JSON',
        data: data,
        success: function(data) {
            if(data.status == 'error')
            {
                UIkit.notification(data.message, {status: 'danger',pos: 'top-right'})
            }else{
                window.location.replace(data.message);
            }
        }
    });
}

UIkit.modal('#modal-rules');