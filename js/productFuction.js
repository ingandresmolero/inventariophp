//Editar Stock View

//Sumar campos Costo Promedio $, Utilidad %, Precio PVP:

let costoP = document.getElementById('costoP_input');
let util = document.getElementById('utilidad_input');
let precPvp = document.getElementById('precioPvp_input');
let precio1 = document.getElementById('precio1_input');
let cantidad = document.getElementById('cantidad_input');

let ingreso = document.getElementById('ingreso_input')
let montocompra = document.getElementById('costoPAnt_input');

function sumarInputs() {
    
    let costoPromedio = parseFloat(costoP.value);
    let utilidad = parseFloat(util.value);
    let pvp = parseFloat(precPvp.value);
    let cantidadstock = parseFloat(cantidad.value);
  
    let compracant = parseFloat(ingreso.value);
    let costocompra = parseFloat(montocompra.value);
  


      //ESTO ES PARA MOSTRAR EN COSTO PROMEDIO $


      let suma = ( (cantidadstock * costoPromedio) + (compracant * costocompra) ) / (cantidadstock + compracant) ;
      //let suma = valor1 + utilidad + pvp;
      precio1.value = suma;
      
    
  }
  
  costoP.addEventListener('input', sumarInputs);
  util.addEventListener('input', sumarInputs);
  precPvp.addEventListener('input', sumarInputs);