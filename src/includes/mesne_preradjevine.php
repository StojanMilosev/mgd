<?php
  include 'json.php';

  echo '<h1>' . $mesne_preradjevine[0] . '</h1>';


for ($i = 1; $i < count($mesne_preradjevine); $i++) {
    $output = '<div>';
    $output .= '<p>naziv: ';
    $output .= $mesne_preradjevine[$i]['naziv_proizvoda'].'</p>';
    $output .= '<p>Cena: ';
    $output .= $mesne_preradjevine[$i]['VP_cena'].'</p>';
    $output .='</div>';

    echo $output;
}
?>