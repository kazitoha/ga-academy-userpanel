<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title><?php echo $url=Route::current()->uri; ?> | <?php echo e(config('app.name', 'Laravel')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('public_asset/images/logo.jpg')); ?>">

    <!-- slick css -->
    <link href="<?php echo e(asset('admin_asset/assets/libs/slick-slider/slick/slick.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin_asset/assets/libs/slick-slider/slick/slick-theme.css')); ?>" rel="stylesheet"
        type="text/css" />

    <!-- jvectormap -->
    <link href="<?php echo e(asset('admin_asset/assets/libs/jqvmap/jqvmap.min.css')); ?>" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="<?php echo e(asset('admin_asset/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(asset('admin_asset/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Responsive Table css -->
    <link href="<?php echo e(asset('admin_asset/assets/libs/RWD-Table-Patterns/css/rwd-table.min.css')); ?>" rel="stylesheet"
        type="text/css" />

    <!-- App Css-->
    <link href="<?php echo e(asset('admin_asset/assets/css/app.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- toster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Lightbox css -->





</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?php echo e(asset('public_asset/images/logo.jpg')); ?>" alt="">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo e(asset('public_asset/images/logo.jpg')); ?>" alt=""
                                    style="width: 76px; height: 69px;">
                            </span>
                        </a>

                        <a href="#" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?php echo e(asset('public_asset/images/logo.jpg')); ?>" alt=""
                                    style="width: -1px;height: 28px;">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo e(asset('public_asset/images/logo.jpg')); ?>" alt=""
                                    style="width: 73px; height: 64px;">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="mdi mdi-backburger"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="mdi mdi-magnify"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>




                    <div class="dropdown d-inline-block">

                        <span class="inline-flex rounded-md">




                            <?php if(Laravel\Jetstream\Jetstream::managesProfilePhotos()): ?>
                                <button type="button" class="btn header-item waves-effect"
                                    id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img class="rounded-circle header-profile-user"
                                        src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="d-none d-sm-inline-block ml-1"><?php echo e(Auth::user()->name); ?></span>
                                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                </button>
                            <?php else: ?>
                                <button type="button" class="btn header-item waves-effect"
                                    id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img class="rounded-circle header-profile-user"
                                        src="<?php echo e(asset('admin_asset/assets/images/users/avatar-1.jpg')); ?>"
                                        alt="Header Avatar">
                                    <span class="d-none d-sm-inline-block ml-1"><?php echo e(Auth::user()->name); ?></span>
                                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                </button>
                            <?php endif; ?>

                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('profile.show')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('profile.show')).'']); ?>
                                    <?php echo e(__('Profile')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']); ?>
                                        <i class="fa fa-sign-out"></i><?php echo e(__('Logout')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                </form>
                            </div>
                    </div>
                </div>








            </div>
    </div>


    </div>
    </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="<?php echo e(url('admin/dashboard')); ?>" class="waves-effect">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/')); ?>" class="waves-effect" target="_blank">
                            <i class="mdi mdi-internet-explorer"></i>
                            <span>Visit Website</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-note-text"></i>
                            <span>Notice</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?php echo e(route('notice.view')); ?>">Add Notice</a></li>
                            <li><a href="<?php echo e(route('notice.list')); ?>">Notice List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-message-text-clock-outline"></i>
                            <span>Event</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?php echo e(route('event.view')); ?>">Add Event</a></li>
                            <li><a href="<?php echo e(route('event.list')); ?>">Event List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-folder-information-outline"></i>
                            <span>News</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?php echo e(route('news.view')); ?>">Add News</a></li>
                            <li><a href="<?php echo e(route('news.list')); ?>">News List</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-smart-card-outline"></i>
                            <span class="badge badge-pill badge-success float-right">2</span>
                            <span>Teacher & Stuff Info</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?php echo e(route('staff.view')); ?>">Add Teacher & Stuff Info</a></li>
                            <li><a href="<?php echo e(route('staff.list')); ?>">Teacher & Stuff List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-account-multiple-outline"></i>
                            <span class="badge badge-pill badge-success float-right">2</span>
                            <span>Committee</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?php echo e(route('committee.view')); ?>">Add Committee Member </a></li>
                            <li><a href="<?php echo e(route('committee.list')); ?>">Committee List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo e(route('gallery.view')); ?>" class="waves-effect">
                            <i class="mdi mdi-image"></i>
                            <span>Gallery</span>
                        </a>
                    </li>


                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-note-text"></i>
                            <span>Website Settings</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?php echo e(route('banner.view')); ?>">Banner</a></li>
                        </ul>
                    </li>




                </ul>


            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">











                <?php echo $__env->yieldContent('adminpanel-navbar'); ?>











            </div> <!-- container-fluid -->

        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        2022 © FENI GIRISH-AKSHAY ACADEMY.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
                                href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwQncjStzfPxssNZPPPJrWxnGvvZwczZSPxMrTfsrGJnbvxcwfSjKMRvlxnfBQcmmzjFJWP">TeamNexio</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="<?php echo e(asset('admin_asset/assets/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/assets/libs/node-waves/waves.min.js')); ?>"></script>



    <!-- apexcharts -->
    <script src="<?php echo e(asset('admin_asset/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <script src="<?php echo e(asset('admin_asset/assets/libs/slick-slider/slick/slick.min.js')); ?>"></script>

    <!-- Jq vector map -->
    <script src="<?php echo e(asset('admin_asset/assets/libs/jqvmap/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_asset/assets/libs/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>

    <script src="<?php echo e(asset('admin_asset/assets/js/pages/dashboard.init.js')); ?>"></script>

    <!-- Magnific Popup-->
    <script src="<?php echo e(asset('admin_asset/assets/libs/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>

    <!-- Tour init js-->
    <script src="<?php echo e(asset('admin_asset/assets/js/pages/gallery.init.js')); ?>"></script>

    <!-- dropzone js -->
    <script src="<?php echo e(asset('admin_asset/assets/libs/dropzone/min/dropzone.min.js')); ?>"></script>

    <!-- Responsive Table js -->
    <script src="<?php echo e(asset('admin_asset/assets/libs/RWD-Table-Patterns/js/rwd-table.min.js')); ?>"></script>
    <!-- Init js -->
    <script src="<?php echo e(asset('admin_asset/assets/js/pages/table-responsive.init.js')); ?>"></script>




    <script src="<?php echo e(asset('admin_asset/assets/js/app.js')); ?>"></script>
    <script>
        <?php if(Session::has('message')): ?>
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
            // toastr.options.positionClass = 'toast-bottom-right';
            toastr.success("<?php echo e(session('message')); ?>");
        <?php endif; ?>

        <?php if(Session::has('error')): ?>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("<?php echo e(session('info')); ?>");
        <?php endif; ?>

        <?php if(Session::has('warning')): ?>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("<?php echo e(session('warning')); ?>");
        <?php endif; ?>
    </script>


    
    <style>
        #img {
            display: none;
        }
        #pdf {
            display: none;
        }
    </style>
    <script>
        function inputImg() {
            pdf.style.display = "none";
            var img = document.getElementById("img");
            if (img.style.display === "block") {
                img.style.display = "none";
            } else {
                img.style.display = "block";
            }


        }

        function inputPdf() {
            // var pdf = document.getElementById("flexRadioDefault2").value;
            img.style.display = "none";
            var pdf = document.getElementById("pdf");
            if (pdf.style.display === "block") {
                pdf.style.display = "none";
            } else {
                pdf.style.display = "block";
            }

        }
    </script>
    



</body>

</html>
<?php /**PATH D:\laragon\www\ga-academy-userpanel\resources\views/adminview/navbar.blade.php ENDPATH**/ ?>