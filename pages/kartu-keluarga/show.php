<?php include('../_partials/dashboard-top.php') ?>

<!-- Page Wrapper -->
<div id="wrapper">
  <?php include('../_partials/dashboard-sidebar.php'); ?>

<!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
    <div id="content">
      <?php include('../_partials/dashboard-topbar.php'); ?>

<!-- Begin Page Content -->
      <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h4 mb-0 text-gray-800">Data Kartu Keluarga</h1>
<br>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<h5>A.Data Pribadi </h5>
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td><?php echo $data_keluarga[0]['nomor_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Kepala Keluarga</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['nama_warga'] ?></td>
  </tr>
  <tr>
    <th>NIK Kepala Keluarga</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['nik_warga'] ?></td>
  </tr>
</table>

<h5>B. Data Alamat </h5>
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">Alamat</th>
    <td width="1%">:</td>
    <td><?php echo $data_keluarga[0]['alamat_keluarga'] ?></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['rt_keluarga'] ?></td>
  </tr> 
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['rw_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['desa_kelurahan_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['kecamatan_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['kabupaten_kota_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['provinsi_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['negara_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Kode Pos</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['kode_pos_keluarga'] ?></td>
  </tr>
</table>

<h5>C. Data Aplikasi </h5>
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">Diinput Oleh</th>
    <td width="1%">:</td>
    <td><?php echo $data_keluarga[0]['id_user'] ?></td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['updated_at'] ?></td>
  </tr>
</table>

<h5>D. Data Anggota Kartu Keluarga</h5>
<table class="table table-sm table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>NIK</th>
      <th>Nama Warga</th>
      <th>Tempat Lahir</th>
      <th>Lahir</th>
      <th>Pendidikan</th>
      <th>Pekerjaan</th>
      <th>Kawin</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_anggota_keluarga as $anggota_keluarga) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $anggota_keluarga['nik_warga'] ?></td>
      <td><?php echo $anggota_keluarga['nama_warga'] ?></td>
      <td><?php echo $anggota_keluarga['tempat_lahir_warga'] ?></td>
      <td>
        <?php echo ($anggota_keluarga['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($anggota_keluarga['tanggal_lahir_warga'])) : ''?>
      </td>
      <td><?php echo $anggota_keluarga['pendidikan_terakhir_warga'] ?></td>
      <td><?php echo $anggota_keluarga['pekerjaan_warga'] ?></td>
      <td><?php echo $anggota_keluarga['status_perkawinan_warga'] ?></td>
      <td><?php echo $anggota_keluarga['status_perkawinan_warga'] ?></td>
      <td>

        <!-- SINGLE BUTTON -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" drop toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
          </button>

          <div class="dropdown-menu pull-right" role="menu">
          <a class="dropdown-item" href="../warga/show.php?id_warga=<?=$anggota_keluarga['id_warga'] ?>">
          <i class="fas fa-eye"></i> Detail</a>
       </div>
      </div>
    </td>
  </tr>
<?php endforeach ?>
</tbody>
</table>

<!-- End of Main Content -->

<?php include('../_partials/dashboard-footer.php') ?>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- End of Page Wrapper -->

<?php include('../_partials/dashboard-logout.php'); ?>

<?php include('../_partials/dashboard-bottom.php') ?>