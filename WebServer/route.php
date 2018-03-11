<?php
namespace WebServer;

/**
 *
 */
class Route
{
  private static $getRoutes=[],$postRoutes=[];

  public $url;
  public $controller;
  public $function;

  function __construct($url,$controllerAndFunction)
  {
    $this->url = $url;
    $pieces = explode('@',$controllerAndFunction);
    $this->function = $pieces[1];
    $this->controller = $pieces[0];
  }

  public function Acess()
  {
    $class= "Controllers\\".$this->controller;
    $object = new $class();
    $function = $this->function;
    $object->$function();
  }

  public static function get($url,$function)
  {
    $route = new Route($url,$function);
    array_push(Route::$getRoutes,$route);
  }

  public static function CheckUri($uri)
  {
    for ($i=0; $i < count(Route::$getRoutes); $i++) {
      if($uri==Route::$getRoutes[$i]->url){
        return Route::$getRoutes[$i];
      }
    }

    return null;
  }

}

 ?>
