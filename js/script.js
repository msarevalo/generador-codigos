function ajaxvtest(val)
{
    $.ajax({
        type: 'post',
        url: '../back/prueba.php',
        data: {
            get_option:val
        },
        success: function (response) {
            document.getElementById("prueba").innerHTML=response;
        }
    });
}