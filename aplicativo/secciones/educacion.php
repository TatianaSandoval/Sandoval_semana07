<style>
    /* Estilos para la línea de tiempo profesional */
    .timeline-pro {
        position: relative;
        padding-left: 40px;
        margin-top: 20px;
        border-left: 3px solid #ff6b00;
    }

    .timeline-pro::before {
        content: '';
        position: absolute;
        left: -8px;
        top: 0;
        height: 100%;
        width: 3px;
        background: #ff6b00;
    }

    .timeline-block {
        position: relative;
        margin-bottom: 40px;
        padding-left: 20px;
        animation: fadeInUp 0.8s ease forwards;
    }

    .timeline-block::before {
        content: '';
        position: absolute;
        left: -30px;
        top: 0;
        width: 20px;
        height: 20px;
        background-color: #ff6b00;
        border: 3px solid #fff;
        border-radius: 50%;
        z-index: 1;
    }

    .timeline-content {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        transition: all 0.3s ease;
        border-left: 6px solid #ff6b00;
    }

    .timeline-content:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.18);
    }

    .timeline-title {
        font-weight: bold;
        color: #ff6b00;
        font-size: 1.3rem;
    }

    .timeline-subtitle {
        color: #333;
        font-size: 1rem;
        margin-bottom: 8px;
    }

    .timeline-date {
        font-size: 0.9rem;
        color: #999;
        font-style: italic;
    }

    @keyframes fadeInUp {
        from {opacity: 0; transform: translateY(30px);}
        to {opacity: 1; transform: translateY(0);}
    }
</style>

<div class="row" id="educacion">
    <div class="col-md-12">
        <div class="card border-0 shadow mb-4">
            <div class="card-header bg-orange text-white d-flex align-items-center">
                <i class="bi bi-mortarboard-fill fs-3 me-2"></i>
                <h4 class="mb-0">Mi Formación Académica</h4>
            </div>
            <div class="card-body timeline-pro">

                <!-- Primaria -->
                <div class="timeline-block">
                    <div class="timeline-content">
                        <div class="timeline-title"><i class="bi bi-pencil-fill me-2"></i>Primaria</div>
                        <div class="timeline-subtitle">I.E. 14860 "Divino Corazón de Jesús" – Querecotillo</div>
                        <div class="timeline-date">2008 – 2014</div>
                        <p>Mi etapa inicial de formación estuvo enfocada en desarrollar hábitos de estudio, valores y habilidades comunicativas básicas que cimentaron mi camino académico.</p>
                    </div>
                </div>

                <!-- Secundaria -->
                <div class="timeline-block">
                    <div class="timeline-content">
                        <div class="timeline-title"><i class="bi bi-journal-richtext me-2"></i>Secundaria</div>
                        <div class="timeline-subtitle">I.E. “José María Raygada Gallo” – Querecotillo</div>
                        <div class="timeline-date">2015 – 2020</div>
                        <p>Durante mi educación secundaria, participé activamente en talleres, concursos de lógica matemática y actividades de liderazgo estudiantil.</p>
                    </div>
                </div>

                <!-- Técnico Profesional -->
                <div class="timeline-block">
                    <div class="timeline-content">
                        <div class="timeline-title"><i class="bi bi-cpu-fill me-2"></i>Educación Técnica Profesional</div>
                        <div class="timeline-subtitle">I.S.T.P “Señor de Chocán” – Querecotillo</div>
                        <div class="timeline-date">2023 – Presente</div>
                        <p>Estudiante de la carrera de <strong>Arquitectura de Plataformas y Servicios de Tecnología de la Información</strong>. Formación en redes, desarrollo web, bases de datos, ciberseguridad y automatización de sistemas.</p>
                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h6>Desempeño Técnico</h6>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-orange" style="width: 92%;">92%</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Innovación y Creatividad</h6>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-orange" style="width: 88%;">88%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

