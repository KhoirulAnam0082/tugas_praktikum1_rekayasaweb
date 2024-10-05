<?php
// JSON yang sudah di-encode
$json_data = '{"nama":"Khoirul Anam","umur":20,"status":"Mahasiswa"}';

// Decode JSON ke PHP Object
$obj = json_decode($json_data);

// Akses nilai dari PHP Object
echo "Nama: " . $obj->nama . "\n";  
echo "Umur: " . $obj->umur . "\n"; 
echo "Status: " . $obj->status . "\n"; 

// Decode JSON ke PHP Array
$array = json_decode($json_data, true);

// Akses nilai dari PHP Array
echo "Nama: " . $array['nama'] . "\n"; 
echo "Umur: " . $array['umur'] . "\n"; 
echo "Status: " . $array['status'] . "\n"; 

?>
