<?php

// petite fonction d'affichage
// qui nous permettra de regarder à l'intérieur des
// objet que nous créerons.
function show($variable, string $name = ''): void
{
  $html = '<pre>';
  if(is_object($variable)){
    if($name !== ''){
      $html .= 'Objet observée: <strong>$'.$name.'</strong><br>';
    }
    $html .= 'Objet de classe: <strong>'. get_class($variable).'</strong><br>';
    $html .= '<strong>Propriétés:</strong><br>';
    $html .= print_r(get_object_vars($variable), true);
    $html .= '<strong>Methodes:</strong><br>';
    $html .= print_r(get_class_methods($variable), true);
    $html .= '<br>';
    $html .= 'Debug:<br>';
    $html .= print_r($variable, true);
  } else {
    if($name !== ''){
      $html .= 'Variable observée: <strong>$'.$name.'</strong><br>';
    }
    $html .= print_r($variable, true);
  }
  $html .= '</pre><br><br>';
  echo $html;
}
