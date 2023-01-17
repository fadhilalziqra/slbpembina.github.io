
  <!-- ======= About Section ======= -->
  <section class="about" data-aos="fade-up">
    <div class="container">
             
      <div class="row">
        <div class="col-lg-6">
          <img src="<?= base_url('assets/img/berita/').$berita['gambar'];?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h3><?= $berita['judul']; ?></h3>
          <p class="fst-italic">
          <?= $berita['tag']; ?>  <br>
          <?= $berita['tanggal']; ?>
          </p>
          
          <p>
          <?= $berita['deskripsi']; ?>
          </p>
        </div>
      </div>
     
    </div>
  </section><!-- End About Section -->

  

</main><!-- End #main -->

