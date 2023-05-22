
<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$fileName = 'DataPesertadidik.xlsx';

if (!file_exists($fileName)) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'DataPesertadidik !');

    $writer = new Xlsx($spreadsheet);
    $writer->save($fileName);

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="lampiran container" style="max-width: 800px;" id="lampiran">
      <h1 class="text-center">FORMULIR PESERTA DIDIK</h1>
      <div class="header">
        <div class="row">
          <p>Tanggal :<?php echo date('d F Y'); ?></p>
        </div>
      </div>
      <form method="post" action="simpan.php" class="needs-validation" >
        <div class="form2" id="form2">
          <div class="mb-3">
            <p class="bg-dark text-white">DATA PRIBADI</p>
          </div>
          <div class="mb-3">
            <p>11 Nama Lengkap</p>
            <input name="nama" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>12 Jenis Kelamin</p>
            <input
              type="radio"
              class="btn-check"
              name="jkelamin"
              value="L"
              id="primary-outlined3"
              autocomplete="off"
              checked
            />
            <label class="btn btn-outline-primary" for="primary-outlined3">Laki-laki</label>

            <input
              type="radio"
              class="btn-check"
              name="jkelamin"
              value="P"
              id="primary-outlined33"
              autocomplete="off"
            />
            <label class="btn btn-outline-primary" for="primary-outlined33">Perempuan</label>
          </div>
          <div class="mb-3">
            <p>13 NISN</p>
            <input name="NISN" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>14 NIK</p>
            <input name="NIK" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>15 Tempat Lahir</p>
            <input name="TempatLahir" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>16 Tanggal Lahir</p>
            <div class="">
              <div class="input-group date" id="datepicker">
                <input name="TanggalLahir" type="text" class="form-control" id="date" />
                <div class="input-group-append">
                  <span class="input-group-text bg-light d-block">
                    <i class="fa fa-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <p>17 Agama</p>
            <input name="Agama" type="text" class="form-control" />
            <span id="passwordHelpInline" class="form-text"
              >01) Islam 02) Kristen/Protestan 03) Katholik 04) Hindu 05) Budha 06) Khong Hu Chu
              99) Lainnya</span
            >
          </div>
          <div class="mb-3">
            <p>18 Berkebutuhan khusus</p>
            <input name="BerkebutuhanKhusus" type="text" class="form-control" />
            <span id="passwordHelpInline" class="form-text"
              >01 Tidak 02 Netra (A) 03 Rungu (B) 04 Grahita ringan (C) 05 Grahita Sedang (C1) 06
              Daksa Ringan (D) 07 Daksa Sedang (D1) 08 Laras (E) 09 Wicara (F) 10 Tuna ganda (G) 11
              Hiper Aktif (H) 12 Cerdas Istimewa (i) 13 Bakat Istimewa (J) 14 Kesulitan Belajar (K)
              15 Narkoba (N) 16 Indigo (O) 17 Dwon Sindrome (P) 18 Autis (Q)</span
            >
          </div>
          <div class="mb-3">
            <p>19 Alamat Jalan</p>
            <input name="AlamatJalan" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>20 RT</p>
            <input name="RT" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>21 RW</p>
            <input name="RW" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>22 Nama Dusun</p>
            <input name="Dusun" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>23 Nama Kelurahan/Desa</p>
            <input name="Desa" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>24 Kecamatan</p>
            <input name="Kecamatan" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>25 Kode Pos</p>
            <input name="KodePos" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>26 Tempat Tinggal</p>
            <input name="TempatTinggal" type="text" class="form-control" />
            <p>1 bersama orang tua, 2 Wali, 3 Kos, 4 Asrama, 5 Panti Asuhan, 9 Lainnya</p>
          </div>
          <div class="mb-3">
            <p>27 Transportasi</p>
            <input name="Transportasi" type="text" class="form-control" />
            <span id="passwordHelpInline" class="form-text"
              >01) Jalan Kaki 02) Kendaraan Pribadi 03) Kendaraan Umum/Angkot/Pete-pete 04) Jemputan
              Sekolah 05) Kereta Api 06) Ojek 07)Andong/Bendi/Sado/Dokar/Delman/Becak 08) Perahu
              Penyebrangan/Rakit/Getek 99) Lainnya</span
            >
          </div>
          <div class="mb-3">
            <p>28 Nomor HP</p>
            <input name="NoHP" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>29 Nomor Telepon</p>
            <input name="NoTelepon" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>30 Email Pribadi</p>
            <input name="Email" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>31 Penerima KPS/KKS/PKH/KIP</p>
            <input
              type="radio"
              class="btn-check"
              name="KIP"
              value="Y"
              id="success-outlined4"
              autocomplete="off"
              checked
            />
            <label class="btn btn-outline-success" for="success-outlined4">Ya</label>

            <input
              type="radio"
              class="btn-check"
              name="KIP"
              value="T"
              id="danger-outlined4"
              autocomplete="off"
            />
            <label class="btn btn-outline-danger" for="danger-outlined4">Tidak</label>
          </div>
          <div class="mb-3">
            <p>32 No. KPS/KKS/PKH/KIP</p>
            <input name="NoKIP" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <p>33 Kewarganegaraan</p>
            <input
              type="radio"
              class="btn-check"
              name="Kewarganegaraan"
              value="WNI"
              id="success-outlined5"
              autocomplete="off"
              checked
            />
            <label class="btn btn-outline-success" for="success-outlined5">Indonesia (WNI)</label>

            <input
              type="radio"
              class="btn-check"
              name="Kewarganegaraan"
              value="WNA"
              id="danger-outlined5"
              autocomplete="off"
            />
            <label class="btn btn-outline-success" for="danger-outlined5">Asing (WNA)</label>
          </div>
        </div>
        <?php if (isset($error_message)): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $error_message; ?>
        </div>
        <?php endif; ?>

        <div class="position-relative my-5 pb-5">
          <div class="position-absolute top-0 start-50 translate-middle">
            <button id="submitbtn" class="btn btn-primary" type="submit">Submit form</button>
          </div>
        </div>

      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
      $(function () {
        $("#datepicker").datepicker();
      });
      $(function () {
        $("#datepicker2").datepicker();
      });
      $(function () {
        $("#datepicker3").datepicker();
      });
      $(function () {
        $("#datepicker4").datepicker();
      });
    </script>
  </body>
</html>
