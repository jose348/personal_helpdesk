function init() {}

$(document).ready(function() {
    var tick_id = getUrlParameter('ID'); //AQUI LO GUARDAMOS EN UNA VARIABLE EL id TAL CUAL VIENE CON NOMBRE POR METODO GET
    $.post("../../controller/ticket.php?op=listarDetalle", { tick_id: tick_id }, function(data) {

        $('#lblDetalle').html(data); /* TODO PARA GENERAR LA VECES QUE SE REGISTRO UN TICKET ESE USUARIO */
    });


    $.post("../../controller/ticket.php?op=mostrar", { tick_id: tick_id }, function(data) {
        data = JSON.parse(data);
        $('#lblticket').html(" Detalle Ticket-" + data.tick_id);
        $('#lblestado').html(data.tick_estado);
        $('#lblnomusuario').html(data.usu_nom + ' ' + data.usu_ape);
        $('#lblfechcrea').html(data.fech_crea);
        $('#cat_nom').html(data.cat_nom);
    });


    /* TODO PARA CONVERTIR EN UNSUMMERNOTE */
    $('#tickd_descrip').summernote({
        height: 150,
        lan: "es-ES", //para el lenguaje de mi summer Note
        callbacks: {
            onImageUpload: function(image) {
                console.log("Imagen Detected...");
                myimagetreat(image[0]);

            },
            onPaste: function(e) {
                console.log("Text Detected");
            }

        }

    });



});

/* TODO Capturamos el ID que viene de mi tabla consultar ticke_id en el boton (ver) */
/* TODO Capturamos el ID que viene de mi tabla consultar ticke_id en el boton (ver) */
/* TODO Capturamos el ID que viene de mi tabla consultar ticke_id en el boton (ver) */
/* captura el ID que viene por url de mi consultarTicket */
var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[i] === undefined ? true : sParameterName[1];
            }
        }
    }
    /* TODO Capturamos el ID que viene de mi tabla consultar ticke_id en el boton (ver) */
    /* TODO Capturamos el ID que viene de mi tabla consultar ticke_id en el boton (ver) */
    /* TODO Capturamos el ID que viene de mi tabla consultar ticke_id en el boton (ver) */






init();