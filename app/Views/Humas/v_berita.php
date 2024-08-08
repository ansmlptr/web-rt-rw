<main id="main" class="main">

    <div class="pagetitle">
      <h1>Halaman Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/sukses')?>">Home</a></li>
          <li class="breadcrumb-item">Kelola Data</li>
          <li class="breadcrumb-item active">Data Penduduk</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-12">

        <a href="<?php echo site_url('humas/tambah berita')?>" class="btn btn-outline-secondary btn-table-spacing">Tambah Berita</a>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Berita</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Berita</th>
                    <th scope="col">Penulis</th>
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
