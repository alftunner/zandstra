$(document).ready(function() {
    $('.sendForm').on('click', function () {
        var form = $('.formTask');
        $.ajax({
            url: '/TaskManager/TaskController.php',
            type: 'POST',
            data: {
                action: 'create',
                name: form.find('.name').val(),
                description: form.find('.description').val(),
                date: form.find('.date').val(),
                status: form.find('.status').val()
            },
            dataType: 'json',
            success: function(result) {
                $('.formResult').html(result);
            }
        });
    });
});