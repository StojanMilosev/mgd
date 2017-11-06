<?php
	include 'json.php';

	echo '<h1>' . $testenine[0] . '</h1>';

	echo '<h3>' . $renesansa[0] . '</h3>';
for ($i = 1; $i < count($danubis); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $renesansa[$i]['naziv_proizvoda'].'</h4>';
    $output .= '<p>veleprodajna cena: ';
    $output .= $renesansa[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $renesansa[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>