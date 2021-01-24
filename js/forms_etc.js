$(document).ready(function() {
    $(".cpf").mask("999.999.999-99");
    //$(".ie").mask("999.999.999.999");
    //$(".rg").mask("9999999999");
    $(".data").mask("99/99/9999");
    $(".hora").mask("99:99:99");

    //Initialize Select2 Elements
    $(".select2").select2();

    //DATEPICKER
    /*$(".data").datepicker({
        format: 'dd/mm/yyyy',                
        language: 'pt-BR'
    });*/
//    $(".data").datepicker({
//        dateFormat: 'dd/mm/yy',
//        changeMonth: true,
//        changeYear: true,
//        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
//        dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
//        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
//        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
//        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
//        nextText: 'Próximo',
//        prevText: 'Anterior'
//    });
    
    $('#lista-icones :checked').parent().addClass('checked');

    $('#lista-icones').delegate('span', 'click', function(){
      $('#lista-icones .checked').removeClass('checked');
      $(this).prev().click().parent().addClass('checked');
      $('#MOD_ICONE').val($(this).html());
    });


    /*SALVAR CAMPOS*/
    $("#salvar").click(function(event) {
        event.preventDefault();
        $("#formEdit").submit();
    });
    $("#formEdit").validar({
        "marcar": false
    });
});