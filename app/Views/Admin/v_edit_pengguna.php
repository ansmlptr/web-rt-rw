<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Edit Data User</h1>
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

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data User</h5>

          <!-- Horizontal Form -->
          <form action="<?php echo site_url('admin/update/'.$user['id'])?>" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT"/>  
          
          <div class="row mb-3">
              <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUsername" value="<?= $user['username'] ?? ''; ?>" name="username" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" value="<?= $user['password'] ?? ''; ?>" name="password" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" value="<?= $user['email'] ?? ''; ?>" name="email" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
              <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="inputLevel" name="level" required>
                  <option value="admin" <?= ($user['level'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                  <option value="warga" <?= ($user['level'] == 'warga') ? 'selected' : ''; ?>>Warga</option>
                </select>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="<?= base_url('admin/pengguna')?>" class="btn btn-secondary">Kembali</a>
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

