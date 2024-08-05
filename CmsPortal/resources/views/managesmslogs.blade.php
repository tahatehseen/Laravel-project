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
                <!-- notification -->
                <div style="display: none; z-index: 3000;" id="notification" class="notification"></div>
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Widgets</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Velzon</a></li>
                                    <li class="breadcrumb-item active">Widgets</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="h-100">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">SMS Templates</h4>
                                            <div class="flex-shrink-0">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#smsModal"  class="btn btn-soft-info btn-sm"><i class="ri-add-line align-middle"></i> Add SMS</button>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-centered align-middle table-nowrap mb-0">
                                                    <thead class="text-muted table-light">
                                                        <tr>
                                                            <th scope="col">Subject</th>
                                                            <th scope="col">Message Body</th>
                                                            <th scope="col">Status</th>
                                                            <th class="px-4" scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span>Greeting</span>
                                                            </td>
                                                            <td class="message_Body">Hi %customer_name% We're thrilled to have you here. Explore our latest collections and enjoy a unique shopping experience.%store_link%</td>
                                                            <td>
                                                                <span class="badge bg-success-subtle text-success">Active</span>
                                                            </td>
                                                            <td>
                                                                <span>
                                                                    <!-- send SMS -->
                                                                    <a title="Send SMS" style="font-size: larger;" class="text-muted btn btn-icon btn-ghost-secondary rounded-circle" href="#"><i class="mdi mdi-send"></i></a>
                                                                    <!-- edit -->
                                                                    <a title="Edit SMS" data-bs-toggle="modal" data-bs-target="#smsModal" style="font-size: larger;" class="text-muted btn btn-icon btn-ghost-secondary rounded-circle" href="#"><i class="ri-edit-fill"></i></a>
                                                                    <!-- Delete -->
                                                                    <a title="Delete" style="font-size: larger;" class="text-muted btn btn-icon btn-ghost-secondary rounded-circle" href="#"><i class="mdi mdi-delete"></i></a>
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
        <!------------------------------- modal html start ------------------------------>
        <!-- emailModal -->
        <div id="smsModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">SMS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <form action="{{route('smslogs')}}">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input required type="text" class="form-control" placeholder="Subject" id="subject">
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="smsbody" class="form-label">Message Body</label>
                                        <textarea class="form-control" rows="4" name="" id="smsbody" placeholder="Type Message"></textarea>
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="statusselect" class="form-label">Status</label>
                                        <select required id="statusselect" class="form-select">
                                            <option selected disabled>Choose Status</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="p-0 textToCopy">%Name%</p>
                                                <p class="p-0 textToCopy">%Email%</p>
                                                <p class="p-0 textToCopy">%Number%</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="p-0 textToCopy">%TICKET_NUMBER%</p>
                                                <p class="p-0 textToCopy">%Order_No%</p>
                                                <p class="p-0 textToCopy">%ORDER_ID%</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="p-0 textToCopy">%ADDRESS1%</p>
                                                <p class="p-0 textToCopy">%AMOUNT%</p>
                                                <p class="p-0 textToCopy">%PRODUCT_LIST%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ">Add SMS</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- emailModal  end-->
        <!------------------------------- modal html end ------------------------------->
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
        $('.message_Body').each(function() {
            var fullText = $(this).text();
            // console.log(fullText);
            if (fullText.length > 80) {
                var truncatedText = fullText.substring(0, 80) + '...';
                $(this).text(truncatedText);
            } else {
                $(this).text(fullText);
            }
        });

         // copy message Variables
         $('.textToCopy').css("cursor", "pointer")
        $('.textToCopy').click(function() {
            var textToCopy = $(this).text();

            navigator.clipboard.writeText(textToCopy).then(function() {
                $('.notification').css('display', 'block');
                $('.notification').html('Variable is Copied'); // Change from $('#notification') to $('.notification')
                $('.notification').fadeIn('fast').delay(800).fadeOut('fast');
            }).catch(function(error) {
                alert('Failed to copy text: ' + error);
            });
        });
    });
</script>

</html>