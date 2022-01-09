"use strict"

document.addEventListener("DOMContentLoaded", getComments);

const API_URL = "api/comments/post/";

let app = new Vue ({
    el:"#app",
    data: {
        comentarios:[],
    }
});

async function getComments(){
    let id_post = document.getElementById("id_post").value;
    try {   
        let response = await fetch(API_URL+ id_post);
        if(response.ok) {
            let comentarios = await response.json();
            app.comentarios = comentarios;
            console.log(comentarios);
        }

    }
    catch (error) {
        console.log(error);
    }

}