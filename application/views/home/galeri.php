
    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Galeri Kegiatan</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Galeri Kegiatan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

  


    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">
     
        <div class="row">
        <?php $i = 1; ?>
             <?php foreach ($galeri as $us) : ?>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
         
            <div class="card">
              <div class="card-img">
                <img src="<?= base_url('assets/img/galeri/').$us['gambar'];?>" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#"><?= $us['judul']; ?></a></h5>
                <p class="fst-italic">
        
          <?= $us['tanggal']; ?>
          </p>
               
              </div>
            </div>
           
          </div>
          <?php $i++ ; ?>
          <?php endforeach; ?>

          
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            
          </div>
        </div>

      </div>
      
    </section><!-- End Service Details Section -->
