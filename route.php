<?php
namespace WebServer;

/**
 *
 */
class Route
{
  private static $getRoutes=[],$postRoutes=[];

  $url;
  $controller;
  $function;

  function __construct($url,$controllerAndFunction)
  {
    $this->url = $url;
    list($controller,$function) = split($controllerAndFunction);
    $this->function = $function;
    $this->controller = $controller;
  }

  public function Acess()
  {
    $object = new $controller();
    $object->$function();
  }

  public static function get($url,$function)
  {
    array_push($getRoutes,new Route($url,$function));
  }

}

 ?>
