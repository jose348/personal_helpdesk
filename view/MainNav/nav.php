<?php if ($_SESSION["rol_id"] == 1) {  ?>
    <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="..\Home\">
                    <span class="glyphicon glyphicon-home"></span>
                    <span class="lbl">Inicio</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="..\NuevoTicket\">
                    <span class="fa fa-book"></span>
                    <span class="lbl">Nuevo Ticket</span>
                </a>
            </li>

            <li class="blue-dirty">
                <a href="..\ConsultarTicket\">
                    <span class="fa fa-eye"></span>
                    <span class="lbl">Consultar Ticket</span>
                </a>
            </li>
        </ul>
    </nav>
<?php } else { ?>
    <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="..\Home\">
                    <span class="glyphicon glyphicon-home"></span>
                    <span class="lbl">Inicio</span>
                </a>
            </li>
         

            <li class="blue-dirty">
                <a href="..\ConsultarTicket\">
                    <span class="fa fa-eye"></span>
                    <span class="lbl">Consultar Ticket</span>
                </a>
            </li>
        </ul>
    </nav>
<?php } ?>