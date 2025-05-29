<div class="card mb-4 border-orange" id="informacion-personal">
    <div class="card-header bg-orange text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0"><i class="bi bi-person-lines-fill"></i> Información Personal</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 text-center">
                <?php
                // Verificar y establecer ruta de foto
                $foto = isset($_SESSION['foto_perfil']) ? $_SESSION['foto_perfil'] : 'libs/images/foto_principal2.jpeg';
                ?>
                <img src="<?= $foto; ?>" alt="Foto de Elizabeth Tatiana" 
                     class="img-thumbnail circle mb-3 shadow-sm"
                     style="width: 220px; height: 330px; object-fit: cover;">
                <h4 class="text-dark"><?= $_SESSION['nombre_completo'] ?? 'Elizabeth Tatiana Sandoval Hernández'; ?></h4>
                <p class="text-orange fw-bold"><?= $_SESSION['cargo'] ?? 'Técnica en Arquitectura de Plataformas'; ?></p>
                <div class="progress mt-3" style="height: 10px;">
                    <div class="progress-bar bg-orange" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">Perfil completado al 95%</small>
            </div>

            <div class="col-md-8">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><i class="bi bi-cake2 text-orange"></i> <strong>Fecha de Nacimiento:</strong> 18/08/2004</p>
                        <p><i class="bi bi-geo-alt text-orange"></i> <strong>Lugar:</strong> Sullana-Piura-Perú</p>
                        <p><i class="bi bi-credit-card text-orange"></i> <strong>DNI:</strong> 72650649</p>
                    </div>
                    <div class="col-md-6">
                        <p><i class="bi bi-house-door text-orange"></i> <strong>Dirección:</strong> Jose Obdulio Rivera Mz "B" N°10, Querecotillo</p>
                        <p><i class="bi bi-telephone text-orange"></i> <strong>Teléfono:</strong> +51 988 087 808</p>
                        <p><i class="bi bi-envelope text-orange"></i> <strong>Email:</strong> sandez1808@gmail.com</p>
                        <p><i class="bi bi-globe text-orange"></i> <strong>Web:</strong> 
                            <a href="https://tatianasandoval.github.io/CV/" target="_blank">tatianasandoval.github.io/CV/</a>
                        </p>
                    </div>
                </div>

                <h5 class="text-orange"><i class="bi bi-person-badge"></i> Perfil Profesional</h5>
                <p class="text-dark">
                    Técnica en Arquitectura de Plataformas con sólida formación en redes, desarrollo web, bases de datos, 
                    virtualización, seguridad informática y automatización de procesos TI. Posee habilidades destacadas en 
                    comunicación, trabajo en equipo y organización, aplicables en entornos administrativos, industriales y de atención al cliente.
                </p>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <h6 class="text-orange">Idiomas</h6>
                        <ul class="text-dark">
                            <li>Español (Nativo)</li>
                            <li>Inglés (Intermedio)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-orange">Intereses</h6>
                        <ul class="text-dark">
                            <li><i class="bi bi-code-slash text-orange"></i> Desarrollo Web</li>
                            <li><i class="bi bi-palette text-orange"></i> Diseño Gráfico</li>
                            <li><i class="bi bi-shield-lock text-orange"></i> Ciberseguridad</li>
                            <li><i class="bi bi-book text-orange"></i> Aprendizaje continuo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>