<?php
	include 'json.php';

	echo '<h1>' . $testenine[0] . '</h1>';

	echo '<h3>' . $sentela[0] . '</h3>';
for ($i = 1; $i < count($sentela); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $sentela[$i]['naziv_proizvoda'].'</h4>';
    $output .= '<p>veleprodajna cena: ';
    $output .= $sentela[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $sentela[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>