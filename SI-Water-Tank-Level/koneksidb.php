<?php

$server       = "localhost";
$user         = "root";
$password     = "";
$database     = "tangkiair"; //Nama Database di phpMyAdmin

$koneksi = new mysqli($server, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}