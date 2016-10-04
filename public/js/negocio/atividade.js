$(document).ready(function () {

    $('#select-project').change(function(){
        if ($(this).val() == '-') {
            clearForm();
            return false;
        }

        loadMaterial();
        refreshTableProjeto($(this).val());
    });

    $('#detalhamentoatividade-material').change(function(){

        $('#detalhamentoatividade-quantidade').prop('max', $(this).find(':selected').data('quantidade'));
        $('#detalhamentoatividade-quantidade').focus();

    });

    $("#btn-add-item").click(function(){

        var select = $('#detalhamentoatividade-material option:selected');
        var idMaterial = select.val();
        var textMaterial = select.text();
        var quantidadeTotalMaterial = select.attr('data-quantidade');
        var quantidadeMaterial = $("#detalhamentoatividade-quantidade").val();

        if ((quantidadeTotalMaterial <= 0) || ((quantidadeTotalMaterial - quantidadeMaterial) <=0)) {
            swal("Oops...", "Não existe quantidade disponível de materia!", "error");
            return false;
        }

        select.attr('data-quantidade', (quantidadeTotalMaterial - quantidadeMaterial));

        tableHTML = "";
        tableHTML += "<tr>";
        tableHTML += "  <td></td>";
        tableHTML += "  <td>" + textMaterial + "</td>";
        tableHTML += "  <td>" + quantidadeMaterial + "</td>";
        tableHTML += "  <td>" + idMaterial + "</td>";
        tableHTML += "</tr>";

        $("#table-material tbody").append(tableHTML);

    });
});



function clearForm() {
    $('#projeto-id').val('');
    $('#projeto-nome').val('');
    $('#projeto-dataconclusao').val('');
}

function refreshTableProjeto(idProject) {

    success = function(retorno) {
        $('#table-atividade tbody').html(retorno);
    };

    data = {};
    data.idproject = idProject;

    sendAjax('POST', baseUrl + '/atividade/listtable', data, 'html', success);
}

function loadMaterial() {

    success = function(retorno) {
        $('#detalhamentoatividade-material').html(retorno);
    };

    data = {};
    sendAjax('GET', baseUrl + '/atividade/listmaterial', data, 'html', success);

}
