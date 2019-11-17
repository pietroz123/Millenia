$(document).ready(function() {

    $('select#cliente').select2({
        placeholder: 'Selecione um cliente',
    });
    $('select#servicos').select2({
        placeholder: 'Selecione os serviços',
    });

    /**
     * Lista de serviços
     */
    $('select#servicos').change(function() {

        // Recupera os serviços selecionados
        const servicos = $('#servicos option:selected');

        // Calcula a soma dos valores dos serviços e cria os itens da lista
        var soma = 0;
        var items = [];
        for (let i = 0; i < servicos.length; i++) {
            const servico = servicos[i];
            const preco = Number(servico.getAttribute('data-preco-servico'));
            items.push(
                '<li class="list-group-item">'+ servico.textContent +' <span class="float-right font-weight-bold">R$'+ preco.toFixed(2) +'</span></li>'
            );
            soma += preco;
        }

        $('.lista-servicos .lista').html(items);
        $('.lista-servicos .total').html(
            '<li class="list-group-item mt-2">TOTAL <span class="float-right font-weight-bold">R$'+ soma.toFixed(2) +'</span></li>'
        );
    });

    $("select#servicos").on("select2:unselect", function (evt) {
        if (!evt.params.originalEvent) {
          return;
        }
      
        evt.params.originalEvent.stopPropagation();
      });

});