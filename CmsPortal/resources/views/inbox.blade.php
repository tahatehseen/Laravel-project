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
                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Complaints Tickets</h4>
                                            <div class="flex-shrink-0">
                                                <!-- <button type="button" class="btn btn-soft-info btn-sm">
                                                    <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                                </button> -->
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-centered align-middle table-nowrap mb-0">
                                                    <thead class="text-muted table-light">
                                                        <tr>
                                                            <th scope="col">Ticket No</th>
                                                            <th scope="col">Details</th>
                                                            <th scope="col">Agent</th>
                                                            <th scope="col">Transfer</th>
                                                            <th scope="col">Priority</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Notification</th>
                                                            <th scope="col">Update</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="{{route('chat')}}" class="fw-medium link-primary">#VZ2112</a>
                                                            </td>
                                                            <td>
                                                                <span>Order Exchange</span>
                                                            </td>
                                                            <td>
                                                                <span>Danish</span>
                                                            </td>
                                                            <td>
                                                                <span>Sheeraz</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning-subtle text-warning">High</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-subtle text-success">Open</span>
                                                            </td>
                                                            <td class="px-4">
                                                                <span>
                                                                    <a href="{{route('chat')}}" class="text-muted" style="position: relative; display: inline-block;">
                                                                        <div class="count" style="position: absolute; top: -5px; right: -7px; border-radius: 50%; padding: 3px; font-size: 10px; background: #9d9d9d; height: 13px; width: 13px; display: flex; align-items: center; justify-content: center; color: white;">0</div>
                                                                        <i class="ri-message-3-line text-mutde" style="font-size: larger;"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span>22-7-24</span>
                                                            </td>
                                                            <td>
                                                                <span>
                                                                    <a style="font-size: larger;" class="text-muted btn btn-icon btn-ghost-secondary rounded-circle" href="{{route('chat')}}"><i class="mdi mdi-eye-arrow-right-outline"></i></a>
                                                                </span>
                                                            </td>
                                                        </tr><!-- end tr -->
                                                        <tr>
                                                            <td>
                                                                <a href="{{route('chat')}}" class="fw-medium link-primary">#VZ2112</a>
                                                            </td>
                                                            <td>
                                                                <span>Order Exchange</span>
                                                            </td>
                                                            <td>
                                                                <span>Danish</span>
                                                            </td>
                                                            <td>
                                                                <span>Sheeraz</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning-subtle text-warning">High</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-subtle text-success">Open</span>
                                                            </td>
                                                            <td class="px-4">
                                                                <span>
                                                                    <a href="{{route('chat')}}" class="text-muted" style="position: relative; display: inline-block;">
                                                                        <div class="count" style="position: absolute; top: -5px; right: -7px; border-radius: 50%; padding: 3px; font-size: 10px; background: #9d9d9d; height: 13px; width: 13px; display: flex; align-items: center; justify-content: center; color: white;">0</div>
                                                                        <i class="ri-message-3-line text-mutde" style="font-size: larger;"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span>22-7-24</span>
                                                            </td>
                                                            <td>
                                                                <span>
                                                                    <a style="font-size: larger;" class="text-muted btn btn-icon btn-ghost-secondary rounded-circle" href="{{route('chat')}}"><i class="mdi mdi-eye-arrow-right-outline"></i></a>
                                                                </span>
                                                            </td>
                                                        </tr><!-- end tr -->
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                            </div>
                                        </div>
                                    </div> <!-- .card-->
                                </div>
                            </div>
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
    <!-- <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script> -->
</body>

</html>