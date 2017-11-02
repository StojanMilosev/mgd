<?php
  include 'json.php';

  echo '<h1>' . $pasulji[0] . '</h1>';


for ($i = 1; $i < count($pasulji); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $pasulji[$i]['naziv_proizvoda'].'</h4>';
    $output .= '<p>veleprodajna cena: ';
    $output .= $pasulji[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $pasulji[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>