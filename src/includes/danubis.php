<?php
	include 'json.php';

	echo '<h1>' . $testenine[0] . '</h1>';

	echo '<h3>' . $danubis[0] . '</h3>';
for ($i = 1; $i < count($danubis); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $danubis[$i]['naziv_proizvoda'].'</h4>';
    $output .= '<p>veleprodajna cena: ';
    $output .= $danubis[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $danubis[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>