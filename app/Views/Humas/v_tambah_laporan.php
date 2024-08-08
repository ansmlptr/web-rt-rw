<main id="main" class="main">

<div class="pagetitle">
  <h1>Tambah Laporan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('admin/sukses')?>">Home</a></li>
      <li class="breadcrumb-item">Humas</li>
      <li class="breadcrumb-item active">Tambah Laporan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Tambah Pengaduan Warga</h5>

          <?php
            $session = \Config\Services::session();
            if ($session->getFlashdata('warning')) {
            ?>
                <div class="alert alert-warning" style="background-color: #ebeef4; color: #012970; border: 1px #ebeef4; font-family: 'Poppins', sans-serif;">
                    <ul>
                        <?php
                        foreach ($session->getFlashdata('warning') as $val) {
                        ?>
                            <li><?php echo $val ?></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            <?php
            }
            if ($session->getFlashdata('success')) {
            ?>
                <div class="alert alert-success" style="font-family: 'Poppins', sans-serif;"><?php echo $session->getFlashdata('success') ?></div>
            <?php
            }
            ?>

          <!-- General Form Elements -->
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputJudulberita" class="col-sm-2 col-form-label">Judul Berita</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputJudulberita" name="judul" 
                value="<?php echo (isset($judul)) ? $judul : "" ?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl"> 
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputGambar" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" id="inputGambar" name="gambar">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                <textarea class="form-control" style="height: 100px" id="inputPassword" name="berita"><?php echo (isset($berita)) ? $berita : "" ?></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Penulis</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="id_admin">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="inputStatus">Status</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="status">
                  <option selected>Open this select menu</option>
                  <option value="active" <?php echo (isset($status) && $status == 'active') ? "selected" : "" ?>>Aktif</option>
                  <option value="inactive" <?php echo (isset($status) && $status == 'inactive') ? "selected" : "" ?>>Tidak Aktif</option>
                  </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <input type="submit" class="btn btn-primary" name="submit" value="Simpan Data"></input>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
