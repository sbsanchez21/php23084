function validarUsu() {
    console.log("ingreso validarUsu")

    // dom: documen object model
    // console.log(document)
    // console.log(document.body)

    // // funciones js sobre dom
    // console.log(document.getElementById("titulo"))
    // console.log(document.getElementsByTagName("input"))
    // console.log(document.getElementsByClassName("btn"))

    let user=document.getElementById("user").value
    console.log(`user: ${user}`)

    console.log(user.includes("@"))

    if (!user.toLowerCase().includes("@")) {
        console.log("El usuario debe contener un @")
        document.getElementById("mensaje").innerHTML="El usuario debe contener un @"
        document.getElementById("mensaje").className="text-danger fw-bold m-2 p-2 rounded"
    } else if(!user.toLowerCase().includes("codoacodo.edu.ar")) {
        document.getElementById("mensaje").innerHTML="El usuario debe contener el dominio codoACodo.edu.ar"
        document.getElementById("mensaje").className="text-danger fw-bold m-2 p-2 rounded"
    } else {
        document.getElementById("mensaje").innerHTML=""
    }

    
}