$(document).ready(function() {
    //MENU CADASTROS SISTEMA
    $(".cadastrosistema").toggle(200);
    
    $(".fone").mask("(99)9999-9999?9");
    $(".uf").mask("aa");
    $(".cep").mask("99999-999");
    $(".cpf").mask("999.999.999-99");
    $(".cnpj").mask("99.999.999/9999-99");
    //$(".ie").mask("999.999.999.999");
    //$(".rg").mask("9999999999");
    $(".data").mask("99/99/9999");
    $(".hora").mask("99:99:99");
    $(".datahora").mask("99/99/9999 99:99:99");
    $(".valor").maskMoney({
        decimal: ",",
        thousands: "."
    });
    $(".valorpeso").maskMoney({
        precision: 3,
        decimal: ",",
        thousands: "."
    });

    //Initialize Select2 Elements
    $(".select2").select2();

    //DATEPICKER
    $(".data").datepicker({
        format: 'dd/mm/yyyy',                
        language: 'pt-BR'
    });
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

    /*LIMPAR CAMPOS EDIT*/
    $("#limpa").click(function(event) {
        event.preventDefault();
        document.formEdit.reset();
    });

    /*SALVAR CAMPOS*/
    $("#salvar").click(function(event) {
        event.preventDefault();
        $("#formEdit").submit();
    });

    $("#salvarGaleria").click(function(event) {
        event.preventDefault();
        $("#formFotos").submit();
    });

    $("#formEdit").validar({
        "marcar": false
    });

    $("#formFotos").validar({
        "marcar": false
    });

    $("#formLogin").validar({
        "after": function() {
            $('#msg-login').hide();
            $('#msg-login').html('');
            $('.form-group').removeClass('has-success');
            $('.form-group').removeClass('has-error');
            $('.form-group').removeClass('has-warning');
            $('#loading-login').show(500);
            $.post(URLBASE + 'login/login', this.serialize(), function(data) {
                if (data.ok) {

                    //classes de cor nos campos
                    $('.form-group').addClass(data.classe);

                    //mensagem referente ao login
                    $('#msg-login').show(500);
                    setTimeout(function(){
                        $('#msg-login').html(data.msg);
                    },500);

                    //direciona para o sistema
                    setTimeout(function(){
                        location.href = URLBASE + 'index';
                    },1500);

                } else {

                    //classes de cor nos campos
                    $('.form-group').addClass(data.classe);

                    //mensagem referente ao login
                    $('#msg-login').show(500);
                    setTimeout(function(){
                        $('#msg-login').html(data.msg);
                    },500);
                    $('#senha').val('');

                }
                $('#loading-login').hide(500);
            }, 'json');
            return false;
        },
        "marcar": false
    });

    /*LIMPAR CAMPOS LOGIN*/
    $("#limpaLog").click(function(event) {
        event.preventDefault();
        document.formLogin.reset();
    });

    /*ENTRAR LOGIN*/
    $("#entrar").click(function(event) {
        event.preventDefault();
        $("#formLogin").submit();
    });
    
});

//FUNCAO PARA FAVORITAR OS MODULOS
function favoritar(id) {
    $.get(URLBASE + 'ajax/favoritar/' + id, true, function(data) {
        if (data.ok) {
            if (data.ok == "S") {
                $("#fav_" + id).addClass("fav");
            } else {
                $("#fav_" + id).removeClass("fav");
            }
        } else {
            alert('Ooops, houve algum problema!!');
        }
    }, 'json');
}

//FUNÇÃO QUE SELECIONA OU DESMARCA TODOS ITENS DO LST
function selecionar(value) {
    if (value) {
        $(".seleciona").attr("checked", true);
    } else {
        $(".seleciona").attr("checked", false);
    }
}

//FUNCAO PARA EXCLUIR TODOS MARCADOS
function excluirTodos(modulo) {
    var form = '<form id="excluiMarcados" name="excluiMarcados" method="post" action="' + URLBASE + modulo + '/excluirTodos">';
    $(".seleciona").each(function() {
        if ($(this).attr("valor") > 0 && $(this).attr("checked")) {
            form += '<input type="hidden" name="item[]" value="' + $(this).attr("valor") + '">';
        }
    })
    form += '</form>';

    $("#formExc").html(form);

    $("#excluiMarcados").submit();
}

