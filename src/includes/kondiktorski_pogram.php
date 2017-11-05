<?php
  include 'json.php';

  echo '<h1>' . $kondiktorski_program[0] . '</h1>';

  echo'<h3>'.$katarina_mladenovac[0].'</h3>';

for ($i = 1; $i < count($katarina_mladenovac); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $katarina_mladenovac[$i]['naziv_proizvoda'].'</h4>';
    $output .= '<p>veleprodajna cena: ';
    $output .= $katarina_mladenovac[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $katarina_mladenovac[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>