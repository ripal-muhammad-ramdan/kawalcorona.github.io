<!-- Begin Page Content -->
<div class="container-fluid">
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
                    <div class="flashdata" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

                    <!-- <button onclick="swal.fire('Good Job!','Duarrr','success');">Click Me !</button> -->
                    <form method="POST" action="<?= base_url('users/addData') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="formGroupExampleInput">NPM</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="npm" placeholder="NPM">
                            <?= form_error('npm', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Nama</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Alamat</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Photo</label>
                            <input type="file" class="form-control" id="formGroupExampleInput2" name="photo" placeholder="Photo">
                            <?= form_error('photo', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="email" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Jurusan</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="jurusan" placeholder="Jurusan">
                            <?= form_error('jurusan', '<small class="text-danger p-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary float-right btnAdd" value="Submit" name="submit">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- End Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-lg-4 col-lg-12">
            <div class="card shadow mb-4">

                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Mahasiswa</h6>
                </div>
                <form action="<?= base_url('users') ?>" method="post">
                    <div class="row mt-3 ml-2">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="keywords" placeholder="Cari . . .">
                        </div>
                        <div class="col-lg-1">
                            <input type="submit" class="btn btn-primary float-right" value="Submit" name="submit">
                        </div>
                    </div>

                </form>

                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Email</th>
                                <th scope="col">NPM</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? foreach ($mahasiswa as $mhs) : ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?= $mhs['nama']; ?>

                                    <td><?= $mhs['alamat']; ?>

                                    <td><img height="40" width="50" src="<?= base_url() . $mhs['photo']; ?>">

                                    <td><?= $mhs['email']; ?>

                                    <td><?= $mhs['npm']; ?>

                                    <td><?= $mhs['jurusan']; ?>

                                    <td><a href="<?= base_url('users/updateData'); ?>?npm=<?= $mhs["npm"]; ?>" class="badge badge-warning">update</a>||<a class="badge badge-danger deleteBtn" href="<?= base_url('users/deleteData'); ?>?npm=<?= $mhs["npm"]; ?>">delete</a>
                                    <td>
                                </tr>
                            <? endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->

    </div>

</div>
<!-- /.container-fluid -->