/*FUNCOES DE CLIENTE*/
//FUNCAO QUE TROCA CLIENTE FISICO/JURIDICO
function tipoPessoa(tipo, cliente) {
    $.get(URLBASE + 'clientefornecedor/tipopessoa/' + tipo + '/' + cliente, true, function(data) {
        if (data.ok) {
            $("#tipoPessoa").html(data.ok);

            if (tipo == "F") {
                $(".cpf").mask("999.999.999-99");
                //$(".rg").mask("9999999999");
                $(".data").mask("99/99/9999");
                $(".data").datepicker({
                    format: 'dd/mm/yyyy',                
                    language: 'pt-BR'
                });

                $("#verificaCpf").validar({
                    "after": function() {
                        $.post(URLBASE + 'clientefornecedor/verifica', this.serialize(), function(data) {
                            if (data.result == false) {
                                alert("Esse CPF já está cadastrado!");
                                $("#CLF_CPF").val("");
                                $(this).focus();
                            }
                            $("#cpfLoading").css("display", "none");
                        }, 'json');
                        return false;
                    }
                });

                $("#CLF_CPF").change(function() {
                    $("#cpfLoading").css("display", "inline-block");
                    $("#cpfV").val($(this).val());
                    $("#verificaCpf").submit();
                });
            } else {
                $(".cnpj").mask("99.999.999/9999-99");
                $(".ie").mask("999.999.999.999");

                $("#verificaCnpj").validar({
                    "after": function() {
                        $.post(URLBASE + 'clientefornecedor/verifica', this.serialize(), function(data) {
                            if (data.result == false) {
                                alert("Esse CNPJ já está cadastrado!");
                                $("#CLF_CNPJ").val("");
                                $(this).focus();
                            }
                            $("#cnpjLoading").css("display", "none");
                        }, 'json');
                        return false;
                    }
                });

                $("#CLF_CNPJ").change(function() {
                    $("#cnpjLoading").css("display", "inline-block");
                    $("#cnpjV").val($(this).val());
                    $("#verificaCnpj").submit();
                });
            }

            $(".loading").css("display", "none");
        } else {
            alert('Ooops, houve algum problema!!');
        }
    }, 'json');
}

$(document).ready(function() {
    //CHECA SE EMAIL EXISTE
    $("#verificaEmail").validar({
        "after": function() {
            $.post(URLBASE + 'clientefornecedor/verifica', this.serialize(), function(data) {
                if (data.result == false) {
                    alert("Esse Email já está cadastrado!");
                    $("#CLF_EMAIL").val("");
                    $(this).focus();
                }
                $("#emailLoading").css("display", "none");
            }, 'json');
            return false;
        }
    });

    $("#CLF_EMAIL").change(function() {
        $("#emailLoading").css("display", "inline-block");
        $("#emailV").val($(this).val());
        $("#verificaEmail").submit();
    });
});

//CHECA O CEP E TRAZ O ENDEREÇO
function carregaDados(_this, pre) {
    if ($(_this).val().length == 9) {
        $("#cepLoading").css("display", "block");
        cep = $(_this).val();
        cep = cep.replace("-", "");
        $.get(URLBASE + "ajax/cep/" + cep, true, function(data) {
            $("#cepLoading").css("display", "none");

            if (data.ok.cidade != "") {
                //$("#CLI_CIDADE").val(data.ok.cidade);
                //$("#CLI_ESTADO").val(data.ok.uf);
                $("#" + pre + "_ENDERECO").val(data.ok.logradouro);
                $("#" + pre + "_BAIRRO").val(data.ok.bairro);

                if (data.est > 0 && data.cid > 0) {
                    $("#EST_ID").val(data.est);
                    trocaEstado(data.est, data.cid);
                }
            } else {
                alert("CEP não encontrado!!");
                // $("#" + pre + "_CEP").val("");
            }
        }, 'json');
    }
}

//TRAZ OS MENUS QUANDO DIGITA NA BUSCA
function buscamenu(digitado) {
    $.post(URLBASE + "ajax/buscamenu/", {digitado: digitado}, function(data) {
        if (data.ok) {
            $(".sidebar-menu").html(data.menu);
        }
    }, 'json');
}

//TRAZ AS CIDADES QUANDO TROCA O ESTADO
function trocaEstado(uf, cidade) {
    $.get(URLBASE + "ajax/trocaestado/" + uf + "/" + cidade, true, function(data) {
        if (data.ok) {
            $("#cidades").html(data.ok);
            //Initialize Select2 Elements
            $(".select2").select2();
        } else {
            alert("Houve um Problema!!");
        }
    }, 'json');
}
/*FIM FUNCOES DE CLIENTE*/

