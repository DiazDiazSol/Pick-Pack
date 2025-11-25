<section style="background: linear-gradient(180deg, rgba(244,241,222,0.9) 0%, rgba(255,255,255,0.9) 60%); width:100%; padding:60px 0;">
  <div class="container  mt-5 mb-5 rounded-5">
    <div class="row">
      <div class="col-12 mb-3 text-center">
        <h1 class="titulo">Contacto</h1>
      </div>
    </div>
    <section class="row justify-content-center p-3">
      <div class="col-12 p-3">
        <form action="index.php?sec=resultados" method="POST">

          <div class="row g-2 mt-3">
            <div class="col-md">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                <label for="nombre" class="form-label">Ingrese su Nombre</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido">
                <label for="apellido" class="form-label">Ingrese su apellido</label>
              </div>
            </div>
          </div>

          <div class="row g-2 mt-3">
            <div class="col-md">
              <div class="form-floating">
                <input type="tel" class="form-control" id="telefono" placeholder="Teléfono" required pattern="^\d{10,15}$">
                <label for="telefono">Teléfono</label>
                <div class="invalid-feedback">Por favor, ingrese un número de teléfono válido (10-15 dígitos).</div>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email</label>
                <div class="invalid-feedback">Por favor, ingrese un email válido.</div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 text-center mt-5">
            <button type="submit" class="btn btn-primary button-form w-50">Enviar</button>
          </div>

        </form>
      </div>
    </section>
  </div>
</section>