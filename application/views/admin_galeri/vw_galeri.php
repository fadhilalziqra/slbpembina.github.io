<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Halaman Data</h1>
	<div class="row">
		<div class="col-md-6"><a href="<?php echo base_url() ?>admin_galeri/tambah" class="btn btn-info mb-2">Tambah
				Data</a></div>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>Judul</td>
						<td>Tanggal</td>
						<td>Gambar</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
                <?php $i = 1; ?>
                    <?php foreach ($galeri as $us) : ?>
                    <tr>
                        <td><?= $i; ?>.</td>
                        <td><?= $us['judul']; ?></td>					
						<td><?= $us['tanggal']; ?></td>
						<td><img src="<?= base_url('assets/img/galeri/') . $us['gambar']; ?>"style="width: 100px;" class="img-thumbnail" alt=""></td>
                        <td>
                            <a href="<?= base_url('admin_galeri/hapus/').$us['id']; ?>" class="badge badge-danger">Hapus</a>
                            <a href="<?= base_url('admin_galeri/edit/').$us['id']; ?>" class="badge badge-warning">Edit</a>
                            <a href="<?= base_url('admin_galeri/detail/').$us['id']; ?>" class="badge badge-info">Detail</a>
                            
                        </td>
                    </tr>
                    <?php $i++ ; ?>
                    <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