//VERIFICA O 9 DIGITO DO TELEFONE
function verificaTelefone(puti){
    valor = $(puti).val();
    valor = valor.replace('_', '');
    //console.log(valor);
    if(valor.length > 13){
        //console.log(14);
        $(puti).mask('(99)99999-9999');
    }else{
        //console.log(13);
        $(puti).mask('(99)9999-9999?9');
    }
}

function ordenar(valor, sentido){
    $("#ordem").val(valor);
    $("#sentido").val(sentido);
    $('#formBusca').submit();
}

//NUMBER FORMAT PARA JS
function number_format( number, decimals, dec_point, thousands_sep ) {
    var n = number, prec = decimals;
    n = !isFinite(+n) ? 0 : +n;
    prec = !isFinite(+prec) ? 0 : Math.abs(prec);
    var sep = (typeof thousands_sep == "undefined") ? ',' : thousands_sep;
    var dec = (typeof dec_point == "undefined") ? '.' : dec_point;

    var s = (prec > 0) ? n.toFixed(prec) : Math.round(n).toFixed(prec); //fix for IE parseFloat(0.55).toFixed(0) = 0;

    var abs = Math.abs(n).toFixed(prec);
    var _, i;

    if (abs >= 1000) {
        _ = abs.split(/\D/);
        i = _[0].length % 3 || 3;

        _[0] = s.slice(0,i + (n < 0)) +
              _[0].slice(i).replace(/(\d{3})/g, sep+'$1');

        s = _.join(dec);
    } else {
        s = s.replace('.', dec);
    }

    return s;
}

function pessoa(pre, pes){
    if(pes == "F"){
        $("#campo-fisica").show();
        $("#"+pre+"_CPF").attr("validar", "cpf");

        $("#campo-juridica").hide();
        $("#"+pre+"_CNPJ").removeAttr("validar");
        $("#"+pre+"_CNPJ").val("");
    }else{
        $("#campo-juridica").show();
        $("#"+pre+"_CNPJ").attr("validar", "cnpj");

        $("#campo-fisica").hide();
        $("#"+pre+"_CPF").removeAttr("validar");
        $("#"+pre+"_CPF").val("");
    }
}

function verificacpf(model, pre, cpf){
    $("#cpfLoading").css("display", "block");
    $.post(URLBASE + 'ajax/verificacpf', {model: model, pre: pre, cpf: cpf}, function(data) {
        if (data.result == false) {
            alert("Esse CPF já está cadastrado!");
            $("#"+pre+"_CPF").val("");
            $("#"+pre+"_CPF").focus();
        }
        $("#cpfLoading").css("display", "none");
    }, 'json');
    return false;
}

function verificacnpj(model, pre, cnpj){
    $("#cnpjLoading").css("display", "block");
    $.post(URLBASE + 'ajax/verificacnpj', {model: model, pre: pre, cnpj: cnpj}, function(data) {
        if (data.result == false) {
            alert("Esse CNPJ já está cadastrado!");
            $("#"+pre+"_CNPJ").val("");
            $("#"+pre+"_CNPJ").focus();
        }
        $("#cnpjLoading").css("display", "none");
    }, 'json');
    return false;
}

function novocliente(){
    
    var url = window.location.href.split("/");
    
    var model = url[4];
    
    if(model != ""){
        location.href = URLBASE+"clientefornecedor/novocliente/"+model;
    }else{
        alert("Este botão não está configurado para este módulo!");
    }
    
}

/*FUNÇÕES PARA INSERIR NOVOS REGISTROS NOS SELECTS*/
function novointervalo(){
    $('#modal-intervalo').modal('show');
}

function salvaintervalo(){

    var flag = true;
    if ($("#INN_INICIO").val() == "") {
        alert("Informe o Início do Item!");
        flag = false;
    }
    if ($("#INN_FIM").val() == "") {
        alert("Informe o Fim do Item!");
        flag = false;
    }

    if (flag) {
        $("#loading-intervalo").toggle(500);
        $.post(URLBASE + 'ajax/novointervalo/', {INN_INICIO: $("#INN_INICIO").val(), INN_FIM: $("#INN_FIM").val()},
                function (data) {
                    $('#INN_ID').append(data.option);
                    $('#select2-INN_ID-container').html(data.INN_INICIO_INN_FIM);
                    $("#loading-intervalo").toggle(500);
                    $("#modal-intervalo").modal('hide');
                    $("#INN_INICIO").val("");
                    $("#INN_FIM").val("");
                }, 'json');
    }

}

