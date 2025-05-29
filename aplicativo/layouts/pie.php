<?php
date_default_timezone_set('America/Lima');
?>
<footer class="mt-5 py-3 bg-light border-top border-orange">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <span class="text-muted">
                    <i class="bi bi-c-circle"></i> <?= date('Y') ?> Portafolio Profesional
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="text-muted">
                    <i class="bi bi-clock"></i> <?= date('d/m/Y H:i:s') ?> (PE)
                </span>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts comunes -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Actualizar hora en tiempo real
    function actualizarHora() {
        const ahora = new Date();
        const opciones = { 
            day: '2-digit', 
            month: '2-digit', 
            year: 'numeric',
            hour: '2-digit', 
            minute: '2-digit', 
            second: '2-digit',
            timeZone: 'America/Lima'
        };
        document.querySelector('footer .bi-clock').parentElement.textContent = 
            `⏱️ ${ahora.toLocaleString('es-PE', opciones)} (PE)`;
    }
    setInterval(actualizarHora, 1000);
</script>

<style>
    .border-orange {
        border-color: #fd7e14 !important;
    }
    footer {
        font-size: 0.9rem;
    }
</style>