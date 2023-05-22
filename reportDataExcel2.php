<?php

$conn = mysqli_connect("localhost", "root", "", "tugas8");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('b1', 'Nama');
$sheet->setCellValue('c1', 'JenisKelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('e1', 'NIK');
$sheet->setCellValue('f1', 'TempatLahir');
$sheet->setCellValue('g1', 'TanggalLahir');
$sheet->setCellValue('h1', 'Agama');
$sheet->setCellValue('i1', 'BerkebutuhanKhusus');
$sheet->setCellValue('j1', 'AlamatJalan');
$sheet->setCellValue('k1', 'RT');
$sheet->setCellValue('l1', 'RW');
$sheet->setCellValue('m1', 'Dusun');
$sheet->setCellValue('n1', 'Desa');
$sheet->setCellValue('o1', 'Kecamatan');
$sheet->setCellValue('p1', 'KodePos');
$sheet->setCellValue('q1', 'TempatTinggal');
$sheet->setCellValue('r1', 'Transportasi');
$sheet->setCellValue('s1', 'NomorHp');
$sheet->setCellValue('t1', 'NoTelepon');
$sheet->setCellValue('u1', 'EmailPribadi');
$sheet->setCellValue('v1', 'PenerimaKIP');
$sheet->setCellValue('w1', 'NoKIP');
$sheet->setCellValue('x1', 'Kewarganegaraan');

$query = mysqli_query($conn, "SELECT Nama, JenisKelamin, NISN, NIK, TempatLahir, TanggalLahir, Agama, BerkebutuhanKhusus, AlamatJalan, RT, RW, Dusun, Desa, Kecamatan, KodePos, TempatTinggal, Transportasi, NomorHp, NoTelepon, EmailPribadi, PenerimaKIP, NoKIP, Kewarganegaraan
FROM tugas8.datapribadi;");

$i = 2;
$no = 1;

while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['Nama']);
    $sheet->setCellValue('C'.$i, $row['JenisKelamin']);
    $sheet->setCellValue('D'.$i, $row['NISN']);
    $sheet->setCellValue('E'.$i, $row['NIK']);
    $sheet->setCellValue('F'.$i, $row['TempatLahir']);
    $sheet->setCellValue('G'.$i, $row['TanggalLahir']);
    $sheet->setCellValue('H'.$i, $row['Agama']);
    $sheet->setCellValue('I'.$i, $row['BerkebutuhanKhusus']);
    $sheet->setCellValue('J'.$i, $row['AlamatJalan']);
    $sheet->setCellValue('K'.$i, $row['RT']);
    $sheet->setCellValue('L'.$i, $row['RW']);
    $sheet->setCellValue('M'.$i, $row['Dusun']);
    $sheet->setCellValue('N'.$i, $row['Desa']);
    $sheet->setCellValue('O'.$i, $row['Kecamatan']);
    $sheet->setCellValue('P'.$i, $row['KodePos']);
    $sheet->setCellValue('Q'.$i, $row['TempatTinggal']);
    $sheet->setCellValue('R'.$i, $row['Transportasi']);
    $sheet->setCellValue('S'.$i, $row['NomorHp']);
    $sheet->setCellValue('T'.$i, $row['NoTelepon']);
    $sheet->setCellValue('U'.$i, $row['EmailPribadi']);
    $sheet->setCellValue('V'.$i, $row['PenerimaKIP']);
    $sheet->setCellValue('W'.$i, $row['NoKIP']);
    $sheet->setCellValue('X'.$i, $row['Kewarganegaraan']);
    $i++;
}
$styleArray = [
    'borders' => [
        'allBorders' => [
            'boderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pendaftaran.xlsx');

// Tampilkan pesan
echo "Data berhasil disimpan.";

// Redirect ke halaman login.php setelah beberapa detik
header("refresh:5; url=form.php");
exit();
?>