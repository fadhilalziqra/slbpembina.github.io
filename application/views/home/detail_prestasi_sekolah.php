
  <!-- ======= About Us Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About Us</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About Us</li>
        </ol>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= About Section ======= -->
  <section class="about" data-aos="fade-up">
    <div class="container">
             
      <div class="row">
        <div class="col-lg-6">
          <img src="<?= base_url('assets/img/prestasi_sekolah/').$prestasi_sekolah['gambar'];?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h3><?= $prestasi_sekolah['judul']; ?></h3>
          <p class="fst-italic">
          <?= $prestasi_sekolah['tag']; ?>  <br>
          <?= $prestasi_sekolah['tanggal']; ?>
          </p>
          
          <p>
          <?= $prestasi_sekolah['deskripsi']; ?>
          </p>
        </div>
      </div>
     
    </div>
  </section><!-- End About Section -->

  

</main><!-- End #main -->

