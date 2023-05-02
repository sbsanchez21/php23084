// alert("hola js externo");
// confirm("Desde continuar en la página?")

function calPrecioFinal() {
    console.log("ingreso a calcular precio");

    //en cantEnt almacenamos la cantidad de entradas que ingreso el usuario
    let cantEnt=document.getElementById("cantEntradas").value; 
    console.log("cantEnt: " + cantEnt);

    // en porcDesc almacenamos el porcentaje de descuento que selecciono el usuario
    let porcDesc=document.getElementById("porcDescuento").value;
    console.log("porcDesc: " + porcDesc);

    //en descuento almacenamos los pesos totales a descontar
    let descuento=(cantEnt*1000) * porcDesc/100;
    console.log("descuento: " + descuento);

    //en precioTotal está el valor de las entradas x cant menos el descuento en pesos
    let precioTotal=(cantEnt*1000) - descuento;
    console.log("preciototal: " + precioTotal);

    
    // modificando dinámicamente el html para colocar el precio total en la pantalla
    document.getElementById("valorTotal").value=precioTotal;
}
