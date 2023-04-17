<?php
function cari($array, $cari):bool {
    foreach($array as $prodi){
        if($cari == $prodi){
            return true;
        }
    }
    return false;
}

$cari = 'Pendidikan Teknologi Informasi';
$array = [
    'Teknik Informatika', 'Teknik Komputer',
    'Sistem Informasi', 'Teknologi Informasi', 
    'Pendidikan Teknologi Informasi'
];

echo 'Apakah Prodi '.$cari.' terdapat dalam Array?</br>';

if(cari($array, $cari) == true){
    echo $cari.' terdapat dalam Array';
} else {
    echo $cari.' tidak terdapat dalam Array';
} 
?>
