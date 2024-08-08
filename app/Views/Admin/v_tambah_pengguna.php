<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Tambah Data User</h1>
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
          <form action="<?php echo site_url('pengguna/tambahdb')?>" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUsername" name="username" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" name="password" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="email" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
              <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="inputLevel" name="level" required>
                  <option value="Admin">Admin</option>
                  <option value="Warga">Warga</option>
                </select>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Kembali</button>
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

