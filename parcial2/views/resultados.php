<div class="bg-productos d-flex justify-content-center align-items-center min-vh-100">
    <div class=" container border bg-light p-5 shadow rounded-5">
        <div class="text-center">
            <?php

            $mensaje = "";

            if (isset($_POST['nombre']) && $_POST['nombre'] != "") {
                $mensaje .= "<h1>¡Gracias por tu mensaje " . $_POST['nombre'] . "!" . "</h1>";
            } else {
                $mensaje .= "<h1>¡Gracias por tu mensaje!</h1>";
            }

            echo $mensaje;

            ?>
            <div class="row">
                <div class="col-12 mb-3 mt-3 text-center">
                    <p><em>Hemos recibido tu mensaje correctamente.</em></p>
                    <p><em>Nuestro equipo se pondrá en contacto contigo a la brevedad para ayudarte con lo que necesites.</em></p>
                    <p><em>Si tienes alguna otra consulta, no dudes en escribirnos nuevamente.</em></p>
                </div>
            </div>
            <button onclick="history.back()" class="btn mt-1 button-form">Volver</button>
        </div>
    </div>
</div>