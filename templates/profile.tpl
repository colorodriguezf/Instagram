{include file='templates/usoComun/header.tpl'}

{include file='templates/usoComun/nav.tpl'}


<section class="contenedorPerfil">
    <img class="profile-fotoPerfil" src='{$usuario->profilePhoto}'/>
    <div class="contenedor-cabezera">
            <div class="cabezera1">
                <div><p class="usuarioUsername">{$usuario->username}</p> </div>
                {if $nombre_usuario ==$usuario->username}
                        <div> <button class="">Editar perfil</button></div>
                        <div><svg aria-label="Opciones" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><circle cx="12" cy="12" fill="none" r="8.635" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle><path d="M14.232 3.656a1.269 1.269 0 01-.796-.66L12.93 2h-1.86l-.505.996a1.269 1.269 0 01-.796.66m-.001 16.688a1.269 1.269 0 01.796.66l.505.996h1.862l.505-.996a1.269 1.269 0 01.796-.66M3.656 9.768a1.269 1.269 0 01-.66.796L2 11.07v1.862l.996.505a1.269 1.269 0 01.66.796m16.688-.001a1.269 1.269 0 01.66-.796L22 12.93v-1.86l-.996-.505a1.269 1.269 0 01-.66-.796M7.678 4.522a1.269 1.269 0 01-1.03.096l-1.06-.348L4.27 5.587l.348 1.062a1.269 1.269 0 01-.096 1.03m11.8 11.799a1.269 1.269 0 011.03-.096l1.06.348 1.318-1.317-.348-1.062a1.269 1.269 0 01.096-1.03m-14.956.001a1.269 1.269 0 01.096 1.03l-.348 1.06 1.317 1.318 1.062-.348a1.269 1.269 0 011.03.096m11.799-11.8a1.269 1.269 0 01-.096-1.03l.348-1.06-1.317-1.318-1.062.348a1.269 1.269 0 01-1.03-.096" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path></svg> </div> 
                      {else if $sigo ==true}
                        <div class=""> <button class="perfilDejarDeSeguir">Dejar de seguir</button></div>
                        {else}
                        <div class=""> <button class="perfilSeguir">Seguir</button></div>
                {/if} 
            </div>

            <div class="cabezera2">
                <button> <span>{$publicaciones} </span>publicaciones</button>            
                <button type="button" data-toggle="modal" data-target="#modalSeguidores"> <span>{$seguidores}</span> seguidores </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modalSeguidores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Seguidores</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        {if $misSeguidores != null}
                                            {foreach from=$misSeguidores item=$seguidor}
                                                <ul>
                                                    <li><a href="{$seguidor->seguidor}" class="">{$seguidor->seguidor}</a></li>
                                                </ul>
                                            {/foreach}
                                            {else}
                                                <p>Todavia no tienes seguidores</p>
                                        {/if}
                                        </div>
                                    </div>
                                </div>
                            </div>
                <button type="button" data-toggle="modal" data-target="#modalSeguidos"> <span>{$seguidos}  </span> seguidoss </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modalSeguidos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Seguidos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            {if $misSeguidos !=null}
                                {foreach from=$misSeguidos item=$sigo}
                                    <ul>
                                        <li><a href="{$sigo->sigo}" class="">{$sigo->sigo}</a></li>
                                    </ul>
                                {/foreach}
                                {else}
                                    <p>Todavia no sigues a nadie</p>
                            {/if}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="cabezera3">
                 <h2>{$usuario->nickname}</h2>
                 <p>Aca irian datos</p>
                 <p>Aca irian datos</p>
                 <p>Aca irian datos</p>
                 <p>Aca irian datos</p>   
            </div>
    </div>
</section>
<div class="main-nav">
    <a>
    <svg aria-label="" class="_8-yf5 " color="#262626" fill="#262626" height="18" role="img" viewBox="0 0 24 24" width="24"><rect fill="none" height="18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="18" x="3" y="3"></rect><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="9.015" x2="9.015" y1="3" y2="21"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="14.985" x2="14.985" y1="3" y2="21"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="21" x2="3" y1="9.015" y2="9.015"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="21" x2="3" y1="14.985" y2="14.985"></line></svg>    
    PUBLICACIONES</a>
    <a>
        <svg aria-label="Guardado" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="18" role="img" viewBox="0 0 24 24" width="24"><polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon></svg>
        GUARDADAS</a>
    <a>
        <svg aria-label="Etiquetadas" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="18" role="img" viewBox="0 0 24 24" width="24"><path d="M10.201 3.797L12 1.997l1.799 1.8a1.59 1.59 0 001.124.465h5.259A1.818 1.818 0 0122 6.08v14.104a1.818 1.818 0 01-1.818 1.818H3.818A1.818 1.818 0 012 20.184V6.08a1.818 1.818 0 011.818-1.818h5.26a1.59 1.59 0 001.123-.465z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M18.598 22.002V21.4a3.949 3.949 0 00-3.948-3.949H9.495A3.949 3.949 0 005.546 21.4v.603" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><circle cx="12.072" cy="11.075" fill="none" r="3.556" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle></svg>
    ETIQUETADAS</a>
</div>



<div class="publicacionesPerfil">
<div class="contenedorPosteoPerfil">
{foreach from=$posteos item=$posteo}
            <img src="{$posteo->media}"/>
{{/foreach}}
        </div>
    </div>





{include file='templates/usoComun/footer.tpl'}