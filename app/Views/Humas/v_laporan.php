<main id="main" class="main">

    <div class="pagetitle">
      <h1>Halaman Pengaduan Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/sukses')?>">Home</a></li>
          <li class="breadcrumb-item">Humas</li>
          <li class="breadcrumb-item active">Laporan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-12">

        <?php if ($dataAkun['level'] == 'admin'): ?>
                <a href="<?= site_url('humas/tambah laporan') ?>" class="btn btn-outline-secondary btn-table-spacing">Tambah Laporan</a>
            <?php elseif ($dataAkun['level'] == 'warga'): ?>
                <a href="<?= site_url('humas/tambah laporan warga') ?>" class="btn btn-outline-secondary btn-table-spacing">Tambah Laporan</a>
            <?php endif; ?>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Laporan</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Warga</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Uraian</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">User</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
