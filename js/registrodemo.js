$("#formulario").submit(function(event){
    event.preventDefault(); //almacena sin refrescar el sitio web
    enviar();
});
function enviar(){
  // console.log('ejecutado');

var datos = $("#formulario").serialize(); //Esta función toma los datos "name" y los lleva a un arreglo.
   $.ajax({
       type: "post",
       url:"registrodemo.php",
       data: datos,
       success: function(texto){
           if(texto=="exito"){
           correcto();
        }else{
           phperror(texto);
       }
       }

   })
}
function correcto(){
    $("#mensajeExito").removeClass("d-none");
    $("#mensajeError").addclass("d-none");
}
function phperror(texto){
    $("#mensajeError").removeClass("d-none");
    $("#mensajeError").html(texto);
}