$(document).ready(function() {

    $('#btn-update').click(function() {
        $('#machines option').prop("selected", true);
    });

    // These two jQuery statements were created with the help of an online tutorial at
    // www.designchemical.com/blog/index.php/jquery/create-add-remove-select-lists-using-jquery/

    $('#btn-add').click(function() {
        $('#available option:selected').each(function() {
            var $item = $("option", {"value": $(this).val(), "text": $(this).text()});
            $('#machines').append($item);
            $(this).remove();
        });
    });

    $('#btn-remove').click(function() {
        $('#machines option:selected').each(function() {
            var $item = $("option", {"value": $(this).val(), "text": $(this).text()});
            $('#available').append($item);
            $(this).remove();
        });
    });

});
