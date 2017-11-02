<?php

$str = file_get_contents('includes/data.json');
$json = json_decode($str, true);

$mesne_preradjevine = $json['mesne_preradjevine'];
$mlecni_program = $json['mlecni_program'];
//kondiktorski_program
$kondiktorski_program = $json['kondiktorski_program'];
$katarina_mladenovac = $kondiktorski_program[1]['katarina_mladenovac'];
//testenine
$testenine = $json['testenine'];
$sentela = $testenine[1]['sentela'];
//pakeraj
$pakeraj = $json['pakeraj'];
$koktel_sivac = $pakeraj[1]['koktel_sivac'];
//osnovne zivotne namirnice
$osnovne_zivotne_namirnice = $json['osnovne_zivotne_namirnice'];
//papirna konfekcija
$papirna_konfekcija = $json['papirna_konfekcija'];
//hemija
$hemija = $json['hemija_tekstil'];
$fresh = $hemija[1]['fresh'];
//kese dzakovi za smece
$kese = $json['kese'];
$kese_tregerice = $kese[1]['kese_tregerice'];
//vino sokovi
$vino_sokovi = $json['vino_sokovi'];
//pasulji
$pasulji = $json['pasulji'];
?>