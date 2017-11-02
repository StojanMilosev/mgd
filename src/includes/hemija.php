<?php
	include 'json.php';

	echo '<h1>' . $hemija[0] . '</h1>';

	echo '<h3>' . $fresh[0] . '</h3>';
for ($i = 1; $i < count($fresh); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $fresh[$i]['naziv_proizvoda'].'</h4>';
    $output .= '<p>veleprodajna cena: ';
    $output .= $fresh[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $fresh[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>