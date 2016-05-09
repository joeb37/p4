$(document).ready(function() {

    $('#btn-add').click(function() {
        $('#available option:selected').each(function() {
            $('#machines').append("<option SELECTED value='" + $(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });

    $('#btn-remove').click(function() {
        $('#machines option:selected').each(function() {
            $('#available').append("<option value='" + $(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });

    $('#btn-update').click(function() {
        $('#machines option').prop("selected", true);
    });

});
