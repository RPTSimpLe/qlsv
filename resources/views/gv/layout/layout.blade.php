<link rel="stylesheet" href="{{ asset('/user/assets/vendors/mdi/css/materialdesignicons.min.css') }}" type="text/css" >
<link rel="stylesheet" href="{{ asset('/user/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" type="text/css" >
<link rel="stylesheet" href="{{ asset('/user/assets/vendors/css/vendor.bundle.base.css') }}" type="text/css" >
<link rel="stylesheet" href="{{ asset('/user/assets/vendors/font-awesome/css/font-awesome.min.css') }}" type="text/css" >
<link rel="stylesheet" href="{{ asset('/user/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" type="text/css" >
<link rel="stylesheet" href="{{ asset('/user/assets/css/style.css') }}" type="text/css" >
<link rel="shortcut icon" href="https://student.hunre.edu.vn/congthongtin/logo.png" />

<div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
            <a class="sidebar-brand brand-logo" href="index.html"><img class="img-logo" src="https://hunre.edu.vn/media/data/logo-hunre.png" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini pl-3 pt-3" href="index.html"><img src="https://student.hunre.edu.vn/congthongtin/logo.png" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="https://scontent.fhan18-1.fna.fbcdn.net/v/t39.30808-1/333141592_3275806515899074_7162450609244792146_n.jpg?stp=dst-jpg_p240x240&_nc_cat=107&ccb=1-7&_nc_sid=fe8171&_nc_ohc=mV15bDCDce8AX-v7nNj&_nc_ht=scontent.fhan18-1.fna&oh=00_AfDJpFyACzJP-HVj8a94HgoA5srcoJwdf83SK2GZ4T2kQg&oe=65026B75" alt="profile" />
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column pr-3">
                        <span class="font-weight-medium mb-2">RPT SimpLe</span>
                        <span class="font-weight-normal">21111063594</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Trang chủ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-1" aria-expanded="false" aria-controls="ui-basic-1">
                    <i class="mdi mdi-calendar-check menu-icon"></i>
                    <span class="menu-title">Lịch học</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic-1">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/buttons.html">Thời khóa biểu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/typography.html">Chương trình học</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/dropdowns.html">Đăng ký học phần</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/dropdowns.html">Lịch thi</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-bell-ring menu-icon"></i>
                    <span class="menu-title">Thông báo</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-2" aria-expanded="false" aria-controls="ui-basic-2">
                    <i class="mdi mdi-bulletin-board menu-icon"></i>
                    <span class="menu-title">Bảng điểm</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic-2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/buttons.html">Tra cứu điểm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/typography.html">Học phần chưa qua</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-cash-multiple menu-icon"></i>
                    <span class="menu-title">Học phí</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">Basic UI Elements</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/icons/mdi.html">
                    <i class="mdi mdi-contacts menu-icon"></i>
                    <span class="menu-title">Icons</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                    <span class="menu-title">Forms</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/charts/chartjs.html">
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                    <span class="menu-title">Charts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class="mdi mdi-table-large menu-icon"></i>
                    <span class="menu-title">Tables</span>
                </a>
            </li>
            <li class="nav-item">
            <span class="nav-link" href="#">
              <span class="menu-title">Docs</span>
            </span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.bootstrapdash.com/demo/breeze-free/documentation/documentation.html">
                    <i class="mdi mdi-file-document-box menu-icon"></i>
                    <span class="menu-title">Documentation</span>
                </a>
            </li>
            <li class="nav-item sidebar-actions">
                <div class="nav-link">
                    <div class="mt-4">
                        <div class="border-none">
                            <p class="text-black">Notification</p>
                        </div>
                        <ul class="mt-4 pl-0">
                            <li>Sign Out</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles light"></div>
                <div class="tiles dark"></div>
            </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                    <i class="mdi mdi-menu"></i>
                </button>
                <ul class="navbar-nav navbar-nav-right ml-lg-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count count-varient1">7</span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                                </div>
                                <div class="preview-item-content">
                                    <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                                </div>
                                <div class="preview-item-content">
                                    <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="assets/images/faces/face2.jpg" alt="" class="profile-pic" />
                                </div>
                                <div class="preview-item-content">
                                    <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0">View all activities</p>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown border-0">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                            <img class="nav-profile-img mr-2" alt="" src="https://scontent.fhan18-1.fna.fbcdn.net/v/t39.30808-1/333141592_3275806515899074_7162450609244792146_n.jpg?stp=dst-jpg_p240x240&_nc_cat=107&ccb=1-7&_nc_sid=fe8171&_nc_ohc=mV15bDCDce8AX-v7nNj&_nc_ht=scontent.fhan18-1.fna&oh=00_AfDJpFyACzJP-HVj8a94HgoA5srcoJwdf83SK2GZ4T2kQg&oe=65026B75" />
                            <span class="profile-name">RPT SimpLe</span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-account-circle mr-2 text-primary"></i>Tài khoản </a>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-logout mr-2 text-primary"></i>Đăng xuất </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="main-panel">

            @yield("page")

            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from Bootstrapdash.com</span>
                </div>
            </footer>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src=" {{asset("user/assets/vendors/js/vendor.bundle.base.js")}} "></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=" {{asset("user/assets/vendors/chart.js/Chart.min.js")}} "></script>
<script src=" {{asset("user/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js")}} "></script>
<script src=" {{asset("user/assets/vendors/flot/jquery.flot.js")}} "></script>
<script src=" {{asset("user/assets/vendors/flot/jquery.flot.resize.js")}} "></script>
<script src=" {{asset("user/assets/vendors/flot/jquery.flot.categories.js")}} "></script>
<script src=" {{asset("user/assets/vendors/flot/jquery.flot.fillbetween.js")}} "></script>
<script src=" {{asset("user/assets/vendors/flot/jquery.flot.stack.js")}} "></script>
<script src=" {{asset("user/assets/vendors/flot/jquery.flot.pie.js")}} "></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=" {{asset("user/assets/js/off-canvas.js")}} "></script>
<script src=" {{asset("user/assets/js/hoverable-collapse.js")}} "></script>
<script src=" {{asset("user/assets/js/misc.js")}} "></script>
<!-- endinject -->
