<?php
/* TODO PARA EVITAR PONER EL URL E INGRESAR POR URL con LOGIN */
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
?>
	<!DOCTYPE html>
	<html>

	<?php require_once("../MainHead/head.php"); ?>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<title>Fiestas</>::Nuevo Ticket</title>
	</head>

	<body class="with-side-menu">

		<?php require_once("../MainHeader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>

		<?php require_once("../MainNav/nav.php"); ?>

		<!-- Contenido -->
		<div class="page-content">
			<div class="container-fluid">
				<!-- TODO TITULOS DE -->
				<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Nuevo Ticket</h3>
								<ol class="breadcrumb breadcrumb-simple">

									<li><a href="../Home/" class="active">Home</a></li>

									<li class="active">Nuevo Ticket</li>
								</ol>
							</div>
						</div>
					</div>
				</header>

				<div class="box-typical box-typical-padding">
					<h5 class="m-t-lg with-border">Registra un Nuevo Ticket</h5>
					<div class="row">
						<form method="post" id="ticket_form">

							<input type="hidden" name="usu_id" id="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">
							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Categoria</label>
									<select class="form-control" id="cat_id" name="cat_id" >
										<option value="">Seleccionar</option>
									</select>
								</fieldset>
							</div>
							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_titulo">Titulo</label>
									<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo">
								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_descrip">Descripcion</label>
									<div class="summernote-theme-1">
										<textarea class="summernote" name="tick_descrip" id="tick_descrip"></textarea>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-success">Guardar</button>
							</div>
						</form>
					</div><!--.row-->
				</div>


			</div>
		</div>
		<!-- Contenido -->

		<?php require_once("../MainJs/js.php"); ?>

		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script type="text/javascript" src="nuevoticket.js"></script>

	</body>

	</html>
<?php
} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>