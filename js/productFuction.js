//------------------------------------------
            //Editar Stock View
//------------------------------------------


//Formula para calcular el costo promedio.

let costoP = document.getElementById('costoP_input');
let cantidad = document.getElementById('cantidad_input');
let ingreso = document.getElementById('ingreso_input')
let montocompra = document.getElementById('costoPAnt_input');
let precPvp = document.getElementById('precioPvp_input'); 
let utilidad = document.getElementById('utilidad_input');
let precio1 = document.getElementById('precio1_input');
let precio2 = document.getElementById('precio2_input');
let precio3 = document.getElementById('precio3_input');

function costoPromedio() {

    let costoPromedio = Number(costoP.value);
    let cantidadStock = Number(cantidad.value);
    let ingresos = Number(ingreso.value);
    let montCompra = Number(montocompra.value);
    // let precio1 = Number(precio1_input.value);
    let preciopvp = Number(precioPvp_input.value);
    let precio2 = Number(precio2_input.value);
    let precio3 = Number(precio3_input.value);
    let utilidad = Number(utilidad.value);

    //Calculo de Costo Promedio
    let costoProm = ( (cantidadStock * costoPromedio) + (ingresos * montCompra) ) / (cantidadStock + ingresos) ;
    precPvp.value = costoProm;


    //Calculo de Utilidad en base al Precio
    let utilidadCal = 100 - ((costoPromedio * 100) / precio3);
    precio2.value=utilidadCal; //esto lo puedes mostrar en precio 2

    //calculo de precio en base a la utilidad
    let precioutilidad = (costoPromedio / ((100- utilidad) / 100)) + costoPromedio;
    preciopvp.value = precioutilidad;
  }
  
  costoP.addEventListener('input', costoPromedio);
  cantidad.addEventListener('input', costoPromedio);
  ingreso.addEventListener('input', costoPromedio);
  montocompra.addEventListener('input', costoPromedio);

//---------------------------------------------- End





//Formula 2:




// Formula 3: