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

        <?php include('data-index.php') ?>

        <div class="row">
          <?php foreach ($data_galeri as $galeri): ?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="../../assets/upload/<?php echo $galeri['path_galeri'] ?>" data-lightbox="galeri" data-title="<?php echo $galeri['caption_galeri'] ?>">
                <img src="../../assets/upload/<?php echo $galeri['path_galeri'] ?>" class="img-thumbnail">
              </a>
              <div class="caption">
                <p><?php echo $galeri['caption_galeri'] ?></p>
                <p><small><?php echo $galeri['tautan_galeri'] ?></small></p>
                <p>
                  <a href="../../assets/upload/<?php echo $galeri['path_galeri'] ?>" data-lightbox="galeri2" data-title="<?php echo $galeri['caption_galeri'] ?>" class="btn btn-primary btn-sm" role="button">
                    <i class="fas fa-search-plus"></i>
                  </a>
                  <a href="delete.php?id_galeri=<?php echo $galeri['id_galeri'] ?>&path_galeri=<?php echo $galeri['path_galeri'] ?>" class="btn btn-danger btn-sm" role="button" onclick="return confirm('Yakin hapus foto ini?')">
                    <i class="fas fa-trash"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
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