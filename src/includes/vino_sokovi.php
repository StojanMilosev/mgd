<?php
  include 'json.php';

  echo '<h1>' . $vino_sokovi[0] . '</h1>';


for ($i = 1; $i < count($vino_sokovi); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $vino_sokovi[$i]['naziv_proizvoda'].'</h4>';
    $output .= '<p>veleprodajna cena: ';
    $output .= $vino_sokovi[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $vino_sokovi[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>