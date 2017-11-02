<?php
  include 'json.php';

  echo '<h1>' . $papirna_konfekcija[0] . '</h1>';


for ($i = 1; $i < count($papirna_konfekcija); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $papirna_konfekcija[$i]['naziv_proizvoda'].'</h4><hr />';
    $output .= '<p>veleprodajna cena: ';
    $output .= $papirna_konfekcija[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $papirna_konfekcija[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>