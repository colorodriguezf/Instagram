<nav>
    <div class="contenedorNav"> 
    <a href="home">
        <img class="img-logo"  src="img\Instagram-Logo.png"/>
      </a>  
        <input type="text" class="search-box" placeholder="Buscar">
        <div class="nav-items">
            <ul class="iconosNav">
                <li class="nav-item">
                    <a href="home" class="nav-link"> <svg aria-label="Inicio" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M9.005 16.545a2.997 2.997 0 012.997-2.997h0A2.997 2.997 0 0115 16.545V22h7V11.543L12 2 2 11.543V22h7.005z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                </li>
                <li class="nav-item">
                <a href="direct" class="nav-link"> <svg aria-label="Messenger" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M12.003 2.001a9.705 9.705 0 110 19.4 10.876 10.876 0 01-2.895-.384.798.798 0 00-.533.04l-1.984.876a.801.801 0 01-1.123-.708l-.054-1.78a.806.806 0 00-.27-.569 9.49 9.49 0 01-3.14-7.175 9.65 9.65 0 0110-9.7z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="1.739"></path><path d="M17.79 10.132a.659.659 0 00-.962-.873l-2.556 2.05a.63.63 0 01-.758.002L11.06 9.47a1.576 1.576 0 00-2.277.42l-2.567 3.98a.659.659 0 00.961.875l2.556-2.049a.63.63 0 01.759-.002l2.452 1.84a1.576 1.576 0 002.278-.42z" fill-rule="evenodd"></path></svg> </a>
                </li>

                    {* Modal create post *}
                <li class="nav-item" data-toggle="modal" data-target="#modaleCreatePost" href="lost">
                    <a class="nav-link"> <svg aria-label="Nueva publicación" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line></svg> </a>
                </li>
                {* ----------------------------------------------------------------------- *}   

                <li class="nav-item">
                <a href="explore" class="nav-link"> <svg color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><polygon fill="none" points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon><polygon fill-rule="evenodd" points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056"></polygon><circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle></svg></a>
                </li>
                <li class="nav-item">
                <a href="activity" class="nav-link" ><svg aria-label="Feed de actividad" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path></svg> </a>
                </li>
                <li class="nav-item">
                <a  class="nav-link"><img class="foto_perfil" src="{$foto_perfil}"/>  </a>
                        <ul class="ulPerfil">
                            <div>
                                <li><a href="{$nombre_usuario}/"> <i class="far fa-user-circle perfil"></i>Perfil </li></a>
                            </div>
                            <div>
                                <li> <i class="fas fa-cog configuracion"></i>Configuracion</li>
                            </div>
                            <div class="salir">
                            <li> <a href="logout" class="Alogout"> Salir</a></li>
                            </div>
                        </ul>
                </li>
            </ul>
        </div>
        
        </div>
        
        
        </nav>
        
        
        



        {* Modal create post *}
        
        <div class="modal fade" id="modaleCreatePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <button type="button" class="close-create" aria-label="Close">
        <svg aria-label="Cerrar" class="_8-yf5 " color="#ffffff" fill="#ffffff" height="24" role="img" viewBox="0 0 24 24" width="24"><polyline fill="none" points="20.643 3.357 12 12 3.353 20.647" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></polyline><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" x1="20.649" x2="3.354" y1="20.649" y2="3.354"></line></svg>
        </button>
            <div class="modal-dialog dialog-createPost" role="document">
                <div class="modal-content content-createPost">
                <div class="modal-header header-create">
                    <h5 class="modal-title tittle-create" id="exampleModalLabel">Crear una nueva publicacion</h5>
                </div>
                <div class="modal-body">
                <div class="svg-create">
                  <svg  class="" color="#262626" fill="#262626" height="77" role="img" viewBox="0 0 97.6 77.3" width="96"><path d="M16.3 24h.3c2.8-.2 4.9-2.6 4.8-5.4-.2-2.8-2.6-4.9-5.4-4.8s-4.9 2.6-4.8 5.4c.1 2.7 2.4 4.8 5.1 4.8zm-2.4-7.2c.5-.6 1.3-1 2.1-1h.2c1.7 0 3.1 1.4 3.1 3.1 0 1.7-1.4 3.1-3.1 3.1-1.7 0-3.1-1.4-3.1-3.1 0-.8.3-1.5.8-2.1z" fill="currentColor"></path><path d="M84.7 18.4L58 16.9l-.2-3c-.3-5.7-5.2-10.1-11-9.8L12.9 6c-5.7.3-10.1 5.3-9.8 11L5 51v.8c.7 5.2 5.1 9.1 10.3 9.1h.6l21.7-1.2v.6c-.3 5.7 4 10.7 9.8 11l34 2h.6c5.5 0 10.1-4.3 10.4-9.8l2-34c.4-5.8-4-10.7-9.7-11.1zM7.2 10.8C8.7 9.1 10.8 8.1 13 8l34-1.9c4.6-.3 8.6 3.3 8.9 7.9l.2 2.8-5.3-.3c-5.7-.3-10.7 4-11 9.8l-.6 9.5-9.5 10.7c-.2.3-.6.4-1 .5-.4 0-.7-.1-1-.4l-7.8-7c-1.4-1.3-3.5-1.1-4.8.3L7 49 5.2 17c-.2-2.3.6-4.5 2-6.2zm8.7 48c-4.3.2-8.1-2.8-8.8-7.1l9.4-10.5c.2-.3.6-.4 1-.5.4 0 .7.1 1 .4l7.8 7c.7.6 1.6.9 2.5.9.9 0 1.7-.5 2.3-1.1l7.8-8.8-1.1 18.6-21.9 1.1zm76.5-29.5l-2 34c-.3 4.6-4.3 8.2-8.9 7.9l-34-2c-4.6-.3-8.2-4.3-7.9-8.9l2-34c.3-4.4 3.9-7.9 8.4-7.9h.5l34 2c4.7.3 8.2 4.3 7.9 8.9z" fill="currentColor"></path><path d="M78.2 41.6L61.3 30.5c-2.1-1.4-4.9-.8-6.2 1.3-.4.7-.7 1.4-.7 2.2l-1.2 20.1c-.1 2.5 1.7 4.6 4.2 4.8h.3c.7 0 1.4-.2 2-.5l18-9c2.2-1.1 3.1-3.8 2-6-.4-.7-.9-1.3-1.5-1.8zm-1.4 6l-18 9c-.4.2-.8.3-1.3.3-.4 0-.9-.2-1.2-.4-.7-.5-1.2-1.3-1.1-2.2l1.2-20.1c.1-.9.6-1.7 1.4-2.1.8-.4 1.7-.3 2.5.1L77 43.3c1.2.8 1.5 2.3.7 3.4-.2.4-.5.7-.9.9z" fill="currentColor"></path></svg>
                  <div class="arrastraFoto"><p class="pcreate">Arrastra las fotos y los videos aquí</p></div>

                  
                  <div class=""> <input class="inputSubirFoto" type="file" name="input_name" id="imageToUpload" name="foto_perfil" required></div>
                  <button data-dismiss="modal"  class="siguienteCreate" data-toggle="modal" data-target="#modaleDetailPost" >Siguiente</button>
                  
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  
                  
                  <div   class="modal fade" id="modaleDetailPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog dialog-detailPost modal-lg" role="document">
                  <div class="modal-content content-detailPost">
                  
          <form class="formDetailPost" action="publicar" method="POST" enctype="multipart/form-data">
                  
                  <input  value={$user_id} hidden name="user_id">
                  <input  id="fotoPost"  name="foto">
                    <div class="modal-header header-detail">
                    <h5 class="modal-title tittle-create" id="exampleModalLabel">Crear una nueva publicacion</h5> <button type="submit" class="cambiarCuenta">Compartir</button>
                    </div>
                    <div class="modal-body bodyDetail">
                    <div class="contenedorNewPost">
                    <div id="imagePreview">
                    {* aca va la imagen por JS*}
                    </div>
                                <div class="detallesNewPost">
                                    <div class="contenedorDetailUserYFoto">
                                        <div><img class="foto_perfil" src="{$foto_perfil}"/></div>
                                        <div><h3>{$nombre_usuario}</h3></div>
                                    </div>
                                    <div class="contenedorText-Botones">
                                        <div class="contenedorTextarea"><textarea class="textAreaNewPost" maxlength="2200" aria-label="Escribe una descripción..." placeholder="Escribe una descripción..." class="lFzco" autocomplete="off" autocorrect="off" style="height: 24px !important;" name="pieFoto"></textarea></div>
                                        <div class="emojisPostNew">
                                            <button class="wpO6b  " type="button"><div class="QBdPU "><svg aria-label="Emoji" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="20" role="img" viewBox="0 0 24 24" width="20"><path d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z"></path></svg></div></button>
                                        </div>
                                        <div class="contenedorUbicacionNew">
                                            <input autocomplete="off" placeholder="Agregar ubicación" spellcheck="true" type="text" name="ubicacion">
                                            <div class="contenedorSvgNewPost">
                                                <svg aria-label="Agregar ubicación" class="_8-yf5 " color="#000000" fill="#000000" height="18" role="img" viewBox="0 0 24 24" width="18"><path d="M12.053 8.105a1.604 1.604 0 101.604 1.604 1.604 1.604 0 00-1.604-1.604zm0-7.105a8.684 8.684 0 00-8.708 8.66c0 5.699 6.14 11.495 8.108 13.123a.939.939 0 001.2 0c1.969-1.628 8.109-7.424 8.109-13.123A8.684 8.684 0 0012.053 1zm0 19.662C9.29 18.198 5.345 13.645 5.345 9.66a6.709 6.709 0 0113.417 0c0 3.985-3.944 8.538-6.709 11.002z"></path></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
            </form>
                </div>
                </div>
                </div>
            </div>
            </div>
