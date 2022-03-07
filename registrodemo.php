<?php
//echo "exito";

$error = "";

//ESTO ES PARA VALIDAR NOMBRE
if(empty($_POST["nombre"])){
    $error ='Ingresa un nombre </br>';
}else{
    $nombre = $_POST["nombre"];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
}

//ESTO ES PARA VALIDAR APELLIDO
if(empty($_POST["apellido"])){
    $error ='Ingresa su apellido </br>';
}else{
    $apellido = $_POST["apellido"];
    $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
}
//ESTO ES PARA VALIDAR EMPRESA
if(empty($_POST["empresa"])){
    $error ='Ingresa el nombre de la empresa </br>';
}else{
    $empresa = $_POST["empresa"];
    $empresa = filter_var($empresa, FILTER_SANITIZE_STRING);
}

//ESTO ES PARA VALIDAR cARGO
if(empty($_POST["cargo"])){
    $error ='Ingresa un cargo </br>';
}else{
    $cargo = $_POST["empresa"];
    $cargo = filter_var($cargo, FILTER_SANITIZE_STRING);
}

//ESTO ES PARA VALIDAR TELEFONO 
if(empty($_POST["telefono"])){
    $error ='Ingresa un telefono </br>';
}else{
    $telefono = $_POST["empresa"];
    $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
}
//ESTO ES PARA VALIDAR EMAIL
if(empty($_POST["email"])){
    $error .= 'Ingresa un E-mail </br>';
}else{
    $email = $_POST["email"];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error .= 'Ingresa un E-mail Verdadero';
   }
//ESTO ES PARA VALIDAR MENSAJE
if(empty($_POST["mensaje"])){
    $error .= 'Ingresa un mensaje </br>';
}else{
    $mensaje = $_POST["mensaje"];
    $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
}

//CUERPO DEL MENSAJE

$cuerpo = 'Nombre: '.$nombre.'\n';
$cuerpo.= 'Nombre: '.$apellido.'\n';
$cuerpo.= 'Empresa: '.$empresa.'\n';
$cuerpo.= 'Cargo: '.$cargo.'\n';
$cuerpo.= 'Telefono: '.$telefono.'\n';
$cuerpo.= 'E-mail: '.$email.'\n';
$cuerpo.= 'Mensaje: '.$mensaje.'\n';

//Direccion
$enviarA = 'cvidal@reinventa.cl';
$asunto = 'Nuevo mensaje de mi sitio web';

//ENVIAR CORREO
if($error == ''){
$success = mail($enviarA,$asunto,$cuerpo,'de: '.$email);
echo 'exito';
}else{
    echo $error;
} 


?>