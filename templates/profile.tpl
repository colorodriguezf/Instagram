{include file='templates/usoComun/header.tpl'}

{include file='templates/usoComun/nav.tpl'}


<section class="contenedorPerfil">
    <div class="contenedor-datos">
    <img class="profile-fotoPerfil" src='{$usuario->profilePhoto}'/>
    </div>
    <div class="nombreUsuario">
            <div>
                <p class="usuarioUsername">{$usuario->username}</p>
            </div>

            <div class="publicaciones">
                <p> <span>{$publicaciones} </span>  publicaciones</p>            
            </div>
            <div class="seguidores">
                <p> <span> </span> seguidores </p>
            </div>
            <div class="seguidos">
                <p> <span> </span> seguidos </p>
            </div>
        </div>

</section>


{foreach from=$posteos item=$posteo}
    <div class="publicacionesPerfil">
        <div class="contenedorPosteoPerfil">
            <img src="{$posteo->media}"/>
        </div>
    </div>
        {{/foreach}}





{include file='templates/usoComun/footer.tpl'}