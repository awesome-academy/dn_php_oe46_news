<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta name="description" content="My profile | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <base href=" {{ asset('') }} ">
    <!-- Bootstrap CSS -->
    <link href="css/lib.css" rel="stylesheet" type="text/css" />

</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.html" class="logo">
                    <img alt="Logo" src="images/logo.png" />
                    <span>ADMIN</span>
                </a>
            </div>
            <nav class="navbar-custom">
                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small>Hello, admin</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">
                    <ul>
                        <li class="submenu">
                            <a href="">
                                <i class="fas fa-user"></i>
                                <span>@lang('task.user')</span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="">
                                <i class="fas fa-file-alt"></i>
                                <span>@lang('task.post')</span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="">
                                <i class="fas fa-table"></i>
                                <span>@lang('task.Categorypost')</span>
                            </a>
                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div> 
        @yield('content');