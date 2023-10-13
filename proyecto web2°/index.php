<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería alejandría</title>
    <link rel="icon" href="images/logo2.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <main>
        <div class="conteiner">
            <div class="back-box">
                <div class="back-box-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                        <button id="btn_longin">Iniciar Sesión</button>
                </div>
                <div class="back-box-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn_register">Regístrarse</button>
                </div>
            </div>

        <!--Formulario de Log In y Register-->
            <div class="conteiner-login-register">
            <!--Log In-->
                <form action="login_be.php" method="POST" class="form-login">
                    <h2>Iniciar Sesión</h2>
                        <input type="text" name="Correo" placeholder="Correo Electronico">
                        <input type="password" name="Contraseña" placeholder="Contraseña">
                            <button>Entrar</button>
                </form>

            <!--register-->
                <form action="registro_be.php" method="POST" class="form-register">
                    <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="Nombre">
                        <input type="text" placeholder="Correo Electronico" name="Correo">
                        <input type="text" placeholder="Usuario" name="Usuario">
                        <input type="password" placeholder="Contraseña" name="Contraseña">
                            <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>