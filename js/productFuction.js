//Editar Stock View

//Sumar campos Costo Promedio $, Utilidad %, Precio PVP:

let costoP = document.getElementById('costoP_input');
let util = document.getElementById('utilidad_input');
let precPvp = document.getElementById('precioPvp_input');
let precio1 = document.getElementById('precio1_input');

function sumarInputs() {
    
    let valor1 = parseFloat(costoP.value);
    let valor2 = parseFloat(util.value);
    let valor3 = parseFloat(precPvp.value);
  
    if (!isNaN(valor1) && !isNaN(valor2) && !isNaN(valor3)) {
      let suma = valor1 + valor2 + valor3;
      precio1.value = suma;
    }
  }
  
  costoP.addEventListener('input', sumarInputs);
  util.addEventListener('input', sumarInputs);
  precPvp.addEventListener('input', sumarInputs);