<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Detail Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Judul :  <?php echo $detail['Judul'] ?></h4>
                            <h6>Penulis :<?php echo $detail['Penulis'] ?></h6>
                            <h6>Penerbit :<?php echo $detail['Penerbit'] ?></h6>
                        </div>
                        <div class="col-4">
                            <img style="width:150px" src="<?php echo base_url('assets/images/cover/' . $detail['Cover']) ?>" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>