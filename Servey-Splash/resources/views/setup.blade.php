<!doctype html>
<html lang="en" data-layout="vertical" data-bs-theme="light" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="enable">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("admin-includes.head-links")

</head>

<body>
    <div class="auth-page-wrapper pt-5">
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-4">
                            <div>
                                <a href="index.php" class="d-inline-block auth-logo">
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="70">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div> -->
                <!-- end row -->

                <div class="row justify-content-center h-100">
                    <div class="col-md-12 col-lg-8 col-xl-8 mt-5 pt-5">
                        <div class="card rounded-0 shadow border">

                            <div class="card-body p-3">
                                <form action="{{route('dashboard')}}">
                                    <div class="p-2" id="addStore" style="display: block;">
                                        <div class="text-center mt-2">
                                            <h4>Add Store</h4>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-n4">
                                                <label for="store_logo" class="form-label cursor-pointer">
                                                    <img class="img-thumbnail rounded-pill" width="100" id="preview" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSKTg9Wod4HoFSAsaXcqxRzDrNtrsL-_vrcrrf48PFUH24cE7eA" alt="">
                                                </label>
                                                <input type="file" name="store_logo" class="form-control" id="store_logo" placeholder="Enter Store Address" onchange="PreviewImage()">
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-5 pt-2">
                                                <label for="store_name" class="form-label">Store Name</label>
                                                <input type="text" name="store_name" class="form-control" id="store_name" placeholder="Enter Store Name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <label for="store_email" class="form-label">Store Email</label>
                                                <input type="email" name="store_email" class="form-control" id="store_email" placeholder="Enter Store Email">
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <label for="store_mobile" class="form-label">Store Phone</label>
                                                <input type="text" name="store_mobile" class="form-control" id="store_mobile" placeholder="Enter Store Phone">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="store_address" class="form-label">Store Address</label>
                                                <textarea rows="3" name="store_address" class="form-control" id="store_address" placeholder="Enter Store Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="border-top mt-2 pt-1">
                                            <div class="d-flex justify-content-end">
                                                <a id="next1" class="btn btn-sm btn-dark px-3">Next&nbsp;<i style="vertical-align: bottom;" class="ri-arrow-right-line"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" id="selectIndustry" style="display:none;">
                                        <div class="text-center mt-2">
                                            <h4>Select Industry</h4>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10 col-xsm-12">
                                                <label for="industry-select" class="form-label">Select Industry</label>
                                                <select class="form-control" name="" id="industry-select">
                                                    <option selected disabled>Select Industry</option>
                                                    <option value="">Industry 1</option>
                                                    <option value="">Industry 2</option>
                                                    <option value="">Industry 3</option>
                                                    <option value="">Industry 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="border-top mt-3 pt-1">
                                            <div class="d-flex justify-content-between">
                                                <a id="back1" class="btn btn-sm btn-dark px-3"><i style="vertical-align: bottom;" class="ri-arrow-left-line"></i>&nbsp;Back</a>
                                                <a id="next2" class="btn btn-sm btn-dark px-3">Next&nbsp;<i style="vertical-align: bottom;" class="ri-arrow-right-line"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2" id="question-Selection" style="display:none;">
                                        <div>
                                            <div class="mb-3">
                                                <label for="question1" class="form-label">How would you rate your overall experience with our service?</label>
                                                <div id="question1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="excellent">
                                                        <label class="form-check-label" for="excellent">
                                                            Excellent
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="good">
                                                        <label class="form-check-label" for="good">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="average">
                                                        <label class="form-check-label" for="average">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="poor">
                                                        <label class="form-check-label" for="poor">
                                                            Poor
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top mt-2 pt-1">
                                            <div class="d-flex justify-content-between">
                                                <a id="back2" class="btn btn-sm btn-dark px-3"><i style="vertical-align: bottom;" class="ri-arrow-left-line"></i>&nbsp;Back</a>
                                                <button type="submit" class="btn btn-sm btn-dark px-3">Done&nbsp;<i style="vertical-align: bottom;" class="ri-arrow-right-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script><a href="https://www.h3techs.com" class="text-muted" target="_blank" rel="noopener noreferrer"> Admin pannel Developed by H3 Technologies.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
</body>
<!-- every page links -->
@include("admin-includes.every_page_links")
<!-- This Page Links -->
<!-- particles js -->
<script src="{{ asset('assets/libs/particles.js/particles.js') }}"></script>
<!-- particles app js -->
<script src="{{ asset('assets/js/pages/particles.app.js') }}"></script>
<!-- password-addon init -->
<script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>
<!-- js code -->
<script>
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("store_logo").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("preview").src = oFREvent.target.result;
        };
    };
    $(document).ready(function() {
        $('#next1').on('click', function() {
            $('#addStore').hide();
            $('#selectIndustry').show();
        });
        $('#back1').on('click', function() {
            $('#addStore').show();
            $('#selectIndustry').hide();
        });
        $('#back2').on('click', function() {
            $('#addStore').hide();
            $('#question-Selection').hide();
            $('#selectIndustry').show();
        });
        $('#next2').on('click', function() {
            $('#addStore').hide();
            $('#selectIndustry').hide();
            $('#question-Selection').show();
        });
    });
</script>

</html>