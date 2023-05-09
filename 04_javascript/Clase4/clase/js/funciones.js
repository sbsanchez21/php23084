let a=3
let b=4
console.log(`a+b= ${a+b}`)

// las funciones no se ejecutan por si solas, hay que invocarlas
// reutilizar código
function validarUsuYpass() {
    console.log("ingreso a la función")
    let usu
    let pass 
    usu=prompt("ingrese usuario")
    pass=prompt("ingrese pass")

    if (usu=="psuarez@gmail.com" && pass=="1234") {
        console.log("usuario y pass correcto")
    } else {
        console.log("usuario y pass Incorrecto")
    }
}

// validarUsuYpass()

function mostrarFortaleza() {
    let pass=document.getElementById("pass").value 

    if (pass.length<=5) {
        document.getElementById("msgPass").innerHTML="Fortaleza Baja"
        document.getElementById("msgPass").className="bg-danger m-2 p-2 rounded"
        
    } else if(pass.length<=8) {
        document.getElementById("msgPass").innerHTML="Fortaleza Media"
        document.getElementById("msgPass").className="bg-warning m-2 p-2 rounded"
    } else {
        document.getElementById("msgPass").innerHTML="Fortaleza Alta"
        document.getElementById("msgPass").className="bg-success m-2 p-2 rounded"
    }
}

function validarEmail() {
    let user=document.getElementById("user").value

    if (user.indexOf("@")==-1) {
        document.getElementById("msgUser").innerHTML="El usuario debe conenter un  @"
        document.getElementById("msgUser").className="bg-danger m-2 p-2 rounded"
    } else if(user.indexOf("@codoAcodo.edu.ar")==-1) {
        document.getElementById("msgUser").innerHTML="El usuario debe contener el dominio codoAcodo.edu.ar"
        document.getElementById("msgUser").className="bg-warning m-2 p-2 rounded"
        
    } else {
        document.getElementById("msgUser").innerHTML=""
        document.getElementById("msgUser").className=""

    }
}