<?php
session_start();

// Credenciales válidas
$usuarioValido = 'SANDOVAL';
$contrasenaValida = '72650649';

// Verificar bloqueo existente
if (isset($_SESSION['bloqueado_hasta'])) {
    if (time() < $_SESSION['bloqueado_hasta']) {
        $tiempo_restante = $_SESSION['bloqueado_hasta'] - time();
        $_SESSION['error'] = 'Cuenta bloqueada. Espera '.$tiempo_restante.' segundos.';
        header("Location: index.php");
        exit();
    } else {
        unset($_SESSION['bloqueado_hasta']);
        unset($_SESSION['intentos']);
    }
}

// Procesar formulario
$username = strtoupper(trim($_POST['username'] ?? ''));
$password = trim($_POST['password'] ?? '');

// Validar credenciales
if ($username === strtoupper($usuarioValido) && $password === $contrasenaValida) {
    // Login exitoso - Resetear todo
    unset($_SESSION['intentos']);
    unset($_SESSION['bloqueado_hasta']);
    
    $_SESSION['foto_login'] = 'libs/images/foto_principal.jpeg'; // Para login/cabecera
    $_SESSION['foto_perfil'] = 'libs/images/foto_principal2.jpeg'; // Para información personal
    $_SESSION['username'] = $username;  // Esto guarda "SANDOVAL"
    $_SESSION['nombre_completo'] = 'Elizabeth Tatiana Sandoval Hernández';  // Añade esta línea
    $_SESSION['autenticado'] = true;
    $_SESSION['cargo'] = 'Técnica en Arquitectura de Plataformas';

    // Mostrar mensaje de éxito
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <title>Redireccionando</title>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css'>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: linear-gradient(135deg, #FFE4B5, #FFA500);
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .mensaje {
                background: white;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                text-align: center;
            }
            .mensaje i {
                font-size: 2rem;
                color: #FF8C00;
            }
        </style>
    </head>
    <body>
        <div class='mensaje'>
            <i class='bi bi-check-circle-fill'></i>
            <h4 class='mt-3'>¡Credenciales válidas!</h4>
            <p>Redireccionando en <span id='countdown'>3</span> segundos...</p>
        </div>
        <script>
            let seconds = 3;
            const countdown = document.getElementById('countdown');
            const interval = setInterval(() => {
                seconds--;
                countdown.textContent = seconds;
                if (seconds <= 0) {
                    clearInterval(interval);
                    window.location.href = 'principal.php';
                }
            }, 1000);
        </script>
    </body>
    </html>";
    exit();
} else {
    // Manejo de intentos fallidos
    $_SESSION['intentos'] = ($_SESSION['intentos'] ?? 0) + 1;

    if ($_SESSION['intentos'] >= 3) {
        $_SESSION['bloqueado_hasta'] = time() + 60; // Bloqueo por 60 segundos
        $_SESSION['error'] = 'Has superado el límite de 3 intentos. Cuenta bloqueada temporalmente.';
    } else {
        $intentos_restantes = 3 - $_SESSION['intentos'];
        $_SESSION['error'] = 'Credenciales incorrectas. Te quedan '.$intentos_restantes.' intentos.';
    }

    header("Location: index.php");
    exit();
}
?>