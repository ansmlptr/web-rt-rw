<main id="main" class="main">

    <div class="pagetitle">
      <h1>Halaman Administrasi Warga</h1>
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

        <a href="<?= site_url('data/tambahdata') ?>" class="btn btn-outline-secondary btn-table-spacing">Tambah Data Penduduk</a>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Penduduk</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php if($adminwarga): ?>
                  <?php $i = 1; foreach($adminwarga as $row) : ?>
                      <?php if($row['id_username'] == session()->get('akun_username')): ?> <!-- Menambahkan kondisi untuk memfilter berdasarkan id_username -->
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['nm_warga']; ?></td>
                            <td><?php echo $row['nik']; ?></td>
                            <td><?php echo $row['jk']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['telp']; ?></td>
                            <td>
                              <div class="icon">
                                <a href="<?= base_url('data/edit/'.$row['id_warga']) ?>" class="bi bi-pencil-square"></a>
                              </div>
                              <div class="icon">
                                <a href="<?= base_url('data/delete/'.$row['id_warga']) ?>" class="bi bi-trash"></a>
                              </div>
                            </td>
                          </tr>
                      <?php endif; ?>
                  <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
