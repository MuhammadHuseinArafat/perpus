<?php $this->load->view('layout/header');?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
			<div class="card">
				<h1 class="card-header">Koleksi</h1>
				<div class="card-body">
					<h5> Tabel Koleksi</h5>
					<a href="koleksi/add" class="btn btn-success">Tambah Data</a>
					<table class="table  table-secondary table-striped">
						<tr>
							<th>ID</th>
							<th>NAMA</th>
							<th>DETAIL</th>
						</tr>
						<?php foreach ($list as $i) { ?>
							<tr>
								<td><?php echo $i['id_orang'] ?></td>
								<td><?php echo $i['Nama'] ?></td>
								<td>
								<!-- <td><?php echo $i->Cover ?></td> -->
								<!-- <td><?php echo $i->Penulis ?></td> -->
								<a href="<?php echo base_url('/koleksi/detail/'.$i['id_orang'])?>" class="btn btn-primary">Detail</a>
								<a href="Koleksi/edit/<?php echo $i['id_orang']; ?>" class="btn btn-warning">Edit</a>
								<a onclick="konfirmasi(<?php echo $i['id_orang']; ?>)" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Hapus</a></td>
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