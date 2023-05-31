//------------------------------------------
            //Editar Stock View
//------------------------------------------


//Formula para calcular el costo promedio.

let costoP = document.getElementById('costoP_input');
let cantidad = document.getElementById('cantidad_input');
let ingreso = document.getElementById('ingreso_input')
let montocompra = document.getElementById('costoPAnt_input');
let precPvp = document.getElementById('precioPvp_input'); 

function costoPromedio() {

    let costoPromedio = Number(costoP.value);
    let cantidadStock = Number(cantidad.value);
    let ingresos = Number(ingreso.value);
    let montCompra = Number(montocompra.value);

    let costoProm = ( (cantidadStock * costoPromedio) + (ingresos * montCompra) ) / (cantidadStock + ingresos) ;
    precPvp.value = costoProm;
  }
  
  costoP.addEventListener('input', costoPromedio);
  cantidad.addEventListener('input', costoPromedio);
  ingreso.addEventListener('input', costoPromedio);
  montocompra.addEventListener('input', costoPromedio);

//---------------------------------------------- End





//Formula 2:




// Formula 3: