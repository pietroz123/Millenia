$(document).ready(function() {

    // =======================================================
    // SELECTs
    // =======================================================

    $('#servicos').select2({
        placeholder: "Selecione os serviços",
    });

    /**
     * Calcula a soma dos valores dos serviços
     */
    $('#servicos').change(function() {
        // Recupera os serviços selecionados
        const servicos = $('#servicos option:selected');
        // Calcula a soma dos valores dos serviços
        var soma = 0;
        for (let i = 0; i < servicos.length; i++) {
            const servico = servicos[i];
            soma += Number(servico.getAttribute('data-preco-servico'));
        }
        // Atribui ao campo "valor-sem-desconto"
        $('input#valor-sem-desconto').val(soma);
    });

    /**
     * Calcula o valor com desconto a partir do desconto
     */
    $('input#desconto').on('keyup change', function() {
        const desconto = $(this).val();
        const valorSemDesconto = $('input#valor-sem-desconto').val();
        // Calcula o valor com desconto 
        const valorComDesconto = valorSemDesconto * (1 - desconto / 100);
        // Atribui ao input
        $('input#valor-com-desconto').val(valorComDesconto.toFixed(2));
    });

    /**
     * Calcula o desconto a partir do valor com desconto
     */
    $('input#valor-com-desconto').on('keyup change', function() {
        const valorComDesconto = $(this).val();
        const valorSemDesconto = $('input#valor-sem-desconto').val();
        // Calcula o desconto 
        const desconto = 100 - (valorComDesconto * 100) / valorSemDesconto;
        // Atribui ao input
        $('input#desconto').val(desconto.toFixed(2));
    });

});