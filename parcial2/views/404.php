
<main class="error-404-wrap" role="main" aria-labelledby="titulo404">
  <div class="error-card" role="region" aria-label="Página no encontrada">
    <svg class="illustration" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
      <defs>
        <linearGradient id="g1" x1="0" x2="1" y1="0" y2="1">
          <stop offset="0%" stop-color="#ffd6de"/>
          <stop offset="100%" stop-color="#ffd6f0"/>
        </linearGradient>
      </defs>
      <rect x="0" y="0" width="200" height="200" rx="24" fill="url(#g1)"/>
      <g transform="translate(34,28)" fill="#fff" opacity="0.9">
        <circle cx="40" cy="28" r="28"/>
        <rect x="70" y="86" width="40" height="40" rx="8"/>
      </g>
      <text x="100" y="132" text-anchor="middle" font-family="Inter, Arial" font-weight="700" font-size="36" fill="#9b1f2b">404</text>
    </svg>

    <h1 id="titulo404" class="big-code">Página no encontrada</h1>
    <p class="lead">Lo sentimos — la página que estás buscando no existe o fue movida.</p>

    <div class="btn-404-wrap">
      <a class="btn  boton-ver btn-lg" href="<?= 'index.php?sec=home' ?>">Volver al inicio</a>
      <a class="btn btn-outline-secondary btn-lg" href="<?= 'index.php?sec=formulario' ?>">Contactar soporte</a>
    </div>

    <p class="small-note">Si llegaste aquí desde un enlace interno, avisanos para corregirlo.</p>
  </div>
</main>



<style>
  /* Estilos scoped para la vista 404 */
  .error-404-wrap{
    min-height:60vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:3.5rem 1rem;
    font-family:Inter, system-ui, -apple-system, 'Segoe UI', Roboto, Arial;
    color:#111827;
    background:transparent;
  }

  .error-card{
    text-align:center;
    max-width:920px;
    width:100%;
    padding:1.75rem;
  }

  .illustration{
    width:200px;
    height:200px;
    display:block;
    margin:0 auto 1rem;
  }

  .big-code{
    font-size:clamp(40px, 8vw, 88px);
    font-weight:800;
    color:#d95f6b; /* accent */
    line-height:0.95;
    margin:0.25rem 0;
  }

  .lead{
    color:#6b7280;
    margin-bottom:1.25rem;
  }

  .btn-404-wrap{ display:flex; gap:0.75rem; justify-content:center; flex-wrap:wrap; margin-bottom:1rem; }

  .form-404{ display:flex; gap:0.5rem; justify-content:center; margin:0 auto; max-width:560px; }
  .form-404 input{ flex:1 1 auto; min-width:0; }

  .small-note{ color:#6b7280; margin-top:1rem; font-size:0.95rem; }
</style>