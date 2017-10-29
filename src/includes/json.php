<?php

$str = file_get_contents('includes/data.json');
$json = json_decode($str, true);

$mesne_preradjevine = $json['mesne_preradjevine'];
$mlecni_program = $json['mlecni_program'];
$kondiktorski_program = $json['kondiktorski_program'];



?>