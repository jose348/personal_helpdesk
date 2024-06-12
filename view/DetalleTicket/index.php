<?php
/* TODO PARA EVITAR PONER EL URL E INGRESAR POR URL con LOGIN */
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
?>
    <!DOCTYPE html>
    <html>

    <?php require_once("../MainHead/head.php");   ?>

    <title>Fiestas</>::Detalle Ticket</title>
    </head>

    <body class="with-side-menu">

        <?php require_once("../MainHeader/header.php"); ?>

        <div class="mobile-menu-left-overlay"></div>

        <?php require_once("../MainNav/nav.php"); ?>

        

        <div class="page-content">
            <div class="container-fluid">
                <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-bl">
                             <h4><label class="text text-primary form-label semibold" id="lblticket"></label></h4>
                                <br>
                                <h5><div  id="lblestado"></div></h5>
                                <br>
                                <h5><div class="label label-pill label-info" id="lblnomusuario"></div></h5>
                                <br>
                                <h5><div class="label label-pill label-primary" id="lblfechcrea"></div></h5>
                                <br>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <br>
                                    <li><a href="../Home/">Home</a></li>
                                    <li class="active">Detalle Ticket</li>
                                </ol>
                            </div>

                        </div>

                    </div>

                </header>

                <div class="box-typical box-typical-padding">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="cat_nom">Categoria</label>
                                <input type="text" class="form-control" id="cat_nom" name="cat_nom" readonly>
                            </fieldset>
                        </div>

                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="tick_titulo">Titulo</label>
                                <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" readonly>
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="cat_nom">Descripcion</label>
                                <input type="text" class="form-control" id="cat_nom" name="cat_nom" readonly>
                            </fieldset>
                        </div>
                    </div>
                </div>


                <section class="activity-line" id="lblDetalle">


                </section><!--.activity-line-->



                <div class="box-typical box-typical-padding">
                    <h5 class="m-t-lg with-border">Duda y/o Consulta</h5>
                    <div class="row">
                        <form method="post" id="ticket_form">



                            <div class="col-lg-12">
                                <fieldset class="form-group">
                                    <label class="form-label semibold col-2" for="tickd_descrip">Descripcion</label>
                                    <div class="summernote-theme-1 col-10">
                                        <textarea class="summernote " name="tickd_descrip" id="tickd_descrip" required></textarea>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-success">Enviar</button>
                                <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-danger">Cerrar Ticket</button>
                            </div>
                        </form>
                    </div><!--.row-->
                </div>



            </div><!--.container-fluid-->
        </div><!--.page-content-->



        <?php require_once("../MainJs/js.php"); ?>

        <script type="text/javascript" src="detalleticket.js"></script>

    </body>

    </html>
<?php
} else {
    header("Location:" . Conectar::ruta() . "index.php");
}
?>