<?php
$mahasiswa = [
    [
    "nama" => "Muhammad Haqi Tawakal",
    "nrp" => "202351068",
    "email" => "muhammad@gmail.com",
    "jurusan"=> "Teknik Informatika"
    ],
    [
    "nama" => "Shirley Ennis Lim",
    "nrp" => "202311059",
    "email" => "shirley@gmail.com",
    "jurusan"=> "Manajemen"
    ],
    [
    "nama" => "Michelle Nataputra",
    "nrp" => "202312103",
    "email" => "michelle@gmail.com",
    "jurusan"=> "Akutansi"
    ],
    [
    "nama" => "Livia Priscilla",
    "nrp" => "202312152",
    "email" => "livia@gmail.com",
    "jurusan"=> "Akuntasi"
    ],
    [
    "nama" => "Francisco Rivera",
    "nrp" => "202332078",
    "email" => "francisco@gmail.com",
    "jurusan"=> "Pend. Bahasa Inggris"
    ],
    [
    "nama" => "Jacob Malher",
    "nrp" => "202320001",
    "email" => "jacob@gmail.com",
    "jurusan"=> "Ilmu Hukum"
    ],
    [
    "nama" => "Candis Joanette Kuswandi",
    "nrp" => "202360054",
    "email" => "candis@gmail.com",
    "jurusan"=> "Psikologi"
    ],
    [
    "nama" => "John Stones",
    "nrp" => "202354050",
    "email" => "john@gmail.com",
    "jurusan"=> "Teknik Industri"
    ],
    [
    "nama" => "Revina Alexander",
    "nrp" => "202331030",
    "email" => "revina@gmail.com",
    "jurusan"=> "Bimbingan & Konseling"
    ],
    [
    "nama" => "Remier Akbar",
    "nrp" => "202341042",
    "email" => "remier@gmail.com",
    "jurusan"=> "Agroteknologi"
    ]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>

</html>