function novogrupoestoque(){
    $('#modal-gruposestoque').modal('show');
}

function salvagruposestoque(){

        var flag = true;
        if ($("#GRE_NOME").val() == "") {
            alert("Informe o Nome do Grupo do Item!");
            flag = false;
        }
        
        var atualiza = "N";
        if($("#ATUALIZASim").attr("checked") == "checked"){
            atualiza = "S";
        }

        if (flag) {
            $("#loading-gruposestoque").toggle(500);
            $.post(URLBASE + 'ajax/novogruposestoque/', {GRE_NOME: $("#GRE_NOME").val(), GRE_COMISSAO: $("#GRE_COMISSAO").val(), GRE_ATUALIZA_PRECO: atualiza },
                    function (data) {
                        $('#GRE_ID').append(data.option);
                        $('#select2-GRE_ID-container').html(data.GRE_NOME);
                        $("#loading-gruposestoque").toggle(500);
                        $("#modal-gruposestoque").modal('hide');
                        $("#GRE_NOME").val("");
                    }, 'json');
        }

}

function novoncm(){
    $('#modal-ncm').modal('show');
}

function salvancm(){

        var flag = true;
        if ($("#NCM_DESCRICAO").val() == "") {
            alert("Informe o NCM do Item!");
            flag = false;
        }
        if ($("#NCM_CODIGO").val() == "") {
            alert("Informe o Código do Item!");
            flag = false;
        }

        if (flag) {
            $("#loading-ncm").toggle(500);
            $.post(URLBASE + 'ajax/novoncm/', {NCM_DESCRICAO: $("#NCM_DESCRICAO").val(), NCM_CODIGO: $("#NCM_CODIGO").val()},
                    function (data) {
                        $('#NCM_ID').append(data.option);
                        $('#select2-NCM_ID-container').html(data.NCM_DESCRICAO);
                        $("#loading-ncm").toggle(500);
                        $("#modal-ncm").modal('hide');
                        $("#NCM_DESCRICAO").val("");
                        $("#NCM_CODIGO").val("");
                    }, 'json');
        }

}

function novocfop(){
    $('#modal-cfop').modal('show');
}

function salvacfop(){

        var flag = true;
        if ($("#CFO_DESCRICAO").val() == "") {
            alert("Informe o CFOP do Item!");
            flag = false;
        }
        if ($("#CFO_CODIGO").val() == "") {
            alert("Informe o Código do Item!");
            flag = false;
        }

        if (flag) {
            $("#loading-cfop").toggle(500);
            $.post(URLBASE + 'ajax/novocfop/', {CFO_DESCRICAO: $("#CFO_DESCRICAO").val(), CFO_CODIGO: $("#CFO_CODIGO").val()},
                    function (data) {
                        $('#CFO_ID').append(data.option);
                        $('#select2-CFO_ID-container').html(data.CFO_DESCRICAO);
                        $("#loading-cfop").toggle(500);
                        $("#modal-cfop").modal('hide');
                        $("#CFO_DESCRICAO").val("");
                        $("#CFO_CODIGO").val("");
                    }, 'json');
        }

}

function novounidademedida(){
    $('#modal-unidademedida').modal('show');
}

function salvaunidademedida(){

        var flag = true;
        if ($("#UNM_UNIDADE_MEDIDA").val() == "") {
            alert("Informe a Unidade Medida do Item!");
            flag = false;
        }
        if ($("#UNM_DESCRICAO").val() == "") {
            alert("Informe a Descrição do Item!");
            flag = false;
        }
        if ($("#UNM_CASAS_DECIMAIS").val() == "") {
            alert("Informe as Casas Decimais do Item!");
            flag = false;
        }

        if (flag) {
            $("#loading-unidademedida").toggle(500);
            $.post(URLBASE + 'ajax/novounidademedida/', {UNM_UNIDADE_MEDIDA: $("#UNM_UNIDADE_MEDIDA").val(), UNM_DESCRICAO: $("#UNM_DESCRICAO").val(), UNM_CASAS_DECIMAIS: $("#UNM_CASAS_DECIMAIS").val()},
                    function (data) {
                        $('#UNM_ID').append(data.option);
                        $('#select2-UNM_ID-container').html(data.UNM_UNIDADE_MEDIDA);
                        $("#loading-unidademedida").toggle(500);
                        $("#modal-unidademedida").modal('hide');
                        $("#UNM_UNIDADE_MEDIDA").val("");
                        $("#UNM_DESCRICAO").val("");
                        $("#UNM_CASAS_DECIMAIS").val("");
                    }, 'json');
        }

}

