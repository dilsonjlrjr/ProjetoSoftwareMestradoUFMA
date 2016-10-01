$(document).ready(function () {

    $('#btn-submit-save').click(function () {

        var varInputObject = {};

        if ($('#material-id').val().trim() != "") {
            varInputObject.id = $('#material-id').val();
        }

        varInputObject.name = $('#material-nome').val();
        varInputObject.count = $('#material-quantidade').val();

        success = function(retorno) {
            swal("Sucesso!", retorno.message, "success");

            $("form input[type='text']").each(function() {
                $(this).val("");
            });

            refreshTableMaterial();
        };

        sendAjax('POST', baseUrl + '/material/save', varInputObject, 'json', success);
    });

    refreshTableMaterial();

});

function refreshTableMaterial() {

    success = function(retorno) {
        $('#table-material tbody').html(retorno);
    };

    sendAjax('GET', baseUrl + '/material/listtable', null, 'html', success);

}
