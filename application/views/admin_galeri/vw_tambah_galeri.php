<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Tambah Data 
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="gambar">Gambar</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="gambar" id="gambar">
								<label for="gambar" class="custom-file-label">Choose File</label>
							</div>
						</div>
						<div class="form-group">
							<label for="ruangan">Judul</label>
							<input type="text" name="judul" value="<?= set_value('judul')?>" class="form-control" id="judul" placeholder="judul">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						

						

						<div class="form-group">
							<label for="akreditasi">Tanggal</label>
							<input type="text" name="tanggal" value="<?= set_value('tanggal')?>" class="form-control" id="tanggal" placeholder="tanggal">
							<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<a href="<?= base_url('admin_galeri') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Galeri</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
