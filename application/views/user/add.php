<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="<?php echo base_url('user/insert') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="Nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="judul">
                                </div>
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="penulis">
                                </div>
                                <div class="mb-3">
                                    <label for="Telepon" class="form-label">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" id="penerbit">
                                </div>
                                <div class="mb-3">
                                    <label for="Cover" class="form-label">Gambar</label>
                                    <input type="file" name="cover" class="form-control" id="cover">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>