<?php
spl_autoload_extensions(".php");
spl_autoload_register();

use WebServer\Route;

include 'WebServer\webroutes.php';

$uri = Route::CheckUri($_SERVER["REQUEST_URI"]);
if ($uri!=null) {
    $uri->Acess();
} else {
  http_response_code(404);
  include('404.php');
}
