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
                window.open(data.message,'_blank');
            }
        }
    });
}

UIkit.modal('#modal-rules');