function novocategoriaproduto(){
    $('#modal-categoriaproduto').modal('show');
}

function salvacategoriaproduto(){

        var flag = true;
        if ($("#CAP_NOME").val() == "") {
            alert("Informe o Nome da Categoria do Item!");
            flag = false;
        }

        if (flag) {
            $("#loading-categoriaproduto").toggle(500);
            $.post(URLBASE + 'ajax/novocategoriaproduto/', {CAP_NOME: $("#CAP_NOME").val()},
                    function (data) {
                        $('#CAP_ID').append(data.option);
                        $('#select2-CAP_ID-container').html(data.CAP_NOME);
                        $("#loading-categoriaproduto").toggle(500);
                        $("#modal-categoriaproduto").modal('hide');
                        $("#CAP_NOME").val("");
                    }, 'json');
        }

}

function novoatividade(){
    $('#modal-atividade').modal('show');
}

function salvaatividade(){

        var flag = true;
        if ($("#ATI_CNAE").val() == "") {
            alert("Informe a CNAE do Item!");
            flag = false;
        }
        if ($("#ATI_DESCRICAO").val() == "") {
            alert("Informe a Descrição do Item!");
            flag = false;
        }

        if (flag) {
            $("#loading-atividade").toggle(500);
            $.post(URLBASE + 'ajax/novoatividade/', {ATI_CNAE: $("#ATI_CNAE").val(), ATI_DESCRICAO: $("#ATI_DESCRICAO").val()},
                    function (data) {
                        $('#ATI_ID').append(data.option);
                            $('#select2-ATI_ID-container').html(data.ATI_DESCRICAO);
                            $("#loading-atividade").toggle(500);
                            $("#modal-atividade").modal('hide');
                            $("#ATI_DESCRICAO").val("");
                            $("#ATI_CNAE").val("");
                    }, 'json');
        }

}

function novotipodespesa(){
    $('#modal-tipodespesa').modal('show');
}

function salvatipodespesa(){

        var flag = true;

        if ($("#TID_DESCRICAO").val() == "") {
            alert("Informe a Descrição do Tipo!");
            flag = false;
        }

        if (flag) {
            $("#loading-tipodespesa").toggle(500);
            $.post(URLBASE + 'ajax/novotipodespesa/', {TID_DESCRICAO: $("#TID_DESCRICAO").val()},
                    function (data) {
                        $('#TID_ID').append(data.option);
                        $('#select2-TID_ID-container').html(data.TID_DESCRICAO);
                        $("#loading-tipodespesa").toggle(500);
                        $("#modal-tipodespesa").modal('hide');
                        $("#TID_DESCRICAO").val("");
                    }, 'json');
        }

}

function novocentrocusto(){
    $('#modal-centrocusto').modal('show');
}

function salvacentrocusto(){

        var flag = true;

        if ($("#CEC_DESCRICAO").val() == "") {
            alert("Informe a Descrição do Centro de Custo!");
            flag = false;
        }

        if (flag) {
            $("#loading-centrocusto").toggle(500);
            $.post(URLBASE + 'ajax/novocentrocusto/', {CEC_DESCRICAO: $("#CEC_DESCRICAO").val()},
                    function (data) {
                        $('#CEC_ID').append(data.option);
                        $('#select2-CEC_ID-container').html(data.CEC_DESCRICAO);
                        $("#loading-centrocusto").toggle(500);
                        $("#modal-centrocusto").modal('hide');
                        $("#CEC_DESCRICAO").val("");
                    }, 'json');
        }

}

function novoconta(){
    $('#modal-conta').modal('show');
}

