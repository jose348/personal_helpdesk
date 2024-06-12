function init() {
    /* TODO LE DECIMOS QUE SE GUARDE CUANDO LE DAMOS EN GUARDAR */
    $("#ticket_form").on("submit", function(e) {
        guardaryeditar(e);
    });
}

/* TODO CON ESTAS LINEA DE CODIGO ACTIVAMOS EL SUMMERNOTE DE NUESTRO TEMPLATE */
$(document).ready(function() {
    $('#tick_descrip').summernote({
        height: 150,
        lan: "es-ES",
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
    $.post("../../controller/categoria.php?op=combo", function(data, status) {
        $('#cat_id').html(data);
    });
}); /* TODO DELCOMBO TRAEMOS EL ID PARA ENVIARLE LOS DATOS */

function guardaryeditar(e) {
    e.preventDefault();
    var formData = new FormData($("#ticket_form")[0]);
    $.ajax({
        url: "../../controller/ticket.php?op=insert",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            $('#cat_id').val('');
            $('#tick_titulo').val('');
            $('#tick_descrip').summernote('reset');
            swal("Correcto", "Registrado Correctamente: ", "success");
        }
    });
}


init();