<?php
  include 'json.php';

  echo '<h1>' . $kondiktorski_program[0] . '</h1>';

  echo'<h3>'.$aleksandrija[0].'</h3>';

for ($i = 1; $i < count($aleksandrija); $i++) {
    $output = '<div class="col-md-6"><div class="panel panel-default">';
    $output .= '<div class="panel-heading"><h4>'.$aleksandrija[$i]['naziv_proizvoda'].'</h4></div>';
    $output .= '<div class="panel-body">';
    $output .= '<img alt="image" class="item-image">';
	$output .= '<div class="item-data">';
	$output .= '<p>veleprodajna cena:</p>';
    $output .= '<h4>'.$aleksandrija[$i]['VP_cena'].'</h4>';
	$output .= '<p>trans.pakovanje:</p>';
    $output .= '<h4>'.$aleksandrija[$i]['transportno_pakovanje'].'</h4>';
	$output .= '</div>';
    $output .='</div></div></div>';

    echo $output;
}
?>