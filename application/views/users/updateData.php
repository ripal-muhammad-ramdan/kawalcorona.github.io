<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->


    <!-- Content Row -->

    <div class="row">
        <div class="col-lg-4 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Mahasiswa</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-- <?= $this->session->flashdata('message'); ?> -->
                    <div class="flashdata" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

                    <form method="POST" action="<?= base_url('users/updateData') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="formGroupExampleInput">NPM</label>
                            <input type="text" class="form-control" value="<?= $mahasiswa['npm'] ?>" id="formGroupExampleInput" name="npm" placeholder="NPM" readonly>
                            <?= form_error('npm', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Nama</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $mahasiswa['nama'] ?>" name="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Alamat</label>
                            <input type="text" class="form-control" value="<?= $mahasiswa['alamat'] ?>" id="formGroupExampleInput2" name="alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Photo</label>
                            <input type="file" class="form-control" value="<?= $mahasiswa['photo'] ?>" id="formGroupExampleInput2" name="photo" placeholder="Photo">
                            <?= form_error('photo', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="text" class="form-control" value="<?= $mahasiswa['email'] ?>" id="formGroupExampleInput2" name="email" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Jurusan</label>
                            <input type="text" class="form-control" value="<?= $mahasiswa['jurusan'] ?>" id="formGroupExampleInput2" name="jurusan" placeholder="Jurusan">
                            <?= form_error('jurusan', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary float-right" value="Update" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Content Row -->


    <!-- End Content Row -->

    <!-- Content Row -->

</div>
<!-- /.container-fluid -->