function salvaconta(){

        var flag = true;

        if ($("#CON_NUMERO").val() == "") {
            alert("Informe o Número da Conta!");
            flag = false;
        }

        if ($("#CON_DESCRICAO").val() == "") {
            alert("Informe a Descrição da Conta!");
            flag = false;
        }

        if (flag) {
            $("#loading-conta").toggle(500);
            $.post(URLBASE + 'ajax/novoconta/', {CON_TIPO: $("#CON_TIPO").val(), CON_NUMERO: $("#CON_NUMERO").val(), CON_DESCRICAO: $("#CON_DESCRICAO").val()},
                    function (data) {
                        $('#CON_ID').append(data.option);
                        $('#select2-CON_ID-container').html(data.CON_DESCRICAO);
                        $("#loading-conta").toggle(500);
                        $("#modal-conta").modal('hide');
                        $("#CON_DESCRICAO").val("");
                    }, 'json');
        }

}

function novotiporeceita(){
    $('#modal-tiporeceita').modal('show');
}

function salvatiporeceita(){

        var flag = true;

        if ($("#TIR_DESCRICAO").val() == "") {
            alert("Informe a Descrição do Tipo!");
            flag = false;
        }

        if (flag) {
            $("#loading-tiporeceita").toggle(500);
            $.post(URLBASE + 'ajax/novotiporeceita/', {TIR_DESCRICAO: $("#TIR_DESCRICAO").val()},
                    function (data) {
                        $('#TIR_ID').append(data.option);
                        $('#select2-TIR_ID-container').html(data.TIR_DESCRICAO);
                        $("#loading-tiporeceita").toggle(500);
                        $("#modal-tiporeceita").modal('hide');
                        $("#TIR_DESCRICAO").val("");
                    }, 'json');
        }

}

function novocentrolucro(){
    $('#modal-centrolucro').modal('show');
}

function salvacentrolucro(){

        var flag = true;

        if ($("#CEL_DESCRICAO").val() == "") {
            alert("Informe a Descrição do Centro de Lucro!");
            flag = false;
        }

        if (flag) {
            $("#loading-centrolucro").toggle(500);
            $.post(URLBASE + 'ajax/novocentrolucro/', {CEL_DESCRICAO: $("#CEL_DESCRICAO").val()},
                    function (data) {
                        $('#CEL_ID').append(data.option);
                        $('#select2-CEL_ID-container').html(data.CEL_DESCRICAO);
                        $("#loading-centrolucro").toggle(500);
                        $("#modal-centrolucro").modal('hide');
                        $("#CEL_DESCRICAO").val("");
                    }, 'json');
        }

}

function novoparcelaspagar(id){
    $('#modal-parcelaspagar'+id).modal('show');
    calcvalorpago(id);
}

function salvaparcelaspagar(id){

        var flag = true;

        if ($("#PAP_DATA_PAGAMENTO_"+id).val() == "") {
            alert("Informe a Data do Pagamento!");
            flag = false;
        }
        
        if (flag) {
            $("#loading-parcelaspagar"+id).toggle(500);
            $.post(URLBASE + 'ajax/novoparcelaspagar/'+id, {PAP_ID: $("#PAP_ID_"+id).val(), 
                                                        PAP_DATA_VENCIMENTO: $("#PAP_DATA_VENCIMENTO_"+id).val(), 
                                                        PAP_VALOR_PARCELA: $("#PAP_VALOR_PARCELA_"+id).val(),
                                                        PAP_DESCONTO: $("#PAP_DESCONTO_"+id).val(),
                                                        PAP_JUROS: $("#PAP_JUROS_"+id).val(),
                                                        PAP_VALOR_PAGO: $("#PAP_VALOR_PAGO_"+id).val(),
                                                        PAP_DATA_PAGAMENTO: $("#PAP_DATA_PAGAMENTO_"+id).val(),
                                                        PAP_PAGO: $("#PAP_PAGO_"+id).val(),
                                                        PAP_CAIXA_COFRE: $("#PAP_CAIXA_COFRE_"+id).val()},
                    function (data) {
                        alert(data.mensagem);
                        if(data.ok){
                            location.href = URLBASE;
//                            $(".linha_pagar_"+id).remove();
//                            var alerta = $(".label-warning").html();
//                            $(".label-warning").html(parseFloat(alerta)-1);
                        }
                        $("#loading-parcelaspagar"+id).toggle(500);
                        $("#modal-parcelaspagar"+id).modal('hide');
                        
                    }, 'json');
        }

}

function novoparcelasreceber(id){
    $('#modal-parcelasreceber'+id).modal('show');
    calcvalorrecebido(id);
}

