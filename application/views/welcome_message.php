                <div class="content d-flex flex-column flex-column-fluid" id="kt_wrapper">
                    <div class="d-flex flex-column-fluid">
                        <div class=" container ">
                            <div class="clearfix my-4 border"></div>
                            <div class="card card-custom">
                                <div class="card-body">
                                    <div class="text-right">
                                        <a id="kt_chat_modal" class="btn btn-default btn-primary" title="Add new data"><i class="fas fa-plus-square"></i> Tambah Data</a>
                                        <div class="clearfix my-4"></div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="table" class="table  table-hover " style="width:100%;">
                                            <thead class="text-center text-uppercase">
                                                <tr>
                                                    <th>no</th>
                                                    <th>username</th>
                                                    <th>roles</th>
                                                    <th>pict</th>
                                                    <th>status</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="listUser">
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>bod</td>
                                                    <td>Super User</td>
                                                    <td class="text-center">
                                                        <img class="img-fluid" src="assets/media/users/100_1.jpg" style="width:40px;" />
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="label label-lg label-light-primary label-inline">aktif</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-icon btn-default btn-xs" title="Edit bod"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-default btn-xs" title="Delete bod"><i class="fas fa-trash-alt text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>dona</td>
                                                    <td>Administrator</td>
                                                    <td class="text-center">
                                                        <img class="img-fluid" src="assets/media/users/100_1.jpg" style="width:40px;" />
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="label label-lg label-light-danger label-inline">non-aktif</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-icon btn-default btn-xs" title="Edit dona"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-default btn-xs" title="Actived dona"><i class="fas fa-lock-open text-success"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2020&copy;</span>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Nav-->
                        <div class="nav nav-dark">
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>

                <!-- begin::User Panel-->
                <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
                    <!--begin::Header-->
                    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-1">
                        <h3 class="font-weight-bold m-0">
                            User Profile
                        </h3>
                        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                            <i class="ki ki-close icon-xs text-muted"></i>
                        </a>
                    </div>
                    <!--end::Header-->

                    <!--begin::Content-->
                    <div class="offcanvas-content pr-5 mr-n5">
                        <!--begin::Header-->
                        <div class="d-flex align-items-center mt-5">
                            <div class="symbol symbol-100 mr-5">
                                <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                                <i class="symbol-badge bg-success"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                                    James Jones
                                </a>
                                <div class="text-muted mt-1">
                                    Application Developer
                                </div>
                                <div class="navi mt-2">
                                    <a href="#" class="navi-item">
                                        <span class="navi-link p-0 pb-2">
                                            <span class="navi-icon mr-1">
                                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                        </g>
                                                    </svg>
                                                </span> </span>
                                            <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>