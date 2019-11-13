$(document).ready(function() {

    $('select#services').select2({
        placeholder: 'Selecione os serviços do profissional',
        tags: true, 
    });
    $('#city').select2({
        placeholder: "Selecione a cidade",
    });
    $('#state').select2({
        placeholder: "Selecione o estado",
    });

});