<!-- secciones/experiencia.php -->
<div class="card border-orange shadow mb-4" id="experiencia">
    <div class="card-header bg-orange text-white">
        <h4 class="mb-0"><i class="bi bi-briefcase-fill"></i> Experiencia Profesional</h4>
    </div>
    <div class="card-body">

        <div class="timeline">
            <!-- Experiencia 1 -->
            <div class="timeline-item mb-4">
                <div class="d-flex align-items-center">
                    <div class="icon-circle bg-orange text-white me-3">
                        <i class="bi bi-person-workspace fs-4"></i>
                    </div>
                    <div>
                        <h5 class="mb-1">Prácticas Profesionales - Secretaria</h5>
                        <span class="badge bg-white text-orange border border-orange">2024</span>
                        <p class="text-muted mb-1">I.E. 14860 “Los Tallanes” – Querecotillo</p>
                    </div>
                </div>
                <p class="mt-2 text-dark">
                    Apoyo en tareas administrativas, atención a padres y docentes, gestión de documentos y correspondencia. Mejora de habilidades en comunicación y organización.
                </p>
            </div>

            <!-- Experiencia 2 -->
            <div class="timeline-item mb-4">
                <div class="d-flex align-items-center">
                    <div class="icon-circle bg-orange text-white me-3">
                        <i class="bi bi-gear-wide-connected fs-4"></i>
                    </div>
                    <div>
                        <h5 class="mb-1">Operaria en Área de Producción</h5>
                        <span class="badge bg-white text-orange border border-orange">2022</span>
                        <p class="text-muted mb-1">Frutos Ecológicos – Cieneguillo</p>
                    </div>
                </div>
                <p class="mt-2 text-dark">
                    Actividades en línea de producción: selección, embalaje, paletizado y almacenamiento. Precisión en procesos y cumplimiento de estándares de calidad.
                </p>
            </div>

            <!-- Experiencia 3 -->
            <div class="timeline-item mb-4">
                <div class="d-flex align-items-center">
                    <div class="icon-circle bg-orange text-white me-3">
                        <i class="bi bi-chat-left-text-fill fs-4"></i>
                    </div>
                    <div>
                        <h5 class="mb-1">Atención al Cliente</h5>
                        <span class="badge bg-white text-orange border border-orange">2019 - 2021</span>
                        <p class="text-muted mb-1">Restaurantes: Donde Vera, Nachopps, El Tío Jhonny – Sullana</p>
                    </div>
                </div>
                <p class="mt-2 text-dark">
                    Interacción directa con clientes, manejo de caja y apoyo operativo. Fortalecimiento de competencias blandas: trabajo en equipo, empatía y resolución de conflictos.
                </p>
            </div>
        </div>

    </div>
</div>

<style>
    .timeline {
        border-left: 4px solid #fd7e14;
        padding-left: 20px;
        position: relative;
    }

    .timeline::before {
        content: "";
        position: absolute;
        top: 0;
        left: -8px;
        width: 16px;
        height: 16px;
        background-color: #fd7e14;
        border-radius: 50%;
    }

    .timeline-item::before {
        content: "";
        position: absolute;
        left: -12px;
        top: 0;
        width: 16px;
        height: 16px;
        background: white;
        border: 3px solid #fd7e14;
        border-radius: 50%;
    }

    .icon-circle {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
