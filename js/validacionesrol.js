$(document).ready(function(){

    //Agregar Cliente
    var rol = $("#rol");
    // Lista Clientes
    var configuracion = $("#configuracion");
    //Prefacturas
    var prefacturas = $("#prefactura");
    //Servicios
    var servicios = $("#servicios");
    //Paginas
    var paginas = $("#paginas");
    // //Citas
    var citas = $("#citas");
    // //Reporte
    var reporte = $("#reportes");
    // //Busqueda
    var busqueda = $("#busqueda");
    // //Agregar Usuario
    var add_user = $("#add_user");
    //Agregar Barbero
    var add_barber = $("#add_barber");

    // let n = $('.user-name #rol').text();

   if ($('.user-name #rol').text()=="master") {
        
   } else {
    configuracion.addClass(' hidden');
    
  
   }
   
  });