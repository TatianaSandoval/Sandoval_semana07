<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?? 'Sistema Personalizado'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="libs/main.css?v=<?php echo time(); ?>">

    <style>
        :root {
            --color-primary: #FF8C00;
            --color-dark: #FF4500;
            --color-secondary: #FFA500;
            --color-accent: #FFD700;
            --color-light: #FFE4B5;
        }

        .bg-orange {
            background-color: var(--color-dark) !important;
        }

        .sidebar {
            background: linear-gradient(to bottom, var(--color-dark), var(--color-primary));
            color: white;
            min-height: 100vh;
            position: fixed;
            width: 250px;
            top: 0;
            left: 0;
            overflow-y: auto;
            z-index: 1030;
        }

        .sidebar .nav-link {
            color: #e0e0e0;
            padding-left: 1.2rem;
        }

        .sidebar .nav-link:hover {
            background: rgba(255, 255, 255, 0.15);
            color: white !important;
        }

        .sidebar h4.title {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 1rem;
            border-radius: 8px;
            font-size: 1.6rem;
            text-align: center;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .sub-item {
            font-size: 0.9rem;
            padding-left: 2.5rem !important;
        }

        .main-content {
            margin-left: 250px;
            padding: 2rem;
            width: calc(100% - 250px);
        }

        .user-header {
            background-color: var(--color-dark);
            border-radius: 10px;
            padding: 0.5rem 1rem;
            color: white;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-header .user-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .user-header .user-info .name {
            font-weight: bold;
            font-size: 1rem;
        }

        .user-header .user-info .time {
            font-size: 0.85rem;
            color: #fddca2;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- MENÚ LATERAL -->
        <div class="sidebar p-3">
            <h4 class="title">SISTEMA "SHET"</h4>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="principal.php">
                        <i class="bi bi-house"></i> Página Principal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="principal.php#informacion-personal">
                        <i class="bi bi-person-badge"></i> Datos Personales
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="principal.php#educacion">
                        <i class="bi bi-book"></i> Formación Académica
                    </a>
                    <a class="nav-link sub-item" href="principal.php#educacion-primaria">• Nivel Primario</a>
                    <a class="nav-link sub-item" href="principal.php#educacion-secundaria">• Nivel Secundario</a>
                    <a class="nav-link sub-item" href="principal.php#educacion-superior">• Estudios Superiores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="principal.php#experiencia">
                        <i class="bi bi-briefcase"></i> Experiencia Profesional
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="principal.php#habilidades">
                        <i class="bi bi-tools"></i> Competencias Técnicas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="principal.php#certificaciones">
                        <i class="bi bi-award"></i> Certificaciones y Cursos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="cerrar_sesion.php">
                        <i class="bi bi-box-arrow-right"></i> Finalizar Sesión
                    </a>
                </li>
            </ul>
        </div>

        <!-- CONTENIDO PRINCIPAL -->
        <div class="main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-orange">
                    <i class="bi <?= ($page_title == 'Mi CV Personal') ? 'bi-person-lines-fill' : 'bi-folder'; ?>"></i>
                    <?= $page_title ?? 'Panel de Control'; ?>
                </h2>

                <!-- NOMBRE + HORA + FOTO -->
                <div class="user-header">
                    <div class="user-info text-end">
                        <span class="name">Elizabeth Tatiana Sandoval Hernández</span>
                        <span class="time" id="clock"><?= date('d/m/Y H:i:s'); ?> (PE)</span>
                    </div>
                    <?php
                    // Verificar y establecer ruta de foto
                    $foto = isset($_SESSION['foto_login']) ? $_SESSION['foto_login'] : 'libs/images/foto_principal.jpeg';
                    ?>
                    <img src="<?= $foto; ?>" alt="Foto de perfil" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                </div>
            </div>
            
            <div class="container-fluid">
                <!-- Aquí inicia tu contenido dinámico -->