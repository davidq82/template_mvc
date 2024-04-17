<?php

require_once "Core/Controllers/TemplateController.php";


require_once __DIR__ . './vendor/autoload.php';  // Asegúrate de que la ruta apunte al archivo autoload.php de Composer
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/'); // Apunta al directorio raíz del proyecto
$dotenv->load();


$template = new ControllerTemplate();
$template->ctrTemplate();
