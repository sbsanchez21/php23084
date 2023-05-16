// función nos indica un error si el usuario no tiene @ ni el dominio
// codoacodo o gmail.
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

    if (!user.includes("@")) {
        // console.log("El usuario debe contener un @")
        document.getElementById("mensaje").innerHTML="El usuario debe contener un @"
        document.getElementById("mensaje").className="text-danger fw-bold p-2 rounded"
    } else if(!user.toLowerCase().includes("codoacodo.edu.ar") && !user.toLowerCase().includes("gmail.com")) {
        document.getElementById("mensaje").innerHTML="El usuario debe contener el dominio codoACodo.edu.ar o gmail.com"
        document.getElementById("mensaje").className="text-danger fw-bold p-2 rounded"
    } else {
        document.getElementById("mensaje").innerHTML=""
    }
  
}

// determina la fortaleza de una pass
// si teiene menos de 4 caracteres es baja, entre 4 y 8 media, y más de 8 es alta
function defFortaleza() {
    const baja=4
    const media=8
    
    let pass=document.getElementById("pass").value


    // const regex= new RegExp("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}")
    const regex= new RegExp("(?=.*[a-z])(?=.*[A-Z]).{8,}")
    console.log(regex.test(pass))
    if (!regex.test(pass)) {
        document.getElementById("mensaje").innerHTML="Password debe contener una  minúscula, una mayuscula y debe ser mayor a 8 caracteres"        
        document.getElementById("mensaje").className="bg-danger p-1 m-1 rounded"
    } else {
        document.getElementById("mensaje").innerHTML=""        
        document.getElementById("mensaje").className=""
    }


    // const regDigito= new RegExp("(?=.*\d)")
    // const regMin= new RegExp("(?=.*[a-z])")
    // const regMay= new RegExp("(?=.*[A-Z])")
    // const regMas8= new RegExp(".{8,}")
    
    // if (!regDigito.test(pass)) {
    //     document.getElementById("mensaje").innerHTML="Password debe contener un dígito"        
    //     document.getElementById("mensaje").className="bg-danger p-1 m-1 rounded"
    // } else if(!regMin.test(pass)) {
    //     document.getElementById("mensaje").innerHTML="Password debe contener una minúscula"        
    //     document.getElementById("mensaje").className="bg-danger p-1 m-1 rounded"

    // } else {
    //     document.getElementById("mensaje").innerHTML=""        
    //     document.getElementById("mensaje").className=""
    // }



//     if (pass.length<=baja) {
//         document.getElementById("mensaje").innerHTML="Fortaleza baja"        
//         document.getElementById("mensaje").className="bg-danger p-1 m-1 rounded"
//     } else if(pass.length<=media) {
//         document.getElementById("mensaje").innerHTML="Fortaleza media"        
//         document.getElementById("mensaje").className="bg-info p-1 m-1 rounded"
//     } else {
//         document.getElementById("mensaje").innerHTML="Fortaleza alta"        
//         document.getElementById("mensaje").className="bg-success p-1 m-1 rounded"
//     }
}

// verifica que la pass y la rep pass sean iguales
function compararPass() {
    let repPass=document.getElementById("repPass").value
    let pass=document.getElementById("pass").value

    if (repPass!=pass) {
        document.getElementById("mensaje").innerHTML="La contraseñas no coinciden"        
        document.getElementById("mensaje").className="bg-danger p-1 m-1 rounded"
    } else {
        document.getElementById("mensaje").innerHTML="Las password coinciden"        
        document.getElementById("mensaje").className="bg-success p-1 m-1 rounded"
        
    }
}

// todo: poner en enabled el botón cuando es valido el user y las password