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
                                    <div>
                                        <div class="card rounded-3">
                                            <div class="card-header p-2">
                                                <h5>Basic Setting</h5>
                                            </div>
                                            <div class="card-body">
                                                <!-- Ticket Status -->
                                                <div class="row mb-3">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <form>
                                                            <label for="ticketStatus">Ticket Status:</label>
                                                            <div class="d-flex input-group">
                                                                <input type="text" id="ticketStatus" class="form-control" placeholder="Ticket Status" required>
                                                                <button class="btn btn-dark"><i class="bx bx-plus align-middle"></i> Add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <div class="row mt-2">
                                                            <div class="col-4 align-items-center">
                                                                <ul class="mb-0">
                                                                    <li>Open</li>
                                                                    <li>Close</li>
                                                                    <li>Complete</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-8">
                                                                <li style="display: flex; justify-content: end;">
                                                                    <span style="margin-left: 15px;">
                                                                        <input class="red-radio" value="red" type="radio" name="open" id="openColor1">
                                                                        <input class="green-radio" value="green" type="radio" name="open" id="openColor2" checked="">
                                                                        <input class="orange-radio" value="#ff9d2c" type="radio" name="open" id="openColor3">
                                                                        <input class="dark-radio" value="#b5b5b5" type="radio" name="open" id="openColor4">
                                                                        <input class="yellow-radio" value="#fccc48" type="radio" name="open" id="openColor5">
                                                                        <input class="blue-radio" value="#1d92ff" type="radio" name="open" id="openColor6">
                                                                    </span>
                                                                </li>
                                                                <li style="display: flex; justify-content: end;">
                                                                    <span style="margin-left: 15px;">
                                                                        <input class="red-radio" value="red" type="radio" name="close" id="closeColor1">
                                                                        <input class="green-radio" value="green" type="radio" name="close" id="closeColor2">
                                                                        <input class="orange-radio" value="#ff9d2c" type="radio" name="close" id="closeColor3">
                                                                        <input class="dark-radio" value="#b5b5b5" type="radio" name="close" id="closeColor4"checked="">
                                                                        <input class="yellow-radio" value="#fccc48" type="radio" name="close" id="closeColor5">
                                                                        <input class="blue-radio" value="#1d92ff" type="radio" name="close" id="closeColor6">
                                                                    </span>
                                                                </li>
                                                                <li style="display: flex; justify-content: end;">
                                                                    <span style="margin-left: 15px;">
                                                                        <input class="red-radio" value="red" type="radio" name="complete" id="completeColor1">
                                                                        <input class="green-radio" value="green" type="radio" name="complete" id="completeColor2" >
                                                                        <input class="orange-radio" value="#ff9d2c" type="radio" name="complete" id="completeColor3"checked="">
                                                                        <input class="dark-radio" value="#b5b5b5" type="radio" name="complete" id="completeColor4">
                                                                        <input class="yellow-radio" value="#fccc48" type="radio" name="complete" id="completeColor5">
                                                                        <input class="blue-radio" value="#1d92ff" type="radio" name="complete" id="completeColor6">
                                                                    </span>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- Ticket Priority -->
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <form>
                                                            <label for="ticketPriority">Ticket Priority:</label>
                                                            <div class="d-flex input-group">
                                                                <input type="text" id="ticketPriority" class="form-control" placeholder="Ticket Priority" required>
                                                                <button class="btn btn-dark"><i class="bx bx-plus align-middle"></i> Add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <div class="row mt-2">
                                                            <div class="col-4 align-items-center">
                                                                <ul class="mb-0">
                                                                    <li>High</li>
                                                                    <li>Medium</li>
                                                                    <li>Low</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-8">
                                                                <li style="display: flex; justify-content: end;">
                                                                    <span style="margin-left: 15px;">
                                                                        <input class="red-radio" value="red" type="radio" name="high" id="highColor1">
                                                                        <input class="green-radio" value="green" type="radio" name="high" id="highColor2" checked="">
                                                                        <input class="orange-radio" value="#ff9d2c" type="radio" name="high" id="highColor3">
                                                                        <input class="dark-radio" value="#b5b5b5" type="radio" name="high" id="highColor4">
                                                                        <input class="yellow-radio" value="#fccc48" type="radio" name="high" id="highColor5">
                                                                        <input class="blue-radio" value="#1d92ff" type="radio" name="high" id="highColor6">
                                                                    </span>
                                                                </li>
                                                                <li style="display: flex; justify-content: end;">
                                                                    <span style="margin-left: 15px;">
                                                                        <input class="red-radio" value="red" type="radio" name="medium" id="mediumColor1">
                                                                        <input class="green-radio" value="green" type="radio" name="medium" id="mediumColor2">
                                                                        <input class="orange-radio" value="#ff9d2c" type="radio" name="medium" id="mediumColor3">
                                                                        <input class="dark-radio" value="#b5b5b5" type="radio" name="medium" id="mediumColor4"checked="">
                                                                        <input class="yellow-radio" value="#fccc48" type="radio" name="medium" id="mediumColor5">
                                                                        <input class="blue-radio" value="#1d92ff" type="radio" name="medium" id="mediumColor6">
                                                                    </span>
                                                                </li>
                                                                <li style="display: flex; justify-content: end;">
                                                                    <span style="margin-left: 15px;">
                                                                        <input class="red-radio" value="red" type="radio" name="low" id="lowColor1">
                                                                        <input class="green-radio" value="green" type="radio" name="low" id="lowColor2" >
                                                                        <input class="orange-radio" value="#ff9d2c" type="radio" name="low" id="lowColor3"checked="">
                                                                        <input class="dark-radio" value="#b5b5b5" type="radio" name="low" id="lowColor4">
                                                                        <input class="yellow-radio" value="#fccc48" type="radio" name="low" id="lowColor5">
                                                                        <input class="blue-radio" value="#1d92ff" type="radio" name="low" id="lowColor6">
                                                                    </span>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- Role -->
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <form>
                                                            <label for="roleInput">Role:</label>
                                                            <div class="d-flex input-group">
                                                                <input type="text" id="roleInput" class="form-control" placeholder="Role" required>
                                                                <button class="btn btn-dark"><i class="bx bx-plus align-middle"></i> Add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-4 mt-2 align-items-center">
                                                                <ul class="mb-0">
                                                                    <li>Admin</li>
                                                                    <li>CSR</li>
                                                                    <li>Agent</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-8">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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