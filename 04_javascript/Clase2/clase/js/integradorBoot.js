// alert("Hola js");

function calcularPrecioFinal() {
    // lo coloco para ver si ingresó a la función
    console.log("ingreso a calcularPrecioFinal");

    // en cantEnt almaceno la cantidad de entradas que ingreso el usuario
    let cantEnt=document.getElementById("cantEntradas").value;  
    console.log("cantEnt:" + cantEnt);
    
    // en desc almaceno el tipo de usuario y el descuento que elijió el usuario
    let desc=document.getElementById("porcDescuento").value;
    console.log("desc:" + desc);

    // obtento el descuento que hay que realizar
    let descTotal= (cantEnt*1000) * desc/100;
    //10 *1000 * 10/ 100=1000
    console.log("descTotal" + descTotal);

    // resto el descuento total del precio total
    let precioFin=(cantEnt*1000) - descTotal;
    console.log("precioFin:" + precioFin);


    // coloco en el html el valor de las entradas - el descuento
    document.getElementById("precioFinal").value=precioFin;
    document.getElementById("precioFinal2").innerHTML=precioFin;
    document.getElementById("precioFinal2").style.display="none";
}