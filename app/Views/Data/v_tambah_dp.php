  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Tambah Data Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/sukses')?>">Home</a></li>
          <li class="breadcrumb-item">Data penduduk</li>
          <li class="breadcrumb-item active">Tambah Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Diri Warga</h5>

              <!-- Horizontal Form -->
              <form action="<?php echo site_url('data/tambahdb')?>" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="nm_warga" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNKK" class="col-sm-2 col-form-label">NKK</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNKK" name="nkk" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNIK" class="col-sm-2 col-form-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNIK" name="nik" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTempatlahir" name="tpt_lahir" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputTgllahir" name="tgl_lahir" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputJk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" id="inputJk" name="jk" required>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputGoldar" class="col-sm-2 col-form-label">Golongan Darah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGoldar" name="gol_darah" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAlamat" name="alamat" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputAgama" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAgama" name="agama" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="status" required>
                      <option value="Menikah">Menikah</option>
                      <option value="Belum Menikah">Belum Menikah</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNohp" class="col-sm-2 col-form-label">No. Handphone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNohp" name="telp" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" name="email" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPekerjaan" name="pekerjaan" required>
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

