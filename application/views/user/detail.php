<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Detail User</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Nama :  <?php echo $detail['Nama'] ?></h4>
                            <h6>Email :<?php echo $detail['Email'] ?></h6>
                            <h6>Telepon :<?php echo $detail['Telepon'] ?></h6>
                        </div>
                        <div class="col-4">
                            <img style="width:150px" src="<?php echo base_url('assets/images/gambar/' . $detail['Cover']) ?>" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>