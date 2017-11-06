<?php
	include 'json.php';

	echo '<h1>' . $kese[0] . '</h1>';

	echo '<h3>' . $dzakovi_za_smece[0] . '</h3>';
for ($i = 1; $i < count($dzakovi_za_smece); $i++) {
    $output = '<div class="col-md-6"><div class="panel panel-default">';
    $output .= '<div class="panel-heading"><h4>'.$dzakovi_za_smece[$i]['naziv_proizvoda'].'</h4></div>';
    $output .= '<div class="panel-body">';
    $output .= '<img alt="image" class="item-image">';
	$output .= '<div class="item-data">';
	$output .= '<p>veleprodajna cena:</p>';
    $output .= '<h4>'.$dzakovi_za_smece[$i]['VP_cena'].'</h4>';
	$output .= '<p>trans.pakovanje:</p>';
    $output .= '<h4>'.$dzakovi_za_smece[$i]['transportno_pakovanje'].'</h4>';
	$output .= '</div>';
    $output .='</div></div></div>';

    echo $output;
}
?>