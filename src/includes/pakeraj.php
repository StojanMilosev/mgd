<?php
  include 'json.php';

  echo '<h1>' . $pakeraj[0] . '</h1>';
  
  echo '<h2>' . $koktel_sivac[0] . '</h2>';


for ($i = 1; $i < count($koktel_sivac); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $koktel_sivac[$i]['naziv_proizvoda'].'</h4><hr />';
    $output .= '<p>veleprodajna cena: ';
    $output .= $koktel_sivac[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $koktel_sivac[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>