function salvaparcelasreceber(id){

        var flag = true;

        if ($("#PAR_DATA_RECEBIMENTO_"+id).val() == "") {
            alert("Informe a Data do Recebimento!");
            flag = false;
        }

        if (flag) {
            $("#loading-parcelasreceber"+id).toggle(500);
            $.post(URLBASE + 'ajax/novoparcelasreceber/'+id, {PAR_ID: $("#PAR_ID_"+id).val(), 
                                                        PAR_DATA_VENCIMENTO: $("#PAR_DATA_VENCIMENTO_"+id).val(), 
                                                        PAR_VALOR_PARCELA: $("#PAR_VALOR_PARCELA_"+id).val(),
                                                        PAR_DESCONTO: $("#PAR_DESCONTO_"+id).val(),
                                                        PAR_JUROS: $("#PAR_JUROS_"+id).val(),
                                                        PAR_VALOR_RECEBIDO: $("#PAR_VALOR_RECEBIDO_"+id).val(),
                                                        PAR_DATA_RECEBIMENTO: $("#PAR_DATA_RECEBIMENTO_"+id).val(),
                                                        PAR_RECEBIDO: $("#PAR_RECEBIDO_"+id).val()},
                    function (data) {
                        alert(data.mensagem);
                        if(data.ok){
                            location.href = URLBASE;
//                            $(".linha_receber_"+id).remove();
//                            var alerta = $(".label-warning").html();
//                            $(".label-warning").html(parseFloat(alerta)-1);
                        }
                        $("#loading-parcelasreceber"+id).toggle(500);
                        $("#modal-parcelasreceber"+id).modal('hide');
                        
                    }, 'json');
        }

}

function mudarestabelecimento(EST_ID){
    
    $('#modal-estabelecimento').modal('show');
    
    $('#loading-estabelecimento').show(500);
    
    $.post(URLBASE + 'ajax/mudarestabelecimento/', {EST_ID: EST_ID},
        function (data) {
            setTimeout(function(){
                location.href = URLBASE;
            },2000);
        }, 'json');
    
    
}

//function online(){
//    $.post(URLBASE + 'online.php', true,
//        function (data) {
//            if(data.ausente){
//                var html = '<i class="fa fa-circle text-warning"></i> Ausente';
//                $(".user-panel .info a").html(html);
//            }
//            
//        }, 'json');
//}
//setInterval("online()", 3000); //A função é executada UMA VEZ A CADA três segundos

function abrefechamenu(classe){
    $("."+classe).toggle(200);
    $(".fa-plus-circle").toggle(200);
    $(".fa-minus-circle").toggle(200);
}

//NFE
function buscanfe(id){
    $("#loading_"+id).show(500);

    $.post(URLBASE + 'nfhead/consulta', {id: id}, function(data) {
        if(data.ok){
            $("#nfe_"+id).html(data.danfe);
            $("#xml_"+id).html(data.xml);
        }else{
            $("#nfe_"+id).html(data.erro);
        }

    }, 'json');
    return false;        
}

//CARTA DE CORRECAO
function cartacorrecaonfe(id){
    var flag = true;
    
    var correcao = $("#correcao_"+id).val();
        
    if ($("#correcao_"+id).val() == "") {
        alert("Informe a Correção!");
        flag = false;
    }

    if (flag) {
        $("#loading-cartacorrecao-"+id).show(500);
        $("#btn-correcao-"+id).hide();
        $.post(URLBASE + 'nfhead/cartacorrecao/', {id: id, correcao: correcao},
            function (data) {
                if(data.ok){
                    $("#cartacorrecao-"+id).addClass("modal-success");
                    $("#cartacorrecao-"+id).removeClass("modal-warning");
                    
                    $("#pdfcc_"+id).html(data.pdf);
//                    $("#xmlcc_"+id).html(data.xml);
                    
                    $('#cartacorrecao-'+id).modal('show');
                }else{
                    $("#cartacorrecao-"+id).addClass("modal-danger");
                    $("#cartacorrecao-"+id).removeClass("modal-warning");
                }
                $("#informacaocc_"+id).html(data.mensagem);
                $("#loading-cartacorrecao-"+id).hide(500);
            }, 'json');
    }

}

