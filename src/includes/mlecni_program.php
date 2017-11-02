<?php
  include 'json.php';

  echo '<h1>' . $mlecni_program[0] . '</h1>';


for ($i = 1; $i < count($mlecni_program); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $mlecni_program[$i]['naziv_proizvoda'].'</h4>';
    $output .= '<p>veleprodajna cena: ';
    $output .= $mlecni_program[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $mlecni_program[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>