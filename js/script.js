function ajaxCodigos(val)
{
    $.ajax({
        type: 'post',
        url: '../back/prueba.php',
        data: {
            get_option:val
        },
        success: function (response) {
            document.getElementById("codigos").innerHTML=response;
        }
    });
}

function ajaxArchivos(val)
{
    $.ajax({
        type: 'post',
        url: '../back/archivos.php',
        data: {
            get_option:val
        },
        success: function (response) {
            document.getElementById("archivos").innerHTML=response;
        }
    });
}