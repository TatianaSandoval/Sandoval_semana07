<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --color-primary: #FF8C00;
            --color-secondary: #FFA500;
            --color-light: #FFE4B5;
            --color-dark: #FF4500;
            --color-accent: #FFD700;
        }

        body {
            background: linear-gradient(135deg, var(--color-light), var(--color-secondary));
            height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 400px;
            margin: 0 auto;
            position: relative;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: absolute;
            top: -70px;
            left: 50%;
            transform: translateX(-50%);
        }

        .btn-login {
            background: var(--color-dark);
            color: white;
            border: none;
            padding: 10px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-login:hover {
            background: var(--color-primary);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(255, 69, 0, 0.2);
        }

        .text-orange {
            color: var(--color-dark);
        }

        .input-group-text {
            background: white;
            border-color: var(--color-dark);
        }

        .form-control {
            border-color: var(--color-dark);
        }

        .form-control:focus {
            box-shadow: 0 0 5px var(--color-dark);
            border-color: var(--color-dark);
        }

        input::placeholder {
            color: #999;
            font-style: italic;
        }

        .alert-custom {
            background-color: var(--color-light);
            border-left: 5px solid var(--color-dark);
            color: var(--color-dark);
        }

        .reloj-msg {
            font-size: 0.9rem;
            text-align: center;
            color: var(--color-dark);
            font-weight: bold;
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <img src="/aplicativo/libs/images/foto_principal.jpeg" alt="Foto de perfil" class="profile-img">
            <div class="login-header text-center mb-4">
                <h1 class="text-orange">Bienvenido</h1>
                <p class="text-muted">Inicia sesión para continuar</p>
            </div>

            <?php if(isset($_SESSION['error'])): ?>
    <div class="alert alert-custom alert-dismissible fade show">
        <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

            <form method="post" action="control.php" autocomplete="off">
                <div class="mb-3 position-relative">
                    <label for="username" class="form-label">Usuario</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person-fill text-warning"></i>
                        </span>
                        <input type="text" class="form-control" id="username" name="username" required 
                               placeholder="Usuario" autofocus>
                    </div>
                </div>

                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock-fill text-warning"></i>
                        </span>
                        <input type="password" class="form-control" id="password" name="password" required 
                               placeholder="Contraseña">
                        <button type="button" class="input-group-text" id="togglePassword">
                            <i class="bi bi-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn btn-login w-100 mt-2">
                    <i class="bi bi-box-arrow-in-right"></i> Entrar
                </button>
            </form>



            <?php if(isset($_SESSION['bloqueado_hasta']) && time() < $_SESSION['bloqueado_hasta']): ?>
    <?php
    $tiempo_restante = $_SESSION['bloqueado_hasta'] - time();
    ?>
    <div class="reloj-msg">
        <i class="bi bi-clock-history"></i> Espera <span id="countdown"><?= $tiempo_restante ?></span> segundos para volver a intentar.
    </div>
    
    <script>
        // Tiempo restante en segundos
        let segundosRestantes = <?= $tiempo_restante ?>;
        const countdownElement = document.getElementById('countdown');
        
        // Actualizar el contador cada segundo
        setInterval(function() {
            segundosRestantes--;
            countdownElement.textContent = segundosRestantes;
            
            // Recargar cuando el tiempo expire
            if(segundosRestantes <= 0) {
                location.reload();
            }
        }, 1000);
    </script>
<?php endif; ?>

            
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggleBtn = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        toggleBtn.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            eyeIcon.classList.toggle('bi-eye');
            eyeIcon.classList.toggle('bi-eye-slash');
        });
    </script>
</body>
</html>