<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Halaman Data</h1>
	<div class="row">
		<div class="col-md-6"><a href="<?php echo base_url() ?>admin_prestasi_siswa/tambah" class="btn btn-info mb-2">Tambah
				Data</a></div>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>Judul</td>
						<td>Tag</td>
						<td>Deskripsi</td>
						<td>Tanggal</td>
						<td>Gambar</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
                <?php $i = 1; ?>
                    <?php foreach ($berita as $us) : ?>
                    <tr>
                        <td><?= $i; ?>.</td>
                        <td><?= $us['judul']; ?></td>					
                        <td><?= $us['tag']; ?></td>
                        <td><?= $us['deskripsi']; ?></td>
						<td><?= $us['tanggal']; ?></td>
						<td><img src="<?= base_url('assets/img/prestasi_siswa/') . $us['gambar']; ?>"style="width: 100px;" class="img-thumbnail" alt=""></td>
                        <td>
                            <a href="<?= base_url('admin_prestasi_siswa/hapus/').$us['id']; ?>" class="badge badge-danger">Hapus</a>
                            <a href="<?= base_url('admin_prestasi_siswa/edit/').$us['id']; ?>" class="badge badge-warning">Edit</a>
                            <a href="<?= base_url('admin_prestasi_siswa/detail/').$us['id']; ?>" class="badge badge-info">Detail</a>
                            
                        </td>
                    </tr>
                    <?php $i++ ; ?>
                    <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
