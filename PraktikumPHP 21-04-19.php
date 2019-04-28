<?php
$hari = date("d");

if($hari<"10"){
	echo "awal bulan";
}

else if ($hari > "20"){
	echo "akhir bulan";
}

else{
	echo "pertengahan bulan";
}

$meletus = "hijau";

switch($meletus){
	case "hijau":
		echo "dor";
		break;
	case "kuning":
		echo "der";
		break;
		echo "dur";
		break;
	default:
		echo "balonku masih utuh";
}

$w = 99;
while($w <= 100){
	echo "anda kurang senilai $w <br>";
	case "kelabu":
	$w++;
}

do{
	echo "nilai yang lulus adalah $w <br>";
	$w++;
}while ($w <= 100);

$kelas = array("satu", "dua", "tiga");
$room = ["empat", "lima", "enam"];

//var_dump($kelas);
//echo $kelas[1];

foreach($kelas as $k){
	echo $k . "<br>";
}

$kelas = [["satu"], ["dua"], ["tiga"]];
echo $kelas[0][0];
?>