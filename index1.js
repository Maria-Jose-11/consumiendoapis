const API_URL= 'https://jsonplaceholder.typicode.com';




//CON FETCH

// //mostrar en el div con el id #app (en el html)
const HTMLResponse = document.querySelector("#app");
const HTMLResponse1 = document.querySelector("#app1");
const HTMLResponse2 = document.querySelector("#app2");
//con fetch traemos la dirección 
// fetch(`${API_URL}/users`)
fetch('archivo.json')
.then((response) =>response.json())
.then((users) => {
    const tpl = users.map(user => `<li>Nombre: ${user.name}<br>Correo: ${user.email}</li>`);
    HTMLResponse.innerHTML = `<ul>${tpl}</ul>`;
});


// fetch('https://jsonplaceholder.typicode.com/posts')
//   .then((response) => response.json())
//   .then((json) => console.log(json));

fetch(`${API_URL}/posts`)
.then((response) =>response.json())
.then((posts) => {
    const tpl = posts.map(post => `<li>ID: ${post.id}<br>Titulo: ${post.title}<br>Cuerpo: ${post.body}</li>`);
    HTMLResponse1.innerHTML = `<ul>${tpl}</ul>`;
});


//UTILIZANDO ELEMENTOS DE HTML

// const HTMLResponse = document.querySelector("#app");
// const ul = document.createElement('ul');

// fetch(`${API_URL}/users`)
// .then((response) =>response.json())
// .then((users) => {
//     users.forEach((user) =>{
//         let elemento = document.createElement("li");
//         elemento.appendChild(
//             document.createTextNode(`Nombre: ${user.name} / Correo: ${user.email}`)        
//         );
//         ul.appendChild(elemento);
//     });
//     HTMLResponse.appendChild(ul);
// });

//CON EL OBJETO XMLHTTPREQUEST -->metodo más antiguo
// const xml = new XMLHttpRequest();

// function onRequestHandler(){
//     if(this.readyState===4 && this.status===200){
//         //ReadyState:
//             //0 -> No se ha llamado al metodo open
//             //1 ->Se ha llamado al método open
//             //2 -> Se esta llamando al método send()
//             //3 -> cargando o recibiendo la respuesta
//             //4 -> operación completada
//         // console.log(this.response); //ver información en consola
        
//         //INFORMACION EN FORMATO JSON
//         const data = JSON.parse(this.response);
//         //console.log(data);
//         const HTMLResponse = document.querySelector("#app");
//         //obteniendo los datos que se requieren
//         const tpl = data.map(user => `<li>Nombre: ${user.name}<br>Correo: ${user.email}</li>`); 
//         HTMLResponse.innerHTML = `<ul>${tpl}</ul>`;
//     }
    
// }
// xml.addEventListener('load', onRequestHandler);
// xml.open('GET', `${API_URL}/users`);
// xml.send();
