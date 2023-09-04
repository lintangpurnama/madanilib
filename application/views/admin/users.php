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
                    <h3>Users</h3>
                    <!-- <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables</p> -->
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- style="width: 80rem;" -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn font-bold badge rounded-pill text-bg-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">Add Data</button>

                </div>
                <div class="card-body">
                    <table class="table table-striped " id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>level</th>
                                <th width="19%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($user as $u) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $u->nama_user; ?></td>
                                    <td><?= $u->email; ?></td>
                                    <td><?= $u->jabatan; ?></td>
                                    <td><?php if ($u->status === '1') : ?>
                                            <span class="badge bg-primary">aktif</span>
                                        <?php else : ?>
                                            <span class="badge bg-danger">tidak aktif</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php if ($u->level === '1') : ?>
                                            <span class="badge bg-primary">super admin</span>
                                        <?php else : ?>
                                            <span class="badge bg-success">user</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn font-bold badge rounded-pill text-bg-success">Edit</button>
                                        <button type="button" class="btn font-bold badge rounded-pill text-bg-danger">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <div class="card-body">
        <div class="form-group">
            <!--login form Modal -->
            <div class="modal fade text-left" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Login Form </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                        <form action="" method="POST">
                            <div class="modal-body">
                                <?php echo validation_errors(); ?>
                                <label>Nama </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Masukan Nama" class="form-control" name="nama">
                                </div>
                                <label>Email</label>
                                <div class="form-group">
                                    <input type="email" placeholder="Email Address" class="form-control" name="email">
                                </div>

                                <label>Jabatan</label>
                                <fieldset class="form-group">
                                    <select class="form-select" id="basicSelect" name="jabatan">
                                        <option value="Executive Director">Executive Director</option>
                                        <option value="Program Director">Program Director</option>
                                        <option value="Finance Manager">Finance Manager</option>
                                        <option value="Knowledge Management Manager">Knowledge Management Manager</option>
                                        <option value="Human Resource">Human Resource</option>
                                        <option value="Communication Manager">Communication Manager</option>
                                        <option value="Green Development Program Officer">Green Development Program Officer</option>
                                        <option value="Program Officer Komoditas Berkelanjutan">Program Officer Komoditas Berkelanjutan</option>
                                        <option value="General Affair Staff">General Affair Staff</option>
                                        <option value="Finance Officer">Finance Officer</option>
                                        <option value="Project Asisstant Hutan & Iklim">Project Asisstant Hutan & Iklim</option>
                                        <option value="Green Development Program Assistant">Green Development Program Assistant</option>
                                        <option value="Researcher">Researcher</option>
                                        <option value="GIS Specialist">GIS Specialist</option>
                                        <option value="Media and Stakeholder Engagement Officer">Media and Stakeholder Engagement Officer</option>
                                        <option value="Graphic Designer">Graphic Designer</option>
                                        <option value="Social Media Specialist">Social Media Specialist</option>
                                        <option value="Biofuel Program Officer">Biofuel Program Officer</option>
                                        <option value="Program Assistant Komoditas Berkelanjutan">Program Assistant Komoditas Berkelanjutan</option>
                                    </select>
                                </fieldset>


                                <label>Password</label>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form-control" name="password1">
                                </div>
                                <label>Ulangi Password</label>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form-control" name="password2">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="submit" class="btn btn-primary ml-1" <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">login</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>