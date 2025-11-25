<div class="container py-5">

    <h2 class="mb-4 titulo text-start">Tu Carrito</h2>

    <div class="row">

        <!-- LISTA DE PRODUCTOS -->
        <div class="col-lg-8">

            <!-- Ejemplo de producto -->
            <div class="card mb-3 shadow-sm border-0">
                <div class="row g-0 align-items-center">

                    <div class="col-md-3">
                        <img src="img/covers/caja-romantica.webp" 
                            class="img-fluid rounded-start" 
                            alt="Producto">
                    </div>

                    <div class="col-md-9">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h5 class="card-title mb-1" style="color:#CC5147;">
                                    Caja Romántica
                                </h5>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>

                            <p class="mb-1">Cantidad: 1</p>
                            <p class="fw-bold fs-5 mb-0">$7.500</p>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Si el carrito está vacío -->
            <!--
            <div class="alert alert-warning py-4 text-center">
                Tu carrito está vacío.
            </div>
            -->

        </div>

        <!-- RESUMEN -->
        <div class="col-lg-4">

            <div class="card shadow-sm border-0">
                <div class="card-body">

                    <h5 class="mb-3" style="color:#CC5147; font-weight:600;">
                        Resumen de compra
                    </h5>

                    <div class="d-flex justify-content-between mb-2">
                        <span>Productos:</span>
                        <span>$7.500</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span>Envío:</span>
                        <span>$1.200</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between fw-bold fs-5 mb-4">
                        <span>Total:</span>
                        <span>$8.700</span>
                    </div>

                    <button class="btn w-100 py-2"
                        style="background:#CC5147; color:#F4F1DE; border-radius:12px;">
                        Finalizar Compra
                    </button>

                </div>
            </div>

        </div>

    </div>

</div>
