<?php

$users = [
  [
    "nama" => "Akmal Muhamad Firdaus",
    "nim" => "1301204188",
    "alamat" => "Jalan Melati No. 29, Bandung"
  ],
  [
    "nama" => "Bobi Setiawan",
    "nim" => "1301201231",
    "alamat" => "Jalan Cikutra, Bandung"
  ],
  [
    "nama" => "Ujang Firmansyah",
    "nim" => "1301204263",
    "alamat" => "Jalan Dago, Bandung"
  ]
];
header('Content-Type: application/json');
echo json_encode($users);