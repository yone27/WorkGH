//MODAL
if (document.getElementsByClassName("openModal")) {
    //console.log("entre")
    var modal = document.getElementById("tvesModal");

    //Seleccionas todos los elementos con clase btnModal
    var btn = document.getElementsByClassName("openModal");

    //Recorres la lista de elementos seleccionados
    for (var i = 0; i < btn.length; i++) {
        //Añades un evento a cada elemento
        btn[i].addEventListener("click", function() {
            //Aquí la función que se ejecutará cuando se dispare el evento
            modal.style.display = "block";

            body.style.position = "static";
            body.style.height = "100%";
            body.style.overflow = "hidden";
        });
    }


    var span = document.getElementsByClassName("close")[0];
    var body = document.getElementsByTagName("body")[0];

if(span)
{
    span.onclick = function() {
        modal.style.display = "none";   
        body.style.position = "inherit";
        body.style.height = "auto";
        body.style.overflow = "visible";
    }
}
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";

            body.style.position = "inherit";
            body.style.height = "auto";
            body.style.overflow = "visible";
        }
    }
}//FIN MODAL

// const item1 = document.getElementById("opc1");
// const item2 = document.getElementById("opc2");
// const item3 = document.getElementById("opc3");

// item1.addEventListener("click",()=>{
//     //remove class
//     item1.classList.remove("no-Select");
//     item2.classList.remove("no-Select");
//     item3.classList.remove("no-Select");

//     //add class
//     item2.classList.add("no-Select");
//     item3.classList.add("no-Select");
// })

// item2.addEventListener("click",()=>{
//     //remove class
//     item1.classList.remove("no-Select");
//     item2.classList.remove("no-Select");
//     item3.classList.remove("no-Select");

//     //add class
//     item1.classList.add("no-Select");
//     item3.classList.add("no-Select");
// })

// item3.addEventListener("click",()=>{
//     //remove class
//     item1.classList.remove("no-Select");
//     item2.classList.remove("no-Select");
//     item3.classList.remove("no-Select");

//     //add class
//     item2.classList.add("no-Select");
//     item1.classList.add("no-Select");
// })


// document.addEventListener('DOMContentLoaded', function () {
//     const container = document.querySelector("#item-container");
//     const wrapperButtons = document.querySelector("#wrapperButtons");
//     const wrapperSections = document.querySelector("#wrapperSections")
//     const wrapper = document.getElementById("wrapper")
    
//     // recorriendo header targets
//     for (const iterator of container.children) {
//         iterator.addEventListener('click', async () => {

//             // Agregamos las animaciones a la botonera 1
//             container.classList.add('animate')
//             container.classList.add('animate__fadeOut')

//             // Agregando clases al segundo wrapper
//             wrapper.classList.remove('hidden')
//             wrapper.classList.add('overlap-a')
//             wrapper.classList.add('animate')
//             wrapper.classList.add('animate__fadeIn')

//             for (const other of wrapperSections.children) {
//                 if (other.dataset.id === iterator.dataset.id) {
//                     actives(iterator)
//                     other.classList.remove('hidden')
//                 } else {
//                     other.classList.add('hidden')
//                 }
//             }
//         })
//     }

//     for (const iterator of wrapperButtons.children) {
//         iterator.addEventListener('click', () => {
//             // recorriendo opciones targets
//             for (const other of wrapperSections.children) {
//                 if (other.dataset.id === iterator.dataset.id) {
//                     actives(iterator)
//                     other.classList.remove('hidden')
//                 } else {
//                     other.classList.add('hidden')
//                 }
//             }
//         })
//     }

//     // comparacion con los botones para quitar activos y dejar solo uno
//     function actives(iterator) {
//         for (const val of wrapperButtons.children) {
//             if (val.dataset.id != iterator.dataset.id) {
//                 val.classList.remove('active')
//             } else {
//                 val.classList.add('active')
//             }
//         }
//     }
// })