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

        <form method="post" enctype="multipart/form-data" action="<?= base_url('publikasi/tambahdata'); ?>">
            <section class="section">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Publikasi</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">
                                        <!-- <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Kategori</label>
                                                <div class="form-group">
                                                    <select class="choices form-select" name="kategori">
                                                        <option value="Madani Insight">Madani Insight</option>
                                                        <option value="Laporan Penelitian">Laporan Penelitian</option>
                                                        <option value="Policy Brief">Policy Brief</option>
                                                        <option value="Buku Saku">Buku Saku</option>
                                                        <option value="Komik">Komik</option>
                                                        <option value="Siaran Pers/Reactive">Siaran Pers/Reactive</option>
                                                        <option value="Infografis">Infografis</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">kategori</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="kategori">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Judul</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" required="" name="judul">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">tag</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" required="" name="tag">
                                            </div>
                                        </div> -->
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">File</label>
                                                <input type="file" id="last-name-column" class="form-control" name="gambar" required="">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Tag</label>
                                                <div class="form-group">
                                                    <select class="choices form-select multiple-remove" multiple="multiple"> -->
                                        <!-- <optgroup label="Figures">
                                                        <option value="romboid">Romboid</option>
                                                        <option value="trapeze">Trapeze</option>
                                                        <option value="triangle">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </optgroup>
                                                    <optgroup label="Colors">
                                                        <option value="red">Red</option>
                                                        <option value="green">Green</option>
                                                        <option value="blue" selected>Blue</option>
                                                        <option value="purple">Purple</option>
                                                    </optgroup> -->
                                        <!-- </select>
                                                </div>
                                            </div> -->
                                        <!-- </div> -->
                                        <!-- <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Tanggal</label>
                                                <input type="date" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                            </div>
                                        </div> -->

                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>