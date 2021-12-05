@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ancor</a></li>
                            <li class="breadcrumb-item active">User data</li>
                        </ol>
                    </div>
                    <h4 class="page-title">User data</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <span class="float-start m-2 me-4">
                            <img src="assets/images/users/avatar-2.jpg" style="height: 100px;" alt=""
                                class="rounded-circle img-thumbnail">
                        </span>
                        <div class="">
                            <h4 class="mt-1 mb-1">Michael Franklin</h4>
                            <p class="font-13"> Authorised Brand Seller</p>

                            <ul class="mb-0 list-inline">
                                <li class="list-inline-item me-3">
                                    <h5 class="mb-1">$ 25,184</h5>
                                    <p class="mb-0 font-13">Total Revenue</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="mb-1">5482</h5>
                                    <p class="mb-0 font-13">Number of Orders</p>
                                </li>
                            </ul>
                        </div>
                        <!-- end div-->
                    </div>
                    <!-- end card-body-->
                </div>
            </div> <!-- end col -->

            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body p-0" dir="ltr">
                        <div id="sales-spark" class="apex-charts" data-colors="#3688fc"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body p-0" dir="ltr">
                        <div id="profit-spark" class="apex-charts" data-colors="#0acf97"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xxl-3 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-currency-btc widget-icon bg-danger rounded-circle text-white"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Revenue">Revenue</h5>
                        <h3 class="mt-3 mb-3">$6,254</h3>
                        <p class="mb-0 text-muted">
                            <span class="badge bg-info me-1">
                                <i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-xxl-3 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-pulse widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Growth">Growth</h5>
                        <h3 class="mt-3 mb-3">+ 30.56%</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2">
                                <i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Deals</h5>
                                <h3 class="my-2 py-1">861</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <div id="deals-chart" data-colors="#727cf5"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Booked Revenue
                                </h5>
                                <h3 class="my-2 py-1">$253k</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <div id="booked-revenue-chart" data-colors="#727cf5"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title mb-3">Transactions</h4>

                        <div data-simplebar style="max-height: 320px; overflow-x: hidden;">
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Purchased Hyper Admin Template</a>
                                    <p class="mb-0 text-muted"><small>Today</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-danger fw-bold pe-2">-$489.30</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Payment received Bootstrap
                                        Marketplace</a>
                                    <p class="mb-0 text-muted"><small>Yesterday</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-success fw-bold pe-2">+$1578.54</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Freelance work - Shane</a>
                                    <p class="mb-0 text-muted"><small>16 Sep 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-success fw-bold pe-2">+$247.5</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Hire new developer for work</a>
                                    <p class="mb-0 text-muted"><small>09 Sep 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-danger fw-bold pe-2">-$185.14</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Money received from paypal</a>
                                    <p class="mb-0 text-muted"><small>28 Aug 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-success fw-bold pe-2">+$684.45</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Zairo landing purchased</a>
                                    <p class="mb-0 text-muted"><small>17 Aug 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-danger fw-bold pe-2">-$21.00</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Purchased Ubold admin template</a>
                                    <p class="mb-0 text-muted"><small>17 Aug 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-danger fw-bold pe-2">-$32.89</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Interest received</a>
                                    <p class="mb-0 text-muted"><small>09 Sep 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-success fw-bold pe-2">+$784.55</span>
                                </div>
                            </div>
                        </div> <!-- end slimscroll -->
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card-->
            </div>
            <!-- end col -->

            <div class="col-xl-4">
                <!-- Messages-->
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title mb-3">People</h4>

                        <div class="inbox-widget">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg"
                                        class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Tomaslau</p>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                <p class="inbox-item-date">
                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg"
                                        class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnotdavid</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg"
                                        class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Kurafire</p>
                                <p class="inbox-item-text">Nice to meet you</p>
                                <p class="inbox-item-date">
                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>

                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg"
                                        class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Shahedk</p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">
                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg"
                                        class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Adhamdannaway</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>
                        </div> <!-- end inbox-widget -->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col-->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title mb-2">Recent Activity</h4>

                        <div data-simplebar style="max-height: 330px;">
                            <div class="timeline-alt pb-0">
                                <div class="timeline-item">
                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="#" class="text-info fw-bold mb-1 d-block">You sold an item</a>
                                        <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">5 minutes ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="#" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap
                                            Market</a>
                                        <small>Dave Gamache added
                                            <span class="fw-bold">Admin Dashboard</span>
                                        </small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">30 minutes ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="#" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
                                        <small>Send you message
                                            <span class="fw-bold">"Are you there?"</span>
                                        </small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">2 hours ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="#" class="text-primary fw-bold mb-1 d-block">Audrey Tobey</a>
                                        <small>Uploaded a photo
                                            <span class="fw-bold">"Error.jpg"</span>
                                        </small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">14 hours ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end timeline -->
                        </div> <!-- end slimscroll -->
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card-->
            </div>
            <!-- end col -->
        </div>
        <!-- end row-->
    </div>
@endsection

@section('scripts')
    <script src="assets/js/vendor/apexcharts.min.js"></script>
    <script src="assets/js/ui/component.chat.js"></script>
    <script src="assets/js/ui/component.todo.js"></script>
    <script src="assets/js/pages/demo.widgets.js"></script>
@endsection
