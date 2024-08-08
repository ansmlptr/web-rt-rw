<main id="main" class="main">

  <div class="pagetitle">
    <h1>Surat Domisili</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/sukses')?>">Home</a></li>
        <li class="breadcrumb-item">Surat</li>
        <li class="breadcrumb-item active">Domisili</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Permintaan Surat Domisili</h5>

            <!-- General Form Elements -->
            <form action="" method="get">

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Penduduk</label>
                <?php $selectedId = null; ?>
                <?php $selectedId = $penduduk[0]; ?>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="id_warga" onchange="updateSelectedId(this)">
                    <option selected>Pilih Data</option>
                    <?php foreach ($penduduk as $p) : ?>
                      <option value="<?= $p['id_warga']; ?>"><?= $p['nm_warga']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-10">
                  <a href="<?php echo site_url('surat/downdom/'.$selectedId['id_warga']); ?>" class="btn btn-primary" name="submit">Cetak Surat</a>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

    </div>
  </section>

</main><!-- End #main -->

<script>
  function updateSelectedId(select) {
    var selectedOption = select.options[select.selectedIndex];
    var selectedValue = selectedOption.value;
    var selectedText = selectedOption.text;
    var selectedId = {
      id_warga: selectedValue,
      nm_warga: selectedText
    };
    var downloadPdfLink = document.querySelector('[name="submit"]');
    var href = "<?php echo site_url('surat/downdom/'); ?>" + selectedValue;
    downloadPdfLink.href = href;
  }
</script>
