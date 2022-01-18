"use strict"

let btnComentar =document.querySelectorAll(".btn-comentar");
    for (let btn of btnComentar) {
        btn.addEventListener("click", publicarComentario);
    }
let btnSeguir = document.querySelectorAll(".btn-seguir");

const API_URL = "api/comments/post/";

async function publicarComentario(btn) {
    btn = event.currentTarget.value;
    console.log(btn);
    let form = document.getElementById("formComentario");
        let post = btn;
        let usuario = form.dataset.user;
        let comentario = document.getElementById("comentario"+btn).value;
        let fotoUsuario = form.dataset.img;
        let date= form.dataset.date;
        console.log(post);
        console.log(usuario);
        console.log(comentario);

        if(comentario!="") {
            let comentarioNuevo = {
                "id_post_fk": btn,
                "user": usuario,
                "comment": comentario,
                "profilePhoto":fotoUsuario,
                "date":date
            }
            try {
                let response = await fetch(API_URL+post, {
                    "method": "POST",
                    "headers": {"Content-type": "application/json"},
                    "body": JSON.stringify(comentarioNuevo)
                });
                if(response.ok) {
                    console.log("Comentario añadido con exito");
                }
            }
            catch (e) {
                console.log(e);
            }
        }    
}








// HISTORIAS:
let stories = document.querySelectorAll('.historia');

stories.forEach(story => {
    story.addEventListener('click', e=> {
        stories.forEach(s => {s.classList.remove('active')});
        if (story.querySelector('.profile').classList.contains('empty')) 
            return flase;
        story.classList.add('active');
    });
});