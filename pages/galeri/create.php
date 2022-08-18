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
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h4 mb-0 text-gray-800">Galeri</h1>
        </div>

        <?php include('_partials/menu.php') ?>
        <form action="store.php" method="post" enctype="multipart/form-data">
          <h3>A. Data Pribadi</h3>
          <table class="table table-striped table-middle">
            <tr>
              <th width="20%">Path</th>
              <td width="1%">:</td>
              <td><input type="file" class="form-control" name="file" required></td>
            </tr>
            <tr>
              <th>Caption</th>
              <td>:</td>
              <td><input type="text" class="form-control" name="caption_galeri" required></td>
            </tr>
            <tr>
              <th>Tautan</th>
              <td>:</td>
              <td><input type="text" class="form-control" name="tautan_galeri"></td>
            </tr>
          </table>

          <button type="submit" class="btn btn-primary btn-lg">
            <i class="glyphicon glyphicon-floppy-save"></i> Simpan
          </button>
        </form>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <?php include('../_partials/dashboard-footer.php'); ?>
  </div>
  <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<?php include('../_partials/dashboard-logout.php'); ?>

<?php include('../_partials/dashboard-bottom.php') ?>