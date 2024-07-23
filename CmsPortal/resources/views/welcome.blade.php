<!doctype html>
<html lang="en" data-layout="vertical" data-bs-theme="light" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">
<head>
<title>Document</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@include("admin-includes.head-links")
</head>
<body>
<div class="auth-page-wrapper pt-5">
<!-- auth page bg -->
<div class="auth-one-bg-position h-50" id="auth-particles">
    <div class="bg-overlay opacity-25"></div>

    <div class="shape">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
            <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
        </svg>
    </div>
</div>

<!-- auth page content -->
<div class="auth-page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mt-sm-5 mb-4 text-white">
                    <div>
                        <a href="index.php" class="d-inline-block auth-logo">
                            <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="70">
                        </a>
                    </div>
                    <p class="mt-3 fs-15 fw-medium">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mt-4 shadow-lg">

                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h4 class="text-primary">Welcome.!</h4>
                            <p class="text-muted">Sign in to continue.</p>
                        </div>
                        <div class="p-2 mt-4">
                            <form action="/dashboard">

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="password-input">Password</label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" required>
                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-success w-100" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
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
</html>