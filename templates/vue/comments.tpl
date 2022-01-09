{literal}
<div id="app">
    <div class="contenedorComentarios">
      <ul class="listaComentarios">
        <li v-for="comentario in comentarios">
            <div class="comentario">
                <div>
                    <a href='{{comentario.user}}'>
                        <h2 class="h2Comentario"> {{comentario.user}} </h2>
                    </a>
                </div>
                <div class="pComentario">
                    <p>{{comentario.comment}}</p>
                </div>
            </div>

        </div>
        </li>
    </ul>


</div>



{/literal}