<?php
  include 'json.php';

  echo '<h1>' . $osnovne_zivotne_namirnice[0] . '</h1>';


for ($i = 1; $i < count($osnovne_zivotne_namirnice); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $osnovne_zivotne_namirnice[$i]['naziv_proizvoda'].'</h4><hr />';
    $output .= '<p>veleprodajna cena: ';
    $output .= $osnovne_zivotne_namirnice[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $osnovne_zivotne_namirnice[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>