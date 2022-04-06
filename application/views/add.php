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
                            <form action="<?php echo base_url('koleksi/insert') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="Judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="judul">
                                </div>
                                <div class="mb-3">
                                    <label for="Penulis" class="form-label">Penulis</label>
                                    <input type="text" name="penulis" class="form-control" id="penulis">
                                </div>
                                <div class="mb-3">
                                    <label for="Penerbit" class="form-label">Penerbit</label>
                                    <input type="text" name="penerbit" class="form-control" id="penerbit">
                                </div>
                                <div class="mb-3">
                                    <label for="Cover" class="form-label">Cover</label>
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