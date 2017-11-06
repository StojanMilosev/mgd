<?php

$str = file_get_contents('includes/data.json');
$json = json_decode($str, true);

$mesne_preradjevine = $json['mesne_preradjevine'];
$mlecni_program = $json['mlecni_program'];
//kondiktorski_program
$kondiktorski_program = $json['kondiktorski_program'];
$katarina_mladenovac = $kondiktorski_program[1]['katarina_mladenovac'];
$aleksandrija = $kondiktorski_program[1]['aleksandrija'];
$zeneva_lesnica = $kondiktorski_program[1]['zeneva_lesnica'];
//testenine
$testenine = $json['testenine'];
$sentela = $testenine[1]['sentela'];
$danubis  = $testenine[1]['danubis'];
$renesansa  = $testenine[1]['renesansa'];
//pakeraj
$pakeraj = $json['pakeraj'];
$koktel_sivac = $pakeraj[1]['koktel_sivac'];
$koktel_sivac = $pakeraj[1]['ares'];
//osnovne zivotne namirnice
$osnovne_zivotne_namirnice = $json['osnovne_zivotne_namirnice'];
//papirna konfekcija
$papirna_konfekcija = $json['papirna_konfekcija'];
//hemija
$hemija = $json['hemija_tekstil'];
$fresh = $hemija[1]['fresh'];
$tisa_becej = $hemija[1]['tisa_becej'];
$tekstil = $hemija[1]['tekstil'];
//kese dzakovi za smece
$kese = $json['kese'];
$kese_tregerice = $kese[1]['kese_tregerice'];
$kese_za_zamrzivac = $kese[2]['kese_za_zamrzivac'];
$dzakovi_za_smece = $kese[3]['dzakovi_za_smece'];
//vino sokovi
$vino_sokovi = $json['vino_sokovi'];
//pasulji
$pasulji = $json['pasulji'];
?>