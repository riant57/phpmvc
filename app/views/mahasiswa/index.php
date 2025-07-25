<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php  Flasher::flash();?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data
            </button>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?php echo BASEURL;?>/Mahasiswa/cari" method="post">
                <div class="input-group">
                <input type="text" name="keyword" class="form-control" placeholder="Cari Mahasiswa" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="tombolCari">Cari</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?php echo $mhs['nama'] ?>
                        <a href="<?php echo BASEURL; ?>/Mahasiswa/hapus/<?php echo $mhs['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Hapus data ?')">hapus</a>
                        <a href="#" class="badge badge-warning float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id=<?php echo $mhs['id'] ?> >edit</a>
                        <a href="<?php echo BASEURL; ?>/Mahasiswa/detail/<?php echo $mhs['id'] ?>" class="badge badge-info float-right ml-1">detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="form-wrapper">
                <form action="<?php echo BASEURL; ?>/Mahasiswa/tambah" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="number" class="form-control" id="nrp" name="nrp">
                        </div>
                        <div class="form-group">
                            <label for="nrp">email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Pangan">Teknik Pangan</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>