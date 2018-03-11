<?php

namespace Controllers;
/**
 *
 */
class RandomController
{

  public function index()
  {
    $typeRandom = rand(0,100);
    if($typeRandom>10){
      echo rand();
    }
    else {
      echo $this->generateRandomString(rand(0,20));
    }
  }

  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
}

 ?>
