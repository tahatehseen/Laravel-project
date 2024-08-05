<!doctype html>
<html lang="en" data-layout="vertical" data-bs-theme="light" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include("admin-includes.head-links")
    <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->
    <style>
        .hidden-div {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 150px;
            /* background: linear-gradient(180deg, rgb(255 255 255 / 0%), rgb(0 0 0 / 13%), rgb(0 0 0 / 34%)); */
            color: lightgray;
            padding: 10px;
            border: 2px dashed lightgray;
            border-radius: 10px;
            box-sizing: border-box;
            display: flex;
            align-items: end;
            justify-content: center;
            text-align: center;
            transition: 600ms;
        }

        .hidden-div:hover {
            color: black;
            border-color: black;
        }

        .hover-container {
            cursor: pointer;
            position: relative;
            display: inline-block;
            width: 150px;
            height: 150px;
        }
    </style>
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
                                <div class="col-xl-11">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <h6 class="border-bottom pb-2">Store Logo</h6>
                                                    <div class="mx-4">
                                                        <label class="hover-container rounded-4" for="logo">
                                                            <img id="preview" width="150" class="rounded shadow-sm" src="" alt="">
                                                            <div class="hidden-div" style="display:none;">
                                                                <div class="fw-bold">
                                                                    <i class="fs-22 ri-upload-cloud-2-line"></i>
                                                                    <p>Upload your Logo</p>
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <input type="file" id="logo" class="form-control" onchange="PreviewImage()">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <h6 class="border-bottom pb-2">Store Settings</h6>
                                                    <div class="mx-4">
                                                        <div class="mt-5" style="margin-bottom: 19px;">
                                                            <label for="storename">Store Name</label>
                                                            <input id="storename" type="text" class="form-control" placeholder="Store Name">
                                                        </div>
                                                        <div>
                                                            <label for="storeurl">Store URL</label>
                                                            <input id="storeurl" type="text" readonly value="http://127.0.0.1:8000/notificationsetting" class="form-control" placeholder="Store URl">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <h6 class="border-bottom pb-2">SMS Setting</h6>
                                                        <div>
                                                            <div class="mb-2">
                                                                <label for="email1">Email</label>
                                                                <input id="email1" type="text" class="form-control" placeholder="Email">
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="apikey1">API Key:</label>
                                                                <input id="apikey1" type="text" class="form-control" placeholder="API Key">
                                                            </div class="mb-2">
                                                            <div class="mb-2">
                                                                <label for="mask1">Mask:</label>
                                                                <input id="mask1" type="text" class="form-control" placeholder="Mask">
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="deviceId">Device ID:</label>
                                                                <input id="deviceId" type="text" class="form-control" placeholder="Device ID">
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="methood">Method</label>
                                                                <select class="form-select" name="" id="methood">
                                                                    <option selected value="">Select Method</option>
                                                                    <option value="">WhatsApp</option>
                                                                    <option value="">SMS</option>
                                                                    <option value="">WhatsApp + SMS</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <h6 class="border-bottom pb-2">Advanced Setting</h6>
                                                        <div class="mx-4">
                                                            <div class="mb-2">
                                                                <label for="sendSms">Send SMS</label>
                                                                <select class="form-select" name="" id="sendSms">
                                                                    <option selected value="">Enable</option>
                                                                    <option value="">Disable</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-2 mt-3">
                                                                <a href="{{route('smslogs')}}" class="btn btn-sm btn-dark rounded-3 px-4">Manage SMS Templates</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-2">
                                            <button type="submit" class="btn btn-dark btn-sm px-3">save</button>
                                        </div>
                                    </form>
                                    <form id="myForm">
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <h6 class="border-bottom pb-2">Email Setting</h6>
                                                        <div>
                                                            <div class="d-flex">
                                                                <div class="mb-2 form-check mx-3">
                                                                    <label for="default">Default Email Server</label>
                                                                    <input type="radio" class="form-check-input" name="email" id="default" checked>
                                                                </div>
                                                                <div class="mb-2 form-check mx-3">
                                                                    <label for="custom">Custom SMTP</label>
                                                                    <input type="radio" class="form-check-input" name="email" id="custom">
                                                                </div>
                                                            </div>
                                                            <div id="customDiv" style="display: none;">
                                                                <div class="mb-2">
                                                                    <label for="host">Host:</label>
                                                                    <input id="host" type="text" class="form-control" placeholder="Host" required>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="port">Port:</label>
                                                                    <input id="port" type="text" class="form-control" placeholder="Port" required>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="password">Password:</label>
                                                                    <input id="password" type="password" class="form-control" placeholder="PassWord" required>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="email2">Email:</label>
                                                                    <input id="email2" type="email" class="form-control" placeholder="Email" required>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="from">From:</label>
                                                                    <input id="from" type="email" class="form-control" placeholder="From" required>
                                                                </div>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="title">Title:</label>
                                                                <input id="title" type="text" class="form-control" placeholder="Title" required>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="replyTo">Reply To:</label>
                                                                <input id="replyTo" type="text" class="form-control" placeholder="Reply To" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <h6 class="border-bottom pb-2">Advanced Setting</h6>
                                                        <div class="mx-4">
                                                            <div class="mb-2">
                                                                <label for="sendEmail">Send email</label>
                                                                <select class="form-select" name="" id="sendEmail">
                                                                    <option selected value="">Enable</option>
                                                                    <option value="">Disable</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-2 mt-3">
                                                                <a href="{{route('emaillogs')}}" class="btn btn-sm btn-dark rounded-3 px-4">Manage Email Templates</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-2">
                                            <button type="submit" class="btn btn-dark btn-sm px-3">save</button>
                                        </div>
                                    </form>
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
<script>
    $(document).ready(function() {
        // Check if the image src is empty on page load
        if ($('#preview').attr('src') === "") {
            $('.hidden-div').css('display', 'flex');
        }
        if ($('#preview').attr('src') !== "") {
            alert('ok');
            $('.hover-container').hover(
                function() {
                    $('.hidden-div').fadeIn();
                },
                function() {
                    $('.hidden-div').fadeOut();
                }
            );
        }

        $('#custom').change(function() {
            if ($(this).is(':checked')) {
                $('#customDiv').stop(true, true).slideDown();
            }
        });
        $('#default').change(function() {
            if ($(this).is(':checked')) {
                $('#customDiv').stop(true, true).slideUp();
            }
        });

        function updateRequiredAttribute() {
            if ($('#customDiv').css('display') === 'none') {
                $('#customDiv input').removeAttr('required');
            } else {
                $('#customDiv input').attr('required', 'required');
            }
        }

        // Initial check
        updateRequiredAttribute();

        // Form submit event to update required attributes before submission
        $('#myForm').submit(function() {
            updateRequiredAttribute();
            // Allow form to submit
            return true;
        });

        $('#custom').on('click', function(){
            $('#customDiv input').attr('required',true)
        })
    });

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("logo").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("preview").src = oFREvent.target.result;
            // Ensure the hidden div matches the size of the image
            $('.hidden-div').width($('#preview').width());
            $('.hidden-div').height($('#preview').height());
            $('.hidden-div').hide(); // Hide the div initially
        };
    }
</script>

</html>