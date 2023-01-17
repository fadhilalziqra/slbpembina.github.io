<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Berita
                </div>

                <h2 class="card-title"><?= $berita['judul'];?></h2>
                <img src="<?= base_url('assets/img/berita/').$berita['gambar'];?>" style="width: 100px;" class="img-thumbnail" alt="">
                
        
                <div class="row">
                    <div class="col-md-4">Judul</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $berita['judul']; ?></div>
                </div>


                <div class="row">
                    <div class="col-md-4">Tag</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $berita['tag']; ?></div>
                </div>

                <div class="row">
                    <div class="col-md-4">Deskripsi</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $berita['deskripsi']; ?></div>
                </div>

                <div class="row">
                    <div class="col-md-4">Tanggal</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $berita['tanggal']; ?></div>
                </div>

                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('admin') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>