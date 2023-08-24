<?php

include("./components/header.php");

?>

<div class="sidebar">

    <div class="logo_content">
        <div class="logo">
            <i class="fa-solid fa-square-parking"></i>
            <div class="logo_name">Mucuritas 2</div>
        </div>
        <i class="fa-solid fa-bars" id="btn"></i>
    </div>

    <ul class="nav_list">
        <!--<li>
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Buscar...">
            <span class="tooltip">Buscar</span>
        </li>-->
        <li>
            <a href="#">
                <i class="fa-solid fa-border-all"></i>
                <span class="links_name">Inicio</span>
            </a>
            <span class="tooltip">Inicio</span>
        </li>
        <li>
            <a href="#">
                <i class="fa-regular fa-user"></i>
                <span class="links_name">Usuario</span>
            </a>
            <span class="tooltip">Usuario</span>
        </li>
        <li>
            <a href="#">
                <i class="fa-regular fa-message"></i>
                <span class="links_name">Mensajes</span>
            </a>
            <span class="tooltip">Mensajes</span>
        </li>
        <!--<li>
            <a href="#">
                <i class="fa-solid fa-chart-pie"></i>
                <span class="links_name">Estadísticas</span>
            </a>
            <span class="tooltip">Estadísticas</span>
        </li>
        <li>
            <a href="#">
                <i class="fa-regular fa-file"></i>
                <span class="links_name">Archivos</span>
            </a>
            <span class="tooltip">Archivos</span>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="links_name">Orden</span>
            </a>
            <span class="tooltip">Orden</span>
        </li>
        <li>
            <a href="#">
                <i class="fa-regular fa-heart"></i>
                <span class="links_name">Salvar</span>
            </a>
            <span class="tooltip">Salvar</span>
        </li>-->
        <li>
            <a href="#">
                <i class="fa-solid fa-gear"></i>
                <span class="links_name">Configuración</span>
            </a>
            <span class="tooltip">Configuración</span>
        </li>
    </ul>

    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                <img src="./img/fondo_login.jpg" alt="">
                <div class="name_job">
                    <div class="name">Alejandro</div>
                </div>
            </div>
            <i class="fa-solid fa-arrow-right-from-bracket fa-flip-horizontal" id="log_out"></i>
        </div>
    </div>

</div>

