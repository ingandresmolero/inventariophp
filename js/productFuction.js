//------------------------------------------
            //Editar Stock View
//------------------------------------------

//Formula para calcular el costo promedio.

let costoP = document.getElementById('costoP_input');//Costo Promedio $:
let cantidad = document.getElementById('cantidad_input'); //existencia
let ingreso = document.getElementById('ingreso_input'); //Existencia Compra:
let montocompra = document.getElementById('costoPAnt_input'); //Costo Promedio Anterior $:
let precPvp = document.getElementById('precioPvp_input');  //pvp

let precio2 = document.getElementById('precio2_input');
let precio3 = document.getElementById('precio3_input');

function costoPromedio() {

    let costoPromedio = Number(costoP.value);
    let cantidadStock = Number(cantidad.value);
    let ingresos = Number(ingreso.value);
    let montCompra = Number(montocompra.value);
    
    //Calculo de Costo Promedio
    let costoProm = ( (cantidadStock * costoPromedio) + (ingresos * montCompra) ) / (cantidadStock + ingresos) ;
    precPvp.value = costoProm;

    //Calculo de Utilidad en base al Precio
    let utilidadCal = 100 - ((costoPromedio * 100) / precPvp.value);
    precio2.value=utilidadCal;

    //calculo de precio en base a la utilidad
    let precioutilidad = costoPromedio / ((100-(utilidadCal/100)));
    precio3.value = precioutilidad;
  }
  
  costoP.addEventListener('input', costoPromedio);
  cantidad.addEventListener('input', costoPromedio);
  ingreso.addEventListener('input', costoPromedio);
  montocompra.addEventListener('input', costoPromedio);
  precPvp.addEventListener('input', costoPromedio);
//---------------------------------------------- End
