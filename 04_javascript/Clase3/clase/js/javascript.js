// alert("hola js")

// declara una variable a y le asigna el valor 5
// var a=5
// console.log("a: " + a)

// // se recomienda declara variables con let
// let b=6
// console.log("variable let b: " + b)

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
usuario=prompt("Ingrese su usuario")
console.log(`El usuario es correcto? ${usuario == 'psuarez@gmail.com'}`)