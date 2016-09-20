$(document).ready(function () {

    $('#select-project').change(function(){
        if ($(this).val() == '-') {
            $('#projeto-id').val('');
            return false;
        }

        refreshTableProjeto($(this).val());
    });

});

function refreshTableProjeto(idProject) {

    success = function(retorno) {
        $('#table-atividade tbody').html(retorno);
    };

    data = {};
    data.idproject = idProject;

    sendAjax('POST', baseUrl + '/atividade/listtable', data, 'html', success);

}
