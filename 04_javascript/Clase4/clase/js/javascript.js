// alert("hola js")

// declara una variable a y le asigna el valor 5
// var a=5
// console.log("a: " + a)

// // se recomienda declara variables con let
// let b=6
// console.log("variable let b: " + b)
let tiempoEsperad=23

// variables texto
let nombre="Pedro"
let apellido="Suarez"

// uso de una variable
let usuario=""
let pass=""
// usuario=prompt("Ingrese su usuario")
// pass=prompt("Ingrese su password")

console.log("El usuario y password ingresados son: " + usuario + pass)

// concatenar variables texto
console.log("El nombre y apellido del usuario son: " + nombre + ", " + apellido)
console.log(`El apellido y nombre del usuario son: ${apellido}, ${nombre}`)

// operadores de comparación
let a=3
let b=4
let c=3
let d=5

let resultado = (a == b);
console.log( `a == b: ${resultado}`);

resultado = (a != b);
console.log( `a != b: ${resultado}`);

resultado = (a > b);
console.log( `a > b: ${resultado}`);

resultado = (a < b);
console.log( `a < b: ${resultado}`);

resultado = (a >= c);
console.log( `a >= c: ${resultado}`);

resultado = (a >= d);
console.log( `a >= d: ${resultado}`);

resultado = (a >= c);
console.log( `a >= c: ${resultado}`);

resultado = (a <= c);
console.log( `a <= c: ${resultado}`);

// aplicación comparadores
// usuario=prompt("Ingrese su usuario")
console.log(`El usuario es correcto? ${usuario == 'psuarez@gmail.com'}`)


// operadores lógicos
let usu 

// usu=prompt("Ingrese su usuario")
// pass=prompt("INgrese su pass")
console.log(`usus: ${usu}`)
console.log(`pass: ${pass}`)

//and
if (usu=="psuarez@gmail.com" && pass=="1234") {
    console.log("Bienvenido a la página")
} else {
    console.log("usu o pass incorrectos")
}


let estaLloviendo
let hayPronosticoLluvia
// estaLloviendo=prompt("Esta lloviendo?") 
// hayPronosticoLluvia=prompt("Hay pronostico de lluvia?")


//or
if (estaLloviendo=="si" || hayPronosticoLluvia=="si") {
    console.log("llevar paragüas")
} else {
    console.log("No llevar paragüas")
}



// estrcuturas de control
if (true) {
    // si true
}

if (true) {
    // true
} else {
    // false
}

// edad=prompt("ingrese su edad")
let edad
if (edad >= 18) {
    console.log("puede ingresar a la página")
} else {
    console.log("no puede ingresar")
}

// iterador
for (let i = 0; //inicializa i=0
    i < 4; //corta cuando esto da false
    i++) //incrementa 1
    {
    //i=0, i=1, i=2, i=3, 
    console.log(`i: ${i}`)
}

for (let i = 0; i < 5; i++) {
    console.log(`Bievenido cliente ${i}`)
}

let mes
mes=prompt("ingrese nro mes")
while (mes<=12) {
    console.log(`mes: ${mes}`)
    mes++
}

user=""
while (user!="psuarez@gmail.com") {
    user=prompt("ingrese el usuario")
}