<div class="home_content">

    <div class="text">ESTADO DE CUENTA</div>

    <div class="container_info">

        <div class="box_info">
            <i class="fa-solid fa-money-bills"></i>
            <div class="box_text">
                <p>XXX</p>
                <p class="text_gray">Deuda</p>
            </div>
        </div>

        <div class="box_info">
            <i class="fa-solid fa-wallet"></i>
            <div class="box_text">
                <p>XXX</p>
                <p class="text_gray">Meses a deber</p>
            </div>
        </div>

        <div class="box_info">
            <i class="fa-solid fa-landmark"></i>
            <div class="box_text">
                <p>XXX</p>
                <p class="text_gray">Total de meses</p>
            </div>
        </div>

        <div class="box_info">
            <i class="fa-solid fa-money-bill-transfer"></i>
            <div class="box_text">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Registrar Pago
                </button>
            </div>
        </div>

    </div>

    <!-- MODAL REGISTRAR PAGO -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Pago</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Formulario de pago</h4>
                    <form action="#" class="form_payment">

                        <div class="input-box">
                            <span class="icon"><i class="las la-user"></i></span>
                            <input type="text" id="name" name="name">
                            <label for="name">Nombre Completo</label>
                        </div>

                        <div class="input-box">
                            <!--<span class="icon"><i class="las la-user"></i></span>-->
                            <input type="date" id="name" name="date">
                            <label for="date">Fecha del pago</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class="las la-user"></i></span>
                            <input type="text" id="name" name="bank">
                            <label for="bank">Banco Emisor</label>
                        </div>

                        <div class="input-box">
                            <!--<span class="icon"><i class="las la-user"></i></span>-->
                            <select name="tPuesto">
                                <option name="fijo" value="fijo" selected>Fijo</option>
                                <option name="flotante" value="flotante">Flotante</option>
                                <option name="moto" value="moto">Moto</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <!--<span class="icon"><i class="las la-user"></i></span>-->
                            <select name="tPago" id="">
                                <option value="pMovil" name="pMovil" selected>Pago Móvil</option>
                                <option value="transferencia" name="transferencia">Transferencia</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class="las la-user"></i></span>
                            <input type="number" id="name" name="nPuesto">
                            <label for="nPuesto">N° de puesto(s)</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class="las la-user"></i></span>
                            <input type="text" id="name" name="meses">
                            <label for="meses">Meses pagados</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class="las la-user"></i></span>
                            <input type="number" id="name" name="money">
                            <label for="money">Monto</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class="las la-user"></i></span>
                            <input type="number" id="name" name="ref">
                            <label for="ref">N° de Referencia</label>
                        </div>

                        <div class="input-box">
                            <!--<span class="icon"><i class="las la-user"></i></span>-->
                            <input type="file" id="name" name="cap">
                            <!--<label for="cap">Capture</label>-->
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <!--<button type="button" class="btn btn-primary">Crear</button>-->
                    
                </div>
            </div>
        </div>
    </div>

    <section class="table">
        <table class="table_estado">
            <tr>
                <th>Nombre y Apellido</th>
                <th>Cédula</th>
                <th>N° de Puesto</th>
                <th>N° de Meses</th>
                <th>Meses</th>
                <th>Monto</th>
            </tr>
            <tr>
                <td>Alejandro Jose Lopez Alvarez</td>
                <td>27439045</td>
                <td>2</td>
                <td>2</td>
                <td>Enero, Febrero</td>
                <td>2.000</td>
            </tr>
            <tr>
                <td>Alejandro Jose Lopez Alvarez</td>
                <td>27439045</td>
                <td>2</td>
                <td>2</td>
                <td>Enero, Febrero</td>
                <td>2.000</td>
            </tr>
            <tr>
                <td>Alejandro Jose Lopez Alvarez</td>
                <td>27439045</td>
                <td>2</td>
                <td>2</td>
                <td>Enero, Febrero</td>
                <td>2.000</td>
            </tr>
            <tr>
                <td>Alejandro Jose Lopez Alvarez</td>
                <td>27439045</td>
                <td>2</td>
                <td>2</td>
                <td>Enero, Febrero</td>
                <td>2.000</td>
            </tr>
            <tr>
                <td>Alejandro Jose Lopez Alvarez</td>
                <td>27439045</td>
                <td>2</td>
                <td>2</td>
                <td>Enero, Febrero</td>
                <td>2.000</td>
            </tr>
        </table>
    </section>

    <section class="table_info">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalTable">
            VER ESTADOS
        </button>
    </section>

    <!-- MODAL TABLA DEUDAS -->
    <div class="modal fade" id="exampleModalTable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1>Estados de cuenta</h1>
                    <table class="table_estado_modal">
                        <tr>
                            <th>Nombre y Apellido</th>
                            <th>Cédula</th>
                            <th>N° de Puesto</th>
                            <th>N° de Meses</th>
                            <th>Meses</th>
                            <th>Monto</th>
                        </tr>
                        <tr>
                            <td>Alejandro Jose Lopez Alvarez</td>
                            <td>27439045</td>
                            <td>2</td>
                            <td>2</td>
                            <td>Enero, Febrero</td>
                            <td>2.000</td>
                        </tr>
                        <tr>
                            <td>Alejandro Jose Lopez Alvarez</td>
                            <td>27439045</td>
                            <td>2</td>
                            <td>2</td>
                            <td>Enero, Febrero</td>
                            <td>2.000</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <!--<button type="button" class="btn btn-primary">Crear</button>-->
                    
                </div>
            </div>
        </div>
    </div>

</div>

<?php

include("./components/footer.php");

?>