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


    // span.onclick = function() {
    //     modal.style.display = "none";   

    //     body.style.position = "inherit";
    //     body.style.height = "auto";
    //     body.style.overflow = "visible";
    // }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";

            body.style.position = "inherit";
            body.style.height = "auto";
            body.style.overflow = "visible";
        }
    }
}//FIN MODAL

const item1 = document.getElementById("opc1");
const item2 = document.getElementById("opc2");
const item3 = document.getElementById("opc3");

item1.addEventListener("click",()=>{
    //remove class
    item1.classList.remove("no-Select");
    item2.classList.remove("no-Select");
    item3.classList.remove("no-Select");

    //add class
    item2.classList.add("no-Select");
    item3.classList.add("no-Select");
})

item2.addEventListener("click",()=>{
    //remove class
    item1.classList.remove("no-Select");
    item2.classList.remove("no-Select");
    item3.classList.remove("no-Select");

    //add class
    item1.classList.add("no-Select");
    item3.classList.add("no-Select");
})

item3.addEventListener("click",()=>{
    //remove class
    item1.classList.remove("no-Select");
    item2.classList.remove("no-Select");
    item3.classList.remove("no-Select");

    //add class
    item2.classList.add("no-Select");
    item1.classList.add("no-Select");
})