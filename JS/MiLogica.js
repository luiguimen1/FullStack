/**
 * metodo que protege el codigo principal
 * @type type
 */

$(document).ready(function () {
    function miAjax(url, parametros, quehacerdepues) {
        $.ajax({
            url: url,
            data: parametros,
            type: 'POST',
            dataType: 'html',
            success: function (datos) {
                quehacerdepues(datos);
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema');
            },
            complete: function (xhr, status) {

            }
        });
    }

    function iraB() {
        miAjax('B.php', "a=true", function (datos) {
            $("#contenido").html(datos);
            $("#forMate").validate({
                rules: {
                    num1: {
                        number: true,
                        digits: true
                    },
                    num2: {
                        number: true,
                        digits: true
                    }
                },
                messages: {
                    num1: {
                        number: "No se a terco de ser un numero entero"
                    }
                },
                submitHandler: function () {
                    var url = "Controller/suma.php";
                    var parametros = $("#forMate").serialize();
                    var metodo = function (datos) {
                        alert(datos);
                    };
                    miAjax(url, parametros, metodo);
                }
            });


        });
    }

    function iraC() {
        var url = "c.php";
        var parametros = "a=true";
        var metodo = function (datos) {
            $("#contenido").html(datos);
        };
        miAjax(url, parametros, metodo);
    }


    $("#irB").click(function () {
        iraB();
    });

    $("#irC").click(function () {
        iraC();
    });
});



