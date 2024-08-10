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
                <div class="row mt-5 pt-5">
                    <div class="col-lg-12">
                        <div class="text-center mb-3">
                            <div>
                                <a href="#" class="d-inline-block auth-logo">
                                    <!-- <img src="{{ asset('assets/images/image.png') }}" alt="" height="70"> -->
                                    <h1 class="poppins text-uppercase">survey splash</h1>
                                </a>
                            </div>
                            <!-- <p class="mt-3 fs-15 fw-medium">Lorem ipsum dolor sit amet consectetur.</p> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center h-100">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card border rounded-0 shadow-lg mb-2">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h4>Login and Continue.!</h4>
                                </div>
                                <div class="p-2 mt-3">
                                    <form action="#">
                                        <div class="mb-2">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Password" id="password-input" required>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-dark w-100" type="submit">Login In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                        <p class="text-center">Dont have an Account<a href="{{route('signup')}}"> Sign Up.?</a></p>
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

</html>