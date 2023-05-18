// agrega un evento al html, cuando se apreta la tecla enter se ocultan todos los inputs
document.addEventListener('keypress', function (e) {
    let inputs=document.getElementsByTagName("input")
    if (e.key === 'Enter') {
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].className="form-control d-none"
            
        }
    }      
})


// function ocultarInput(idInput) {
//     let input=document.getElementById(idInput)
//     if (e.key === 'Enter') {
//         input.className="form-control d-none"
//     }      
    
// }

// mostrar el input para editar el campo
function mostrarInput(idInput) {
    document.getElementById(idInput).className="form-control d-block"
}

function updTexto(idTexto, idInput) {
    document.getElementById(idTexto).innerHTML=document.getElementById(idInput).value
}

// agrega un alumno a la tabla con datos de ejemplo
let contador=1
function addAlumno() {
    contador++
    let tbody=document.getElementById("tbody")

    let tr=document.createElement("tr")
    let tdID=document.createElement("td")
    tdID.innerHTML=contador
    tr.appendChild(tdID)

    let tdNom=document.createElement("td")
    tdNom.setAttribute("onclick",`mostrarInput('inputNombre${contador}')` )

    let divNom=document.createElement("div")
    divNom.setAttribute("class","mb-1")
    divNom.setAttribute("id",`txtNombre${contador}`)
    divNom.innerHTML="Nombre"
    tdNom.appendChild(divNom)
    tr.appendChild(tdNom)

    let divInput=document.createElement("div")
    let inputNom=document.createElement("input")
    inputNom.setAttribute("type","text")
    inputNom.setAttribute("id",`inputNombre${contador}`)
    inputNom.setAttribute("class","form-control d-none")
    inputNom.setAttribute("onkeyup",`updTexto('txtNombre${contador}','inputNombre${contador}')`)
    divInput.appendChild(inputNom)
    tdNom.appendChild(divInput)

    let tdApe=document.createElement("td")
    tdApe.innerHTML="Apellido"
    tr.appendChild(tdApe)

    let tdMail=document.createElement("td")
    tdMail.innerHTML="email@gmail.com"
    tr.appendChild(tdMail)

    let tdOpe=document.createElement("td")
    tdOpe.innerHTML="<i class='bi bi-trash-fill'></i>"
    tr.appendChild(tdOpe)

    tbody.appendChild(tr)

    

}