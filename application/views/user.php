<?php $this->load->view('layout/header');?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h1 class="card-header">User</h1>
				<div class="card-body">
					<h5> Tabel User</h5>
					<a href="user/add" class="btn btn-success">Tambah Data</a>
					<table class="table table-secondary table-striped">
						<tr>
							<th>ID</th>
							<th>NAMA</th>
							<th>EMAIL</th>
							<th>TELEPON</th>
							<th>Detail</th>
						</tr>
						<?php foreach ($list as $i) { ?>
							<tr>
								<td><?php echo $i->ID ?></td>
								<td><?php echo $i->Nama ?></td>
								<td><?php echo $i->email ?></td>
								<td><?php echo $i->Telepon ?></td>
								<td>
								<a href="<?php echo base_url('/user/detail/'.$i['ID'])?>" class="btn btn-primary">Detail</a>
								<a href="user/edit/<?php echo $i['ID']; ?>" class="btn btn-warning">Edit</a>
								<a onclick="konfirmasi(<?php echo $i['ID']; ?>)" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Hapus</a></td></td>
							</tr>
					<?php 	} ?>
						
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function konfirmasi(id) {
		let milih = ('Bener arep ngapus ?');
		if (confirm (milih) == true) {
			window.location.href ='Koleksi/delete/'+id;
		}
	}
</script>
<?php $this->load->view('layout/footer');?>