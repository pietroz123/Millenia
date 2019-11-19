$(document).ready(function() {

    $('#preco').mask('000000000000000.00', {reverse: true});

    $('select#marca').select2({
        placeholder: "Selecione a marca",
        tags: true,
    });

});