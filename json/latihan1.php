<?php
// $mahasiswa = [
// 	"nama" => "Marlina Puspita Dewi",
// 	"nrp" => "173040073",
// 	"email" => "Marlina_173040073@mail.unpas.ac.id"
// ];

$dbh = new PDO('mysql:host=localhost;dbname=wpu_gue', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($mahasiswa);
echo $data;