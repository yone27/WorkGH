//MODAL
if (document.getElementsByClassName("openModal")) {
    //console.log("entre")
    var modal = document.getElementById("tvesModal");

    //Seleccionas todos los elementos con clase btnModal
    var btn = document.getElementsByClassName("openModal");

    //Recorres la lista de elementos seleccionados
    for (var i = 0; i < btn.length; i++) {
        //Añades un evento a cada elemento
        btn[i].addEventListener("click", function () {
            //Aquí la función que se ejecutará cuando se dispare el evento
            modal.style.display = "block";

            body.style.position = "static";
            body.style.height = "100%";
            body.style.overflow = "hidden";
        });
    }


    var span = document.getElementsByClassName("close")[0];
    var body = document.getElementsByTagName("body")[0];

    if (span) {
        span.onclick = function () {
            modal.style.display = "none";
            body.style.position = "inherit";
            body.style.height = "auto";
            body.style.overflow = "visible";
        }
    }
    window.onclick = function (event) {
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

if (item1) {
    item1.addEventListener("click", () => {
        //remove class
        item1.classList.remove("no-Select");
        item2.classList.remove("no-Select");
        item3.classList.remove("no-Select");

        //add class
        item2.classList.add("no-Select");
        item3.classList.add("no-Select");
    })
}

if (item2) {
    item2.addEventListener("click", () => {
        //remove class
        item1.classList.remove("no-Select");
        item2.classList.remove("no-Select");
        item3.classList.remove("no-Select");

        //add class
        item1.classList.add("no-Select");
        item3.classList.add("no-Select");
    })
}

if (item3) {
    item3.addEventListener("click", () => {
        //remove class
        item1.classList.remove("no-Select");
        item2.classList.remove("no-Select");
        item3.classList.remove("no-Select");
        //add class
        item2.classList.add("no-Select");
        item1.classList.add("no-Select");
    })
}




document.addEventListener('DOMContentLoaded', function () {
    const container = document.querySelector("#item-container");
    const wrapperButtons = document.querySelector("#wrapperButtons");
    const wrapperSections = document.querySelector("#wrapperSections")
    const wrapper = document.getElementById("wrapper")

    if (container) {
        // recorriendo header targets
        for (const iterator of container.children) {
            iterator.addEventListener('click', async () => {

                // Agregamos las animaciones a la botonera 1
                container.classList.add('animate')
                container.classList.add('animate__fadeOut')

                // Agregando clases al segundo wrapper
                wrapper.classList.remove('hidden')
                wrapper.classList.add('overlap-a')
                wrapper.classList.add('animate')
                wrapper.classList.add('animate__fadeIn')

                for (const other of wrapperSections.children) {
                    if (other.dataset.id === iterator.dataset.id) {
                        actives(iterator)
                        other.classList.remove('hidden')
                    } else {
                        other.classList.add('hidden')
                    }
                }
            })
        }

        for (const iterator of wrapperButtons.children) {
            iterator.addEventListener('click', () => {
                // recorriendo opciones targets
                for (const other of wrapperSections.children) {
                    if (other.dataset.id === iterator.dataset.id) {
                        actives(iterator)
                        other.classList.remove('hidden')
                    } else {
                        other.classList.add('hidden')
                    }
                }
            })
        }

        // comparacion con los botones para quitar activos y dejar solo uno
        function actives(iterator) {
            for (const val of wrapperButtons.children) {
                if (val.dataset.id != iterator.dataset.id) {
                    val.classList.remove('active')
                } else {
                    val.classList.add('active')
                }
            }
        }
    }
});

//Permite obtener el valor del select y llenar otro select enviandole a un servicio ese valor
async function selectValor(idsrc, iddst, url) {

    let src = document.getElementById(idsrc);
    let dst = document.getElementById(iddst);
    let selected = src.options[src.selectedIndex].value;

    //Ajax 
    const data = await fetch(`${url}&valor=${selected}`, { method: "GET" });
    const rest = await data.json();
    console.log(rest);

    let output = "";
    rest.list.forEach(element => {
        output += `<option value="${element.id}">${element.name}</option>`;
    });
    //Fin ajax

    dst.innerHTML = output;

}


var URLactual = window.location;
if (URLactual.toString().includes("index.php")) {
    // JavaScript Document

    //Acciones tras cargar la página
    mostrarEnPantalla = document.getElementById("pass");

    //Variable para ir guardando el valor del caracter
    x = "0";

    /*Se inician las variales en la pantalla: 1 es un número escrito por primera 
    vez, mientras que 0 son las cifras que completan nuestro número*/
    x1 = 1;


    //Función numero para registar la escritura en pantalla
    function numero(xx) {
        // Si x es igual a 0 el número que se muestra en pantalla es igual a 1.

        
        if (mostrarEnPantalla.value.length < 4) {
            if (x == "0" || x1 == 1) {
                mostrarEnPantalla.value = xx;
                //Con esta variable se guarda el número y se continua con este
                x = xx;
            } else {
                /*Esta operación se hace mediante una cadena de texto para que el 
                         número tan solo se añada y no se sume al anterior*/
                mostrarEnPantalla.value += xx;
                x += xx;
            }
            x1 = 0;
        }
    }

    //En esta función solo borraremos la última cifra que puesta en la pantalla
    function borradoUltimaCifra() {
        //Con 'length' podemos localizar la última cifra
        cifras = x.length;

        //Una vez localizada puede ser borrada
        borrar = x.substr(cifras - 1, cifras);
        x = x.substr(0, cifras - 1);
        
        mostrarEnPantalla.value = x;
    }
}

document.addEventListener("DOMContentLoaded", function (params) {
    const form = document.getElementById("idForm");
    form.addEventListener("submit", async  (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        formData.append("newRegister","0");
        const data = await fetch("ajax.php", {method : 'POST', body : formData});
        const rest = await data.text();
        console.log(rest);
    })
})
