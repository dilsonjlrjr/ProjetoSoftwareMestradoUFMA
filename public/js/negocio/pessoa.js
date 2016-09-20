$(document).ready(function () {

    $('#btn-submit-save').click(function () {

        var varInputObject = {};

        if ($('#pessoa-id').val().trim() != "") {
            varInputObject.id = $('#pessoa-id').val();
        }

        varInputObject.name = $('#pessoa-nome').val();
        varInputObject.profissao = $('#pessoa-profissao').val();

        success = function(retorno) {
            swal("Sucesso!", retorno.message, "success");

            $("form input[type='text']").each(function() {
                $(this).val("");
            });

            refreshTablePessoa();
        };

        sendAjax('POST', baseUrl + '/pessoa/save', varInputObject, 'json', success);
    });

    refreshTablePessoa();

});

function refreshTablePessoa() {

    success = function(retorno) {
        $('#table-pessoas tbody').html(retorno);
    };

    sendAjax('GET', baseUrl + '/pessoa/listtable', null, 'html', success);

}
