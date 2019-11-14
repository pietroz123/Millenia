$(document).ready(function() {

    // =======================================================
    // SELECTs
    // =======================================================

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

    // =======================================================
    // MÁSCARAS
    // =======================================================

    $('#cpf').mask('000.000.000-00', {
        reverse: true,
        placeholder: "___.___.___-__",
    });
    $('#rg').mask('00.000.000-0', {
        reverse: true,
        placeholder: "__.___.___-_",
    });
    $('#smartphone').mask('(00) 00000-0000', {
        placeholder: "(__) _____-____"
    });
    $('#phone').mask('(00) 0000-0000', {
        placeholder: "(__) ____-____"
    });
    $('#cep').mask('00000-000', {
        placeholder: "_____-___"
    });

    // =======================================================
    // COLOR PICKER
    // =======================================================

    $("#color-picker").spectrum({
        showPaletteOnly: true,
        color: 'blanchedalmond',
        palette: [
            ["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
            ["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
            ["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
            ["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
            ["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
            ["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
            ["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
            ["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
        ]
    });

});