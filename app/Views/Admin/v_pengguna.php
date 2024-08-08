<main id="main" class="main">

    <div class="pagetitle">
      <h1>Halaman Data User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/sukses')?>">Home</a></li>
          <li class="breadcrumb-item">Setting</li>
          <li class="breadcrumb-item active">Pengguna Sistem</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-12">

        <a href="<?php echo site_url('admin/tambah pengguna')?>" class="btn btn-outline-secondary btn-table-spacing">Tambah Data User</a>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel User</h5>

              <?php if(session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if($user): ?>
                    <?php foreach($user as $row) : ?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['level']; ?></td>
                        <td>
                        <div class="icon">
                          <a href="<?= base_url('admin/edit/'.$row['id']) ?>" class="bi bi-pencil-square"></a>
                        </div>
                        <div class="icon">
                          <a href="<?= base_url('admin/delete/'.$row['id']) ?>" class="bi bi-trash"></a>
                        </div>
                        </td>
                      </tr>
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
