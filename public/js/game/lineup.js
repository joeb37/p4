$(document).ready(function() {

    $('#btn-update').click(function() {
        $('#machines option').prop("selected", true);
    });

    // These two jQuery statements were created with the help of an online tutorial at
    // www.designchemical.com/blog/index.php/jquery/create-add-remove-select-lists-using-jquery/

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

});
