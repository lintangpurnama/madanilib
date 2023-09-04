<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Publikasi</h3>
                    <!-- <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables</p> -->
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Madani Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Publikasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- style="width: 80rem;" -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url('publikasi/add') ?>" class="btn font-bold badge rounded-pill text-bg-primary">Add Data</a>
                </div>
                <div></div>
                <div class="card-body">

                    <table class="table table-striped " id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th width="0%">Tanggal Unggah</th>
                                <th width="11%">Kategori</th>
                                <th width="28%">Judul</th>
                                <th width="19%">Tags</th>
                                <th width="10%">Diunggah oleh</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($publikasi as $p) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $p->tanggal; ?></td>
                                    <td><?= $p->kategori; ?></td>
                                    <td><?= $p->judul; ?></td>
                                    <td><?= $p->tag; ?></td>
                                    <td><?= $p->nama_user; ?></td>
                                    <td>
                                        <button type="button" class="btn font-bold badge rounded-pill text-bg-success">Edit</button>
                                        <button type="button" class="btn font-bold badge rounded-pill text-bg-danger">Delete</button>
                                        <button type="button" class="btn font-bold badge rounded-pill text-bg-primary">View</button>
                                        <button type="button" class="btn font-bold badge rounded-pill text-bg-primary">Download</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>