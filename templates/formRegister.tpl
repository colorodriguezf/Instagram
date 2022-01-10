{include file='templates/usoComun/header.tpl'}
<div class="registro">
    <h2>Instagram</h2>
    <p class="msg-registrate">Regístrate para ver fotos y videos de tus amigos.</p>
    <form class="formRegistro" action="login" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="text" placeholder="Correo electronico" name="correo" required>
                </div>
                <div>
                    <input type="text" placeholder="Nombre de usuario" name="nombre_usuario" required>
                </div>
                <div>
                    <input type="text" placeholder="Nombre" name="nombre" required>
                </div>
                <div>
                    <input type="text" placeholder="Apellido" name="apellido" required>
                </div>
                <div>
                    <input type="text" placeholder="Apodo" name="nickname" required>
                </div>
                <div>
                    <input type="password" placeholder="Contraseña" name="password" required>
                </div>
                <div>
                    <input type="file" name="input_name" id="imageToUpload" name="foto_perfil" required>
                </div>
                <button type="submit"class=iniciarSesion>Registrarme </button>
                <div class="noTenesCuenta">
                <p>¿Ya tienes cuenta? <a href="">Iniciar Sesion</a></p>
        </form>
    </div>
</div>