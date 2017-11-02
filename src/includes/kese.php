<?php
	include 'json.php';

	echo '<h1>' . $kese[0] . '</h1>';

	echo '<h3>' . $kese_tregerice[0] . '</h3>';
for ($i = 1; $i < count($sentela); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $kese_tregerice[$i]['naziv_proizvoda'].'</h4>';
    $output .= '<p>veleprodajna cena: ';
    $output .= $kese_tregerice[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $kese_tregerice[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>