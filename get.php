<?php
header('Content-Type: application/json');
$plan = array(
    'ponedeljak' => array(
      'grudi' => 'bench press',
      'ledja' => 'veslanje',
      'noge' => 'cucanj'
            ),
    'utorak' => array(
      'grudi' => 'propadanje',
      'ledja' => 'zgibovi',
      'noge' => 'mrtvo dizanje'
            ),
    'sreda' => array(
      'grudi' => 'kosi bench press',
      'ledja' => 'veslanje',
      'noge' => 'prednji cucanj'
            ),
);
echo json_encode($plan);
?>