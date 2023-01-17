<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Ubah Data Prestasi Sekolah
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $prestasi_sekolah['id']; ?>">
						<div class="form-group"><div class="form-group">
						<div class="form-group">
							<img src="<?= base_url('assets/img/prestasi_sekolah/').$prestasi_sekolah['gambar'];?>" style="width: 100px;" class="img-thumbnail" alt="">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="gambar" id="gambar">
								<label for="gambar" class="custom-file-label">Choose File</label>
								<?= form_error('gambar','<small class="text-danger pl-3">','</small>');?>
							</div>
						</div>
							<label for="nama">Judul</label>
							<input type="text" name="judul" value="<?= $prestasi_sekolah['judul']; ?>" class="form-control" id="judul" placeholder="judul">
							<?= form_error('judul,', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="ruangan">Tag</label>
							<input type="text" name="tag" value="<?= $prestasi_sekolah['tag']; ?>" class="form-control" id="ruangan" placeholder="tag">
							<?= form_error('tag', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="jurusan">Deskripsi</label>
							<input type="text" name="deskripsi" value="<?= $prestasi_sekolah['deskripsi']; ?>" class="form-control" id="jurusan" placeholder="deskripsi">
							<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="jurusan">Tanggal</label>
							<input type="text" name="tanggal" value="<?= $prestasi_sekolah['tanggal']; ?>" class="form-control" id="jurusan" placeholder="tanggal">
							<?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<a href="<?= base_url('admin_prestasi_sekolah') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
