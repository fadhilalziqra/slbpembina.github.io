<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
  </section><!-- End Hero -->

  <main id="main">

    

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="<?= base_url('assets/img/unnamed.jpg'); ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
              <h2 class="title"><a href="">Sejarah</a></h2>
              <p class="description">SLB Negeri Pembina Pekanbaru didirikan oleh departemen Pendidikan Nasional pada tahun 1998, SK Penunjukan SLB Negeri Pembina dikeluarkan Oleh Menteri Pendidikan Nasional No. 13a/O/1998. Pada Tanggal 29 Januari 1998 SLB Negeri Pembina Di kepalai oleh : Baharuddin Ansori, S.Pd, kemudian pada Tahun 2000 – sekarang SLB Negeri Pembina Pekanbaru dikepalai oleh : H. Samijo, S.Sos. M.Pd. Perkembangan SLB Negeri Pembina dari tahun ketahun...</p>
              <div class="read-more">
                  <a href="<?= base_url('home/sejarah') ?>">Selengkapnya</a>
              </div>
            </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

     <!-- ======= Blog Section ======= -->
     <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
          <?php $i = 1; ?>
              <?php foreach ($berita as $us) : ?>
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url('assets/img/berita/').$us['gambar'];?>" alt="" class="img-fluid">
              </div>

              
              <h2 class="entry-title">
                <a href="blog-single.html"><?= $us['judul']; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"></i> <a href="blog-single.html"><?= $us['tag']; ?></a></li>
                  
                </ul>
              </div>

              <div class="entry-content">
                <p>
                <?= word_limiter($us['deskripsi'],30); ?>
                </p>
                <div class="read-more">
                  <a href="<?= base_url('home/detail/').$us['id']; ?>">Read More</a>
                </div>
              </div>
             
            </article><!-- End blog entry -->
            <?php $i++ ; ?>
            <?php endforeach; ?>

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  