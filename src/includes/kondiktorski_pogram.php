<?php
  include 'json.php';

  echo '<h1>' . $mesne_preradjevine[0] . '</h1>';


for ($i = 1; $i < count($mesne_preradjevine); $i++) {
    $output = '<div class="item">';
    $output .= '<h4>';
    $output .= $mesne_preradjevine[$i]['naziv_proizvoda'].'</h4>';
    $output .= '<p>veleprodajna cena: ';
    $output .= $katarina_mladenovac[$i]['VP_cena'].'</p>';
	$output .= '<p>trans.pakovanje: ';
    $output .= $mesne_preradjevine[$i]['transportno_pakovanje'].'</p>';
    $output .='</div>';

    echo $output;
}
?>