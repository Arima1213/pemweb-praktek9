<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tugas8");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


$nama = $_POST['nama'];
$jkelamin = $_POST['jkelamin'];
$NISN = $_POST['NISN'];
$NIK = $_POST['NIK'];
$TempatLahir = $_POST['TempatLahir'];
$TanggalLahir = $_POST['TanggalLahir'];
$Agama = $_POST['Agama'];
$BerkebutuhanKhusus = $_POST['BerkebutuhanKhusus'];
$AlamatJalan = $_POST['AlamatJalan'];
$RT = $_POST['RT'];
$RW = $_POST['RW'];
$Dusun = $_POST['Dusun'];
$Desa = $_POST['Desa'];
$Kecamatan = $_POST['Kecamatan'];
$KodePos = $_POST['KodePos'];
$TempatTinggal = $_POST['TempatTinggal'];
$Transportasi = $_POST['Transportasi'];
$NoHP = $_POST['NoHP'];
$NoTelepon = $_POST['NoTelepon'];
$Email = $_POST['Email'];
$KIP = $_POST['KIP'];
$NoKIP = $_POST['NoKIP'];
$Kewarganegaraan = $_POST['Kewarganegaraan'];

$TanggalLahir = date("Y-m-d", strtotime(str_replace("/", "-", $TanggalLahir)));
      

$sqlDatadiri = "INSERT INTO tugas8.datapribadi
                (Nama, JenisKelamin, NISN, NIK, TempatLahir, TanggalLahir, Agama, BerkebutuhanKhusus, AlamatJalan, RT, RW, Dusun, Desa, Kecamatan, KodePos, TempatTinggal, Transportasi, NomorHp, NoTelepon, EmailPribadi, PenerimaKIP, NoKIP, Kewarganegaraan)
                VALUES('$nama', '$jkelamin', '$NISN', '$NIK', '$TempatLahir', '$TanggalLahir', '$Agama', '$BerkebutuhanKhusus',
                 '$AlamatJalan', '$RT', '$RW', '$Dusun', '$Desa', '$Kecamatan', '$KodePos', '$TempatTinggal', '$Transportasi', '$NoHP', '$NoTelepon', '$Email', '$KIP', '$NoKIP', '$Kewarganegaraan');
                ";

if (mysqli_query($conn, $sqlDatadiri) ) {
    header("Location: reportDataExcel2.php");
    exit;
} else {
    echo "Error: " . $sqlIbu . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>
