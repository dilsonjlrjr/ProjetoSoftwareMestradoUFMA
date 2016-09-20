$(document).ready(function () {

    $('#btn-submit-save').click(function () {

        var varInputObject = {};

        if ($('#projeto-id').val().trim() != "") {
            varInputObject.id = $('#projeto-id').val();
        }

        varInputObject.name = $('#projeto-nome').val();

        success = function(retorno) {
            swal("Sucesso!", retorno.message, "success");

            $("form input[type='text']").each(function() {
                $(this).val("");
            });

            refreshTableProjeto();
        };

        sendAjax('POST', baseUrl + '/projeto/save', varInputObject, 'json', success);
    });

    refreshTableProjeto();

});

function refreshTableProjeto() {

    success = function(retorno) {
        $('#table-projeto tbody').html(retorno);
    };

    sendAjax('GET', baseUrl + '/projeto/listtable', null, 'html', success);

}
