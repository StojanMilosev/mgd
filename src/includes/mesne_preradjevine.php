<?php
  include 'json.php';

  echo '<h1>' . $mesne_preradjevine[0] . '</h1>';


for ($i = 1; $i < count($mesne_preradjevine); $i++) {
    $output = '<div class="col-md-6"><div class="panel panel-default">';
    $output .= '<div class="panel-heading"><h4>';
    $output .= $mesne_preradjevine[$i]['naziv_proizvoda'].'</h4></div>';
    $output .= '<div class="panel-body">';
    $output .= '<img alt="image" class="item-image"><div class="item-data"><p>veleprodajna cena:</p><h4>';
    $output .= $mesne_preradjevine[$i]['VP_cena'].'</h4>';
	$output .= '<p>trans.pakovanje:</p><p>';
    $output .= $mesne_preradjevine[$i]['transportno_pakovanje'].'</p></div>';
    $output .='</div></div></div>';

    echo $output;
}
?>