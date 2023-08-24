<?php

include("./components/header.php");

?>

<div class="background"></div>
<div class="container">

    <div class="logreg-box">
        <div class="form-box login">
            <form action="#" id="form">
                <h2>Iniciar Sesión</h2>

                <div class="input-box">
                    <span class="icon"><i class="las la-user"></i></span>
                    <input type="email" id="email">
                    <label for="">Correo</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class="fa-regular fa-eye"></i></span>
                    <input type="password" id="pass">
                    <label for="">Clave</label>
                </div>

                <div class="remember-forget">
                    <label>
                        <input type="checkbox">
                        Recordar clave
                    </label>
                    <a href="#" class="forget-link">¿Olvidó su clave?</a>
                </div>

                <button type="submit" class="btn2" id="submit">Iniciar Sesión</button> <br> <br>

            </form>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Registrarse
            </button>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" id="form_create">

                            <div class="input-box_create">
                                <span class="icon"><i class="fa-regular fa-address-card"></i></span>
                                <input type="text" id="CI" placeholder="(V- o E-)XX.XXX.XXX">
                                <label for="">Cédula</label>
                            </div>

                            <div class="input-box_create">
                                <span class="icon"><i class="las la-user"></i></span>
                                <input type="text" id="name_last">
                                <label for="">Nombre y Apellido</label>
                            </div>

                            <div class="input-box_create">
                                <span class="icon"><i class="fa-solid fa-car"></i></span>
                                <input type="text" id="tVehiculo">
                                <label for="">Tipo de Vehículo</label>
                            </div>

                            <div class="input-box_create">
                                <span class="icon"><i class="fa-solid fa-square-parking"></i></span>
                                <input type="text" id="tPuesto" placeholder="fijo, flotante o moto">
                                <label for="">Tipo de Puesto</label>
                            </div>

                            <div class="input-box_create">
                                <span class="icon"><i class="fa-solid fa-list-ol"></i></span>
                                <input type="text" id="nPuesto">
                                <label for="">N° de Puestos</label>
                            </div>

                            <div class="input-box_create">
                                <span class="icon"><i class="las la-user"></i></span>
                                <input type="email" id="email_modal">
                                <label for="">Correo</label>
                            </div>

                            <div class="input-box_create">
                                <!--<span class="icon"><i class="fa-regular fa-eye"></i></span>-->
                                <input type="text" id="pass_modal">
                                <label for="">Clave</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Crear</button>

                            <div class="requirements">
                                <p class="error-message" id="error-message"></p>
                            </div><br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <!--<button type="button" class="btn btn-primary">Crear</button>-->

                    </div>
                </div>
            </div>
        </div>

        <div class="form-box forget">
            <form action="#" id="form_forget">
                <h2>Recuperar Clave</h2>

                <div class="input-box">
                    <span class="icon"><i class="las la-user"></i></span>
                    <input type="email" id="email_forget">
                    <label for="">Correo</label>
                </div>

                <div class="input-box">
                    <!--<span class="icon"><i class="clase fa-regular fa-eye"></i></span>-->
                    <input type="text" id="pass_forget">
                    <label>Clave</label>
                </div>

                <div class="requirements">
                    <p class="error-message" id="error-message"></p>
                </div> <br>

                <div class="remember-forget">
                    <a href="#" class="login-link">¿Tienes cuenta?</a>
                </div>

                <button type="submit" class="btn2">Cambiar Clave</button>
                <p class="error-message" id="error-message"></p>
            </form>
        </div>
    </div>



</div>


<?php

include("./components/footer.php");

?>