<?php
session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header("Location: index.php");
    exit();
}

$page_title = 'BIENVENIDO A MI APLICATIVO';
include_once('layouts/cabecera.php');

$cargo = $_SESSION['cargo'] ?? 'Técnica en Arquitectura de Plataformas';
date_default_timezone_set('America/Lima');
?>

<!-- SECCIÓN DE INICIO -->
<div class="row mb-4" id="inicio">
  <div class="col-12">
    <div class="card border-orange">
      <div class="card-header bg-orange text-white text-center">
        <h2><i class="bi bi-stars"></i> ¡Bienvenid@!</h2>
        <p class="mb-0">Técnica en Arquitectura de Plataformas - Portafolio profesional</p>
      </div>
      <div class="card-body">
        <div class="row text-center">
          <div class="col-md-3">
            <i class="bi bi-person-circle fs-1 text-orange"></i>
            <h5 class="mt-2">Perfil</h5>
            <p>Experta en tecnologías TI con sólidos conocimientos técnicos y enfoque en soluciones prácticas.</p>
          </div>
          <div class="col-md-3">
            <i class="bi bi-mortarboard fs-1 text-orange"></i>
            <h5 class="mt-2">Educación</h5>
            <p>Estudios técnicos culminados con certificaciones adicionales en redes y ciberseguridad.</p>
          </div>
          <div class="col-md-3">
            <i class="bi bi-graph-up fs-1 text-orange"></i>
            <h5 class="mt-2">Habilidades</h5>
            <p>Dominio en redes, automatización, desarrollo web, bases de datos y sistemas operativos.</p>
          </div>
          <div class="col-md-3">
            <i class="bi bi-award-fill fs-1 text-orange"></i>
            <h5 class="mt-2">Certificaciones</h5>
            <p>Reconocimientos por CISCO, universidades y programas nacionales de transformación digital.</p>
          </div>
        </div>

        <hr class="my-4">

        <div class="row">
          <div class="col-md-6">
            <h5 class="text-orange"><i class="bi bi-activity"></i> Avance Profesional</h5>
            <div class="progress mb-2">
              <div class="progress-bar bg-orange" style="width: 85%">85%</div>
            </div>
            <small class="text-muted">Perfil técnico sólido con proyección profesional en crecimiento.</small>
          </div>
          <div class="col-md-6">
            <h5 class="text-orange"><i class="bi bi-globe2"></i> Nivel de Inglés</h5>
            <div class="progress mb-2">
              <div class="progress-bar bg-orange" style="width: 65%">65%</div>
            </div>
            <small class="text-muted">Intermedio, comprensión de documentación técnica y conversación básica.</small>
          </div>
        </div>

        <hr class="my-4">

        <!-- SECCIÓN DEL BOTÓN DE DESCARGA (NUEVO) -->
        <div class="row">
          <div class="col-md-12 text-center">
            <a href="docs/CV-SandovalHernández.pdf" download="CV_Elizabeth_Tatiana_Sandoval.pdf" 
               class="btn btn-orange btn-lg">
               <i class="bi bi-file-earmark-pdf"></i> Descargar Mi CV
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DEMÁS SECCIONES -->
<div class="row" id="informacion-personal">
  <?php include_once('secciones/informacion_personal.php'); ?>
</div>

<div class="row" id="educacion">
  <?php include_once('secciones/educacion.php'); ?>
</div>

<div class="row" id="experiencia">
  <?php include_once('secciones/experiencia.php'); ?>
</div>

<div class="row" id="habilidades">
  <?php include_once('secciones/habilidades.php'); ?>
</div>

<div class="row" id="certificaciones">
  <?php include_once('secciones/certificaciones.php'); ?>
</div>

<?php include_once('layouts/pie.php'); ?>

<!-- SCRIPT PARA ACTUALIZAR LA HORA EN TIEMPO REAL -->
<script>
  function updateClock() {
    const clockElement = document.getElementById("clock");
    const now = new Date();
    const formatted = now.toLocaleString("es-PE", {
      day: "2-digit", month: "2-digit", year: "numeric",
      hour: "2-digit", minute: "2-digit", second: "2-digit"
    });
    clockElement.innerHTML = `${formatted} (PE)`;
  }
  setInterval(updateClock, 1000);
  updateClock(); // Mostrar de inmediato
</script>

<!-- ESTILO PARA EL BOTÓN NUEVO -->
<style>
  .btn-orange {
    background-color: #ff4500;
    color: white;
    border: none;
    padding: 10px 25px;
    font-weight: 500;
    transition: all 0.3s;
    border-radius: 30px;
    box-shadow: 0 4px 8px rgba(253, 126, 20, 0.2);
  }
  .btn-orange:hover {
    background-color: #e67312;
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(253, 126, 20, 0.3);
    color: white;
  }
</style>