// NFE CANCELAR
function cancelanfe(id, emitir){
    var flag = true;
    
    var justificativa = "";
    
    if(emitir == "S"){
        
        if ($("#justificativa_"+id).val() == "") {
            alert("Informe a Justificativa!");
            flag = false;
        }
        
        justificativa = $("#justificativa_"+id).val();
    }

    if (flag) {
        $("#loading-cancelamento-"+id).show(500);
        $("#btn-solicita-"+id).hide();
        $.post(URLBASE + 'nfhead/excluir/', {id: id, justificativa: justificativa},
            function (data) {
                if(data.ok){
                    $("#cancelar-"+id).addClass("modal-success");
                    $("#cancelar-"+id).removeClass("modal-danger");
                    
                    //linha em vermelho
                    $("#linha_"+id).css("color", "red");
                    $("#nfe_"+id).html("");
                    $("#xml_"+id).html(data.xml);
                    
                    $('#cancelar-'+id).modal('show');
                    
                }else{
                    $("#cancelar-"+id).addClass("modal-warning");
                    $("#cancelar-"+id).removeClass("modal-danger");
                }
                $("#informacao_"+id).html(data.mensagem);
                $("#loading-cancelamento-"+id).hide(500);
            }, 'json');
    }

}

function novofechamento(datafechamento){
    
    $('#modal-fechamento').modal('show');
    
    $('#loading-fechamento').show(500);
    
    $.post(URLBASE + 'ajax/totalcaixa/', {datafechamento: datafechamento},
        function (data) {
            $('#FEC_DATA').val(datafechamento);
            $('#TOTAL_CAIXA').val(data.valor);
            $('#FEC_VALOR').val(data.valor);
            $('#loading-fechamento').hide(500);
        }, 'json');
    
    
}

function totalfechamento(){
    var totalcaixa = $("#TOTAL_CAIXA").val().replace(".","").replace(".","").replace(".","").replace(",",".");
    if(totalcaixa == ""){ totalcaixa = 0; }
    var sobra = $("#FEC_SOBRA").val().replace(".","").replace(".","").replace(".","").replace(",",".");
    if(sobra == ""){ sobra = 0; }
    
    var total = number_format(parseFloat(totalcaixa)-parseFloat(sobra),2,',','.');
    
    $("#FEC_VALOR").val(total);
}

function salvafechamento(){

    if(confirm("Você tem certeza dos dados informados?")){    
    
        $("#loading-fechamento").show(500);
        $.post(URLBASE + 'ajax/novofechamento/', {FEC_DATA: $("#FEC_DATA").val(), FEC_VALOR: $("#FEC_VALOR").val(), FEC_SOBRA: $("#FEC_SOBRA").val() },
                function (data) {
                    $("#loading-fechamento").hide(500);
                    $('#modal-fechamento').modal('hide');
                    $("#divbotaofechamento").append(data.modal);
                    $('#modal-alertafechamento').modal('show');
                    if(data.ok){
                        
                        $("#loading-alertafechamento").show(500);
                        setTimeout(function(){
                            location.href = URLBASE;
                        },3000);
                        
                    }
                }, 'json');
                
    }

}

function novocaixa(){

    $.get(URLBASE + 'ajax/sobrafechamento/', true,
        function (data) {
            if(data.ok){
                $('#modal-caixa').modal('show');
                $('#loading-caixa').show(500);
                $("#CAI_VALOR").val(data.sobra);
                if(data.sobra == "0,00"){
                    $("#CAI_VALOR").removeAttr("readonly");
                }
                $('#loading-caixa').hide(500);
            }else{
                $('#modal-caixa').modal('hide');
                $('#loading-caixa').hide(500);
                $("#alertacaixa").append(data.mensagem);
                $('#modal-alertaaberto').modal('show');
            }
            
        }, 'json');
    
}

function salvacaixa(){

    if(confirm("Você tem certeza dos dados informados?")){    
    
        $("#loading-caixa").show(500);
        $.post(URLBASE + 'ajax/novocaixa/', {CAI_DESCRICAO: $("#CAI_DESCRICAO").val(), CAI_DATA: $("#CAI_DATA").val(), CAI_HORA: $("#CAI_HORA").val(), CAI_VALOR: $("#CAI_VALOR").val() },
                function (data) {
                    $("#loading-caixa").hide(500);
                    $('#modal-caixa').modal('hide');
                    $("#alertacaixa").html(data.modal);
                    $('#modal-alertacaixa').modal('show');
                    $("#loading-alerta").show(500);
                    if(data.ok){
                        setTimeout(function(){
                            location.href = URLBASE;
                        },3000);
                    }
                }, 'json');
                
    }

}