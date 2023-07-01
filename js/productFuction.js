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

precio1.addEventListener('input', () => {
    
    let valPromedio = Number(promedio.value);
    let valPrecioCompra = Number (precioCompra.value);
    let valPrecio1 = Number(precio1.value);
    let precioUtilidad = ( (valPrecio1 - valPrecioCompra - (valPromedio - valPrecioCompra)) / valPrecio1) * 100;
    
    utilidad.value = precioUtilidad.toFixed(2); 
    
 });

 utilidad.addEventListener('input', () => {
    
    let valPrecio1 = Number(precio1.value);
    let valPromedio = Number(promedio.value);
    let valUtilidad = Number(utilidad.value);
    let valIva = Number(iva.value);
    
    let utilidadBasePrecio = valPromedio / ((100- valUtilidad)/100);
    precio1.value = utilidadBasePrecio.toFixed(2);
    //Mas iva
    precioFinal = valPrecio1 * (valIva*100);
    precioIva.value = precioFinal.toFixed(2);

 });



//si cambio actual cambia el promedio,
//si cambio precio1 cambia la utilidad ---listo
//si cambio la utilidad cambia el precio1 y el iva



//VALORES A LO LOCO
 // EXISTENCIA ANTERIOR = 0
 // Costo Promedio = 0
 //Cantidad de compra = 25
 // Costo Compra = 30
// costo promedio = 20
// Utilidad = 10





