                <!-- ========== App Menu ========== -->
                <div class="app-menu navbar-menu">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <!-- Dark Logo-->
                        <a href="index-2.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="17">
                            </span>
                        </a>
                        <!-- Light Logo-->
                        <a href="index-2.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="17">
                            </span>
                        </a>
                        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                            <i class="ri-record-circle-line"></i>
                        </button>
                    </div>

                    <div id="scrollbar">
                        <div class="container-fluid">

                            <div id="two-column-menu">
                            </div>
                            <ul class="navbar-nav" id="navbar-nav">
                                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="{{route('home')}}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <i class="las la-tachometer-alt"></i> <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="{{route('addstaff')}}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <i class="ri ri-team-line"></i> <span>Staff</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                        <i class="ri ri-settings-line"></i> <span>Settings</span>
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarLanding">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{route('basicsetting')}}" class="nav-link"> Basic Setting</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{route('notificationsetting')}}" class="nav-link"> Notification Setting</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar -->
                    </div>

                    <div class="sidebar-background"></div>
                </div>
                <!-- Left Sidebar End -->
                <!-- Vertical Overlay-->
                <div class="vertical-overlay"></div>