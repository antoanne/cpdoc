<?php

function template_width($left, $right) {
  $width = 580;
  if (!$left ) {
    $width = $width +200;
  }  
  if (!$right) {
    $width = $width +190;
  }
  return $width;
}

?>