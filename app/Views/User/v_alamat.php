  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Alamat Warga RT 005 RW 026</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Alamat Warga RT 005 RW 026</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <!-- Table with hoverable rows -->
        <table class="table table-hover">
        <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telepon</th>
                  </tr>
                </thead>
                <tbody>
                <?php if($adminwarga): ?>
                  <?php $i = 1; foreach($adminwarga as $row) : ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['nm_warga']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['telp']; ?></td>
                          </tr>
                      <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->
      </div>
    </section>

  </main><!-- End #main -->