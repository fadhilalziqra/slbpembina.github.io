<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Ubah Data Berita
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $berita['id']; ?>">
						<div class="form-group"><div class="form-group">
						<div class="form-group">
							<img src="<?= base_url('assets/img/berita/').$berita['gambar'];?>" style="width: 100px;" class="img-thumbnail" alt="">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="gambar" id="gambar">
								<label for="gambar" class="custom-file-label">Choose File</label>
								<?= form_error('gambar','<small class="text-danger pl-3">','</small>');?>
							</div>
						</div>
							<label for="nama">Judul</label>
							<input type="text" name="judul" value="<?= $berita['judul']; ?>" class="form-control" id="judul" placeholder="judul">
							<?= form_error('judul,', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="ruangan">Tag</label>
							<input type="text" name="tag" value="<?= $berita['tag']; ?>" class="form-control" id="ruangan" placeholder="tag">
							<?= form_error('tag', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="jurusan">Deskripsi</label>
							<input type="text" name="deskripsi" value="<?= $berita['deskripsi']; ?>" class="form-control" id="jurusan" placeholder="deskripsi">
							<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="jurusan">Tanggal</label>
							<input type="text" name="tanggal" value="<?= $berita['tanggal']; ?>" class="form-control" id="jurusan" placeholder="tanggal">
							<?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<a href="<?= base_url('admin') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
