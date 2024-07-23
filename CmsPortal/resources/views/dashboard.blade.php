<!doctype html>
<html lang="en" data-layout="vertical" data-bs-theme="light" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include("admin-includes.head-links")
    <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->

</head>

<body>
    @include("admin-includes.header")
    @include("admin-includes.sidebar")

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="h-100">
                            <div class="d-flex mb-2 px-5 justify-content-end">
                                <div class="d-flex" style="margin-right: 5%;">
                                    <div style="margin-right: 10px; width: 190px;">
                                        <select class="form-select form-select-sm" name="" id="">
                                            <option selected value="">All</option>
                                            <option value="">Open Tickets</option>
                                            <option value="">Close Tickets</option>
                                            <option value="">Complete Tickets</option>
                                        </select>
                                    </div>
                                    <div style="margin-left: 10px; width: 190px;">
                                        <select class="form-select form-select-sm" name="" id="">
                                            <option selected value="">All</option>
                                            <option value="">Last 7 Days</option>
                                            <option value="">Last 17 Days</option>
                                            <option value="">Last 30 Days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!---------------------------------- Start card Row -------------------------------------------->
                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <div class="row justify-content-center" style="margin-top:10px;">
                                        <div class="col-xl-4 col-md-6 col-sm-6 col-xsm-12 px-2" style="margin:-5px 0px;">
                                            <!-- card -->
                                            <div class="card card-animate rounded-3">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                                <i style="vertical-align: middle;" class="ri-apps-line"></i> App Status
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-0 overflow-hidden mt-2" style="padding-bottom: 2px;">
                                                        <span class="badge badge-border bg-success-subtle text-success fw-semibold fs-15">Enable</span>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
        
                                        <div class="col-xl-4 col-md-6 col-sm-6 col-xsm-12 px-2" style="margin:-5px 0px;">
                                            <!-- card -->
                                            <div class="card card-animate rounded-3">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                                <i style="vertical-align: middle;" class="ri-team-line"></i> Active Staff
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-0 overflow-hidden mt-2">
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="160">0</span></h4>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
        
                                        <div class="col-xl-4 col-md-6 col-sm-6 col-xsm-12 px-2" style="margin:-5px 0px;">
                                            <!-- card -->
                                            <div class="card card-animate rounded-3">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                                <i style="vertical-align: middle;" class="bx bx-chat"></i> Active Complaints
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-0 overflow-hidden mt-2">
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="50">0</span></h4>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div>
                                </div>
                            </div> <!-- end row-->
                            <!---------------------------------- end card Row -------------------------------------------->
                            <!---------------------------------- Chart Row Start -------------------------------------------->
                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <div class="card">
                                        <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Last 30 Days</h4>
                                        </div><!-- end card header -->

                                        <div class="card-header p-0 border-0 bg-light-subtle">
                                            <div class="row g-0 text-center">
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-xsm-12">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value" data-target="50">0</span></h5>
                                                        <p class="text-muted mb-0">Open Tickets</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-xsm-12">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value" data-target="50">0</span></h5>
                                                        <p class="text-muted mb-0">Active Complaints</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-xsm-12">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value" data-target="360">0</span></h5>
                                                        <p class="text-muted mb-0">Total Staff</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body p-3">
                                            <div class="w-100">
                                                <div id="customer_impression_charts" data-colors='["--vz-warning", "--vz-primary", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div>
                            <!---------------------------------- Chart Row End -------------------------------------------->
                        </div> <!-- end .h-100-->
                    </div> <!-- end col -->
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <!-- footer here -->
        @include("admin-includes.footer")
    </div>
    @include("admin-includes.theme-backtop-setting")
    <!-- every page links -->
    @include("admin-includes.every_page_links")
    <!-- This Page Links -->
    <!-- charts js -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
</body>

</html>