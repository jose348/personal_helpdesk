<?php
/* TODO PARA EVITAR PONER EL URL E INGRESAR POR URL con LOGIN */
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
?>
	<!DOCTYPE html>
	<html>

	<?php require_once("../MainHead/head.php"); ?>

	<title>Fiestas</>::Consultar Ticket</title>
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
								<h3>Consultar Ticket</h3>
								<ol class="breadcrumb breadcrumb-simple">

									<li><a href="../Home/" class="active">Home</a></li>

									<li class="active">consultar Ticket</li>
								</ol>
							</div>
						</div>
					</div>
				</header>

				<div class="box-typical box-typical-padding" id="table">
					<h5 class="m-t-lg with-border">Tickets Registrados</h5>
					<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full text text-center">
						<thead>
							<tr class="">
								<th class="text text-center" style="width: 10%; " >N° Ticket</th>
								<th class="text text-center" style="width: 20%; ">Categoria</th>
								<th class="text text-center" style="width: 20%; ">Titulo</th>
								<th class="text text-center" style="width: 20%; ">Estado</th>
								<th class="text text-center" style="width: 20%; ">Fecha De Crea</th>
								<th></th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</tab>
				</div>


			</div>
		</div>
		<!-- Contenido -->

		<?php require_once("../MainJs/js.php"); ?>
	
		<script type="text/javascript" src="consultarticket.js"></script>

	</body>

	</html>
<?php
} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>