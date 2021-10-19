require('./bootstrap');


$(document).ready(function () {
    
    $('body').on('change', '#trade_marks_id', function (event) {
        console.log('APP.JS')
        $.ajax({
            type: "get",
            url: 'modelos/' + $(this).val(),
            success: function (data) {
                $('#models_id').empty();

                $.each(data, function () {
                    $('#models_id').append("<option value='" + this.id + "'>" + this.description + "</option>");
                });
            }
        });
    });

});
