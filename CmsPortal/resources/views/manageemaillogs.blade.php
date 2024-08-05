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
                                            <h4 class="card-title mb-0 flex-grow-1">Email Templates</h4>
                                            <div class="flex-shrink-0">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#emailModal" class="btn btn-soft-info btn-sm"><i class="ri-add-line align-middle"></i> Add Email</button>
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
                                                                    <!-- send mail -->
                                                                    <a title="Send Email" style="font-size: larger;" class="text-muted btn btn-icon btn-ghost-secondary rounded-circle" href="#"><i class="mdi mdi-send"></i></a>
                                                                    <!-- preview -->
                                                                    <a title="Preview Email" data-bs-toggle="modal" data-bs-target="#previewModal" style="font-size: larger;" class="text-muted btn btn-icon btn-ghost-secondary rounded-circle" href="#"><i class="mdi mdi-eye"></i></a>
                                                                    <!-- edit -->
                                                                    <a title="Edit Email" data-bs-toggle="modal" data-bs-target="#emailModal" style="font-size: larger;" class="text-muted btn btn-icon btn-ghost-secondary rounded-circle" href="#"><i class="ri-edit-fill"></i></a>
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
        <div id="emailModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Email</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <form action="{{route('emaillogs')}}">
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
                                        <label for="msgEmail" class="form-label">Message Body</label>
                                        <textarea class="form-control" rows="4" name="" id="msgEmail" placeholder="Type Message"></textarea>
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
                            <button type="submit" class="btn btn-primary ">Add Email</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- emailModal  end-->
        <!-- previewModal -->
        <div id="previewModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Email Preview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <!-- preview template code -->
                        <style>
                            .contact-container {
                                max-width: 600px;
                                margin: 20px auto;
                                background: #fff;
                                border-radius: 10px;
                                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                                overflow: hidden;
                            }

                            .contact-header {
                                background: linear-gradient(180deg, rgba(0, 78, 162, 1) 0%, rgba(0, 109, 227, 1) 36%, rgba(13, 206, 245, 1) 100%);
                                color: white !important;
                                padding: 20px;
                                text-align: center;
                                border-top-left-radius: 10px;
                                border-top-right-radius: 10px;
                            }

                            .contact-content {
                                padding: 20px;
                            }

                            .contact-order-details {
                                background: #f9f9f9;
                                border-left: 5px solid #007BFF;
                                border-radius: 5px;
                                padding: 15px;
                                margin-bottom: 20px;
                            }

                            .contact-order-details p {
                                margin: 8px 0;
                            }

                            .contact-issue-list {
                                list-style: none;
                                padding: 0;
                                margin-top: 10px;
                            }

                            .contact-issue-item {
                                margin-bottom: 10px;
                                padding: 10px;
                                background: #f9f9f9;
                                border-left: 5px solid #007BFF;
                                border-radius: 5px;
                            }

                            .contact-product-images {
                                display: flex;
                                gap: 10px;
                                margin-top: 20px;
                                margin-bottom: 20px;
                            }

                            .contact-product-card {
                                border: 1px solid #ddd;
                                border-radius: 8px;
                                overflow: hidden;
                                height: auto;
                                width: auto;
                                width: 30%;
                                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                            }

                            .contact-product-card img {
                                display: block;
                            }

                            .contact-product-card p {
                                margin: 0;
                                padding: 10px;
                                background: #f1f1f1;
                                text-align: center;
                            }

                            .contact-purpose {
                                background: #e9f7ff;
                                padding: 20px;
                                border: 1px solid #007BFF;
                                border-radius: 10px;
                                margin-top: 20px;
                            }

                            .contact-purpose h3 {
                                margin-top: 0;
                                color: #007BFF;
                            }

                            .contact-footer {
                                text-align: center;
                                font-size: 0.9em;
                                color: #666;
                                margin-top: 20px;
                                padding: 10px;
                                background: #f9f9f9;
                                border-bottom-left-radius: 10px;
                                border-bottom-right-radius: 10px;
                            }
                        </style>
                        <div class="contact-container">
                            <div class="contact-header">
                                <h1 class="text-white">Thank you for contacting us</h1>
                            </div>
                            <div class="contact-content">
                                <p>Dear <span class="customer-name">[Customer Name]</span>,</p>
                                <p>Thank you for reaching out regarding your recent order. We are sorry to hear that you encountered issues. Below are the details:</p>

                                <div class="contact-order-details">
                                    <h3 style="margin-top: 0px;">Complaint Details</h3>
                                    <p><strong>Order Number:</strong> <span class="order-number">[Order Number]</span></p>
                                    <p><strong>Customer Name:</strong> <span class="order-customer-name">[Customer Name]</span></p>
                                    <p><strong>Delivery Date:</strong> <span class="delivery-date">[Delivery Date]</span></p>
                                    <p><strong>Tracking Number:</strong> <span class="tracking-number">[Tracking Number]</span></p>
                                </div>

                                <div class="contact-issue-list">
                                    <li class="contact-issue-item"><strong>Product Issue:</strong> Size, Color, Variant</li>
                                    <li class="contact-issue-item"><strong>Delivery Issue:</strong> Late Delivery</li>
                                </div>
                                <h3>Product Images</h3>
                                <div class="contact-product-images">
                                    <div class="contact-product-card" style="margin: 5px;">
                                        <img style="height:80%; width: 80%;" src="https://belodore.rs/media/amasty/amoptmobile/catalog/product/cache/08cd9d1a69d3b81aa4ac293076519bc7/X/E/XE33726-2-Xerjoff_Xerjoff_V_Opera_100ml_EDP_1_1_jpg.webp" alt="Product Image 1">
                                        <p>Product Name 1</p>
                                    </div>
                                    <div class="contact-product-card" style="margin: 5px;">
                                        <img style="height:80%; width: 80%;" src="https://static.beautytocare.com/media/catalog/product/c/o/coach-eau-de-toilette-for-men-100ml_1.jpg" alt="Product Image 2">
                                        <p>Product Name 2</p>
                                    </div>
                                    <div class="contact-product-card" style="margin: 5px;">
                                        <img style="height:80%; width: 80%;" src="https://opiofragrances.pk/wp-content/uploads/2021/07/icnic-men.jpg" alt="Product Image 3">
                                        <p>Product Name 3</p>
                                    </div>
                                </div>

                                <div class="contact-purpose">
                                    <h3>Order Exchange</h3>
                                    <ol>
                                        <li>Reply to this email with the order number and details of the product you wish to exchange.</li>
                                        <li>Ensure the product is in its original condition and packaging.</li>
                                        <li>We will provide you with a prepaid shipping label after receiving your response.</li>
                                        <li>Upon receiving the returned product, we will promptly process your exchange.</li>
                                    </ol>
                                </div>

                                <p>If you have any further questions or additional information, please reply to this email or contact our customer support at <span class="customer-support-contact">[Customer Support Contact Information]</span>.</p>

                                <p>Thank you for your patience and understanding.</p>
                                <p>Sincerely,<br>The <span class="company-name">[Your Company Name]</span> Team</p>
                            </div>
                            <div class="contact-footer">
                                <p>&copy; 2024 <span class="company-name-footer">[Your Company Name]</span>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <a href="#" class="btn btn-primary"><i class="mdi mdi-send"></i> Send Mail</a>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- previewModal  end-->
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