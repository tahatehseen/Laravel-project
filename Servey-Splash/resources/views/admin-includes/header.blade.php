<style>
    @keyframes wave {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .wave {
        animation: wave 1s infinite;
    }
</style>
<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar" class="border-dark">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex align-items-center">
                    <!-- LOGO -->
                    <div class="navbar-brand-box bg-body d-none d-md-block">
                        <!-- Dark Logo-->
                        <a href="#" class="logo logo-dark">
                            <span class="logo-sm">
                                <!-- <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="35"> -->
                                <h4 class="poppins text-uppercase mt-3">survey splash</h4>
                            </span>
                            <span class="logo-lg">
                                <!-- <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="35"> -->
                                <h4 class="poppins text-uppercase mt-3">survey splash</h4>
                            </span>
                        </a>
                        <!-- Light Logo-->
                        <a href="#" class="logo logo-light">
                            <span class="logo-sm">
                                <!-- <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="35"> -->
                                <h4 class="poppins text-uppercase mt-3">survey splash</h4>
                            </span>
                            <span class="logo-lg">
                                <!-- <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="35"> -->
                                <h4 class="poppins text-uppercase mt-3">survey splash</h4>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                        <span class="hamburger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
                <div class="header-item d-none d-sm-flex">
                    <!-- dashboard -->
                    <div class="ms-1 header-item d-none d-sm-flex">
                        <a href="{{route('dashboard')}}" class="nav-link menu-link btn btn-ghost-secondary p-2">Dashboard</a>
                    </div>
                    <div class="ms-1 header-item d-none d-sm-flex">
                        <a href="#" class="nav-link menu-link btn btn-ghost-secondary p-2">Branch</a>
                    </div>
                    <div class="ms-1 header-item d-none d-sm-flex">
                        <a href="#" class="nav-link menu-link btn btn-ghost-secondary p-2">Add Question</a>
                    </div>
                    <div class="ms-1 header-item d-none d-sm-flex">
                        <a href="#" class="nav-link menu-link btn btn-ghost-secondary p-2">Users</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="ms-1 header-item">
                            <a href="{{route('dashboard')}}" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle">
                                <i class='mdi mdi-home-outline fs-22'></i>
                            </a>
                        </div>
                        <div class="ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>
                        <div class="dropdown ms-sm-3 header-item topbar-user bg-white">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center header-profile-user bg-dark text-white fw-bold">M.T</div>
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">M.Taha</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Web Developer</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end rounded-0 border">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome M.Taha!</h6>
                                <a class="dropdown-item" href="#">
                                    <span class="bg-dark fs-16 align-middle rounded-cricle text-white"></span><span class="align-middle">Switch Profile</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('login')}}"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- removeNotificationModal -->
    <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                    </div>
                </div>

            </div> <!--/.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        $(document).ready(function() {
            // Get the current page URL
            var currentPage = window.location.pathname.split('/').pop();

            // Check if the current page is dashboard.php
            if (currentPage === 'dashboard') {
                $('.mdi-home-outline').removeClass('mdi-home-outline').addClass('mdi-home');
            } else {
                $('.mdi-home').removeClass('mdi-home').addClass('mdi-home-outline');
            }
        });
    </script>