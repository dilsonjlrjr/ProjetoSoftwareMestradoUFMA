function sendAjax(method, urlRequestAjax, dataForm, dataType, returnSucess, loadAjaxFunctionShow, loadAjaxFunctionHide, functionError, noBlockUI) {
    var _contentType = "application/x-www-form-urlencoded; charset=UTF-8";

    $.ajax({
        type: method,
        url: urlRequestAjax,
        data: dataForm,
        dataType: dataType,
        contentType: _contentType,
        beforeSend: function () {
            if (loadAjaxFunctionShow === undefined) {
                if (!noBlockUI) {
                    $.blockUI({message: $('#loader-modal').html(), css: {width: '275px'}});
                }
            } else {
                loadAjaxFunctionShow();
            }
        }
    }).done(function(retorno) {
        if (loadAjaxFunctionShow === undefined) {
            $.unblockUI();
        } else {
            loadAjaxFunctionHide();
        }
        returnSucess(retorno);
    }).fail(function (jqXHR, textStatus, errorMessage) {
        if (loadAjaxFunctionShow === undefined) {
            $.unblockUI();
        } else {
            loadAjaxFunctionHide();
        }

        if (functionError !== undefined)  {
            functionError();
        } else {
            console.log("Erro de Requisição", "error", errorMessage, "");
            console.log(errorMessage, 2000);
        }
    });

    return;
}