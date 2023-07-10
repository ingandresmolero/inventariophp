//------------------------------------------
            //Editar Stock View
//------------------------------------------

let actual = document.getElementById('actual_input');
let promedio = document.getElementById('promedio_input');
let anterior = document.getElementById('anterior_input');
let ingreso = document.getElementById('ingreso_input')
let precioCompra = document.getElementById('precioCompra_input');
let precio1 = document.getElementById('precio1_input');
let utilidad = document.getElementById('utilidad_input');
let iva = document.getElementById('iva_input');
let precioIva = document.getElementById('precioIva_input');
let precioBs1 = document.getElementById('precioBs1_input');
let precioBsIva1 = document.getElementById('precioBsIva1_input');
let tasaUSD = document.getElementById('tasaUSD_input');

precio1.addEventListener('input', () => {
    
    let valPromedio = Number(promedio.value);
    let valPrecioCompra = Number (precioCompra.value);
    let valPrecio1 = Number(precio1.value);
    let valTasaUSD = Number (tasaUSD.value);
    
   //Calcular Utilidad
    let precioUtilidad = ( (valPrecio1 - valPrecioCompra - (valPromedio - valPrecioCompra)) / valPrecio1) * 100;
    utilidad.value = precioUtilidad.toFixed(2); 

    //Precio mas Iva
    calcPrecioIva = (valPrecio1 * 0.16) + valPrecio1;
    precioIva.value = calcPrecioIva.toFixed(2);

   //Precio BS 1
    calcPrecioBs1 = (valPrecio1 * valTasaUSD);
    precioBs1.value = calcPrecioBs1.toFixed(2);

   //Precio BS 1 + IVA
    calcPrecioBS1Iva = (calcPrecioBs1 * 0.16) + calcPrecioBs1;
    precioBsIva1.value = calcPrecioBS1Iva.toFixed(2);
 });

 utilidad.addEventListener('input', () => {
    
    let valPrecio1 = Number(precio1.value);
    let valPromedio = Number(promedio.value);
    let valUtilidad = Number(utilidad.value);
    let valTasaUSD = Number (tasaUSD.value);
    //let valIva = Number(iva.value);
    
    //Calcular Utilidad en base al Precio:
    let utilidadBasePrecio = valPromedio / ((100- valUtilidad)/100);
    precio1.value = utilidadBasePrecio.toFixed(2);

    //Precio mas iva
    calcPrecio = (utilidadBasePrecio * 0.16) + utilidadBasePrecio;
    precioIva.value = calcPrecio.toFixed(2);

   //Precio BS 1
    calcPrecioBs1 = (valPrecio1 * valTasaUSD);
    precioBs1.value = calcPrecioBs1.toFixed(2);
    console.log(valPrecio1)
    console.log(valTasaUSD)

   //Precio BS 1 + IVA
    calcPrecioBS1Iva = (calcPrecioBs1 * 0.16) + calcPrecioBs1;
    precioBsIva1.value = calcPrecioBS1Iva.toFixed(2);
 });






