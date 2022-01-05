{include file='templates/usoComun/header.tpl'}
<article>
    <div class="img-default">
        <img class="img-showLoginORRegister" src="img/showLoginORRegister.jpg" />
    </div>
    <div class="usuarioOcontraseña">
    <h2 class="instagramTitulo">Instagram</h2>
    <form  class="userycontraseña" action="verify" method="POST">
    <h5 class="alert-danger errorLogin">{$error}</h5>
                <div>
                    <input type="text" placeholder="Usuario" name="usuario">
                </div>
                <div>
                    <input type="password" placeholder="Contraseña" name="password">
                </div>
            <button class=iniciarSesion>Iniciar sesion </button>
        </form>
        <div class="noTenesCuenta">
            <p>¿No tienes cuenta? <a href="registrate">Registrarte</a></p>
        </div>
    </div>
    
</article>