<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
      <h1 class="text-light"><a href="<?= base_url('home/index') ?>"><span>SLB NEGERI PEMBINA PEKANBARU</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="" href="<?= base_url('home/index') ?>">Home</a></li>
        <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?= base_url('home/sejarah') ?>">Sejarah</a></li>
            <li><a href="<?= base_url('home/visimisi') ?>">Visi & Misi</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Prestasi</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?= base_url('home/prestasi_sekolah') ?>">Prestasi Sekolah</a></li>
            <li><a href="<?= base_url('home/prestasi_siswa') ?>">Prestasi Siswa</a></li>
          </ul>
        </li>
        <li><a href="<?= base_url('home/galeri') ?>">Galeri Kegiatan</a></li>
        <li><a href="<?= base_url('home/tentang') ?>">Kontak Kami</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<main id="main">
