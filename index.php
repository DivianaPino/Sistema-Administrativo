<?php

//*=============================================
//*Mostrar errores
//*=============================================*

ini_set('display_errors', 1); // coloca 0 si no deseas que aparezcan los errores tambiÃ©n en el navegador
ini_set("log_errors", 1); // con esta lÃ­nea estamos diciendo que queremos crear un nuevo archivo de errores
ini_set('error_log', 'C:/wamp/www/cursos/sistema-php/admin/php_error_log'); // con esta lÃ­nea le decimos a PHP donde queremos que se guarde ese archivo, lo recomendado es que sea al lado del archivo index.php

//*=============================================
//* CORS
//*=============================================*

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

//*=============================================
//* Requerimientos
//*=============================================*
require_once "controllers/template.controller.php";

$index = new TemplateController();
$index -> index();