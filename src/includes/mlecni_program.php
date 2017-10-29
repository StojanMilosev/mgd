<?php
  include 'json.php';
  echo '<h1>' . $mlecni_program[0] . '</h1>';
for ($i = 1; $i < count($mlecni_program); $i++) {
    $output = '<div>';
    $output .= '<p>naziv: ';
    $output .= $mlecni_program[$i]['naziv_proizvoda'].'</p>';
    $output .= '<p>Cena: ';
    $output .= $mlecni_program[$i]['VP_cena'].'</p>';
    $output .='</div>';

    echo $output;
}
?>