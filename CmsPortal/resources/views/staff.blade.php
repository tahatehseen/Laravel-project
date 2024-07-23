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
                                                <button type="button" class="btn btn-soft-info btn-sm" data-bs-toggle="modal" data-bs-target="#addstaff">
                                                    <i class="ri ri-team-line align-middle"></i> Add Staff
                                                </button>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-centered align-middle table-nowrap mb-0">
                                                    <thead class="text-muted table-light">
                                                        <tr>
                                                            <th scope="col">Staff ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Username</th>
                                                            <th scope="col">Role</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span>VZ2112</span>
                                                            </td>
                                                            <td>
                                                                <span>Sheeraz</span>
                                                            </td>
                                                            <td>
                                                                <span>sheeraz@mail.com</span>
                                                            </td>
                                                            <td>
                                                                <span>Sheeraz8765</span>
                                                            </td>
                                                            <td>
                                                                <span>admin</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-subtle text-success">Active</span>
                                                            </td>
                                                            <td class="px-4">
                                                                <span>
                                                                    <a href="" data-bs-toggle="modal" data-bs-target="#addstaff" class="text-muted btn btn-icon btn-ghost-secondary rounded-circle" style="font-size: larger;">
                                                                        <i class="bx bx-edit text-mutde"></i>
                                                                    </a>
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
        @include("admin-includes/footer")
    </div>
    <div id="addstaff" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add Staff</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <form action="{{route('addstaff')}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="nameinput" class="form-label">Name</label>
                                    <input required type="text" class="form-control" placeholder="Enter your Name" id="nameinput">
                                </div>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="usernameinput" class="form-label">Username</label>
                                    <input required type="text" class="form-control" placeholder="Enter your Username" id="usernameinput">
                                </div>
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="emailinput" class="form-label">Email</label>
                                    <input required type="text" class="form-control" placeholder="Enter Email" id="emailinput">
                                </div>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="roleselect" class="form-label">Role</label>
                                    <select required id="roleselect" class="form-select">
                                        <option selected disabled>Choose Role</option>
                                        <option>Admin</option>
                                        <option>CSR</option>
                                        <option>Agent</option>
                                    </select>
                                </div>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="statusselect" class="form-label">Status</label>
                                    <select required id="statusselect" class="form-select">
                                        <option selected disabled>Choose Status</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ">Add Staff</button>
                    </div>
                </form>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    @include("admin-includes.theme-backtop-setting")
    <!-- every page links -->
    @include("admin-includes.every_page_links")
    <!-- This Page Links -->
</body>

</html>