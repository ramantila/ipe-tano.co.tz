<!doctype html>
<html lang="en">

<head>
    <title>
        @yield('title')
    </title>
    <!-- initiate head with meta tags, css and script -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://radmin.themicly.com/favicon.png" />

    <!-- font awesome library -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">


    <script src="{{ asset('js/app.js') }}"></script>

    <!-- themekit admin template asstes -->
    <link href="{{ asset('all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/css/theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- Stack array for including inline css or head elements -->
    <link href="{{ asset('plugins/DataTables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
</head>

<body id="app">
    <div class="wrapper">
        <!-- initiate header-->
        <header class="header-top" header-theme="light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>

                    </div>
                    <div class="top-menu d-flex align-items-center">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img class="avatar" src="/images/tano.png"
                                    alt=""></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ url('users/change-password') }}"><i
                                        class="ik ik-lock dropdown-icon"></i> Change Password</a>
                                {{-- <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i>
                                    Message</a> --}}
                                <a class="dropdown-item" href="{{ url('logout') }}">
                                    <i class="ik ik-power dropdown-icon"></i>
                                    Logout
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrap">
            <!-- initiate sidebar-->
            <div class="app-sidebar colored">
                <div class="sidebar-header text-center">
                    <a class="header-brand" href="{{ url('dashboard/business') }}">
                        <div class="logo-img">
                            <img height="30" src="/images/ipetano-logo.png" class="header-brand-img">
                        </div>
                    </a>
                    <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
                    <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                </div>


                <div class="sidebar-content">
                    @include('left_side.sidebar')
                </div>
            </div>
            <div class="main-content">
                <!-- yeild contents here -->
                <!-- push external head elements to head -->


                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- push external js -->
            </div>

            <!-- initiate chat section-->
            <aside class="right-sidebar">
                <div class="sidebar-chat" data-plugin="chat-sidebar">
                    <div class="sidebar-chat-info">
                        <h6>Chat List</h6>
                        <form class="mr-t-10">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search for friends ...">
                                <i class="ik ik-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="chat-list">
                        <div class="list-group row">
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                                <figure class="user--online">
                                    <img src="https://radmin.themicly.com/img/users/1.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Gene Newman</span> <span
                                        class="username">@gene_newman</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                                <figure class="user--online">
                                    <img src="https://radmin.themicly.com/img/users/2.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Billy Black</span> <span
                                        class="username">@billyblack</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                                <figure class="user--online">
                                    <img src="https://radmin.themicly.com/img/users/3.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Herbert Diaz</span> <span
                                        class="username">@herbert</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                                <figure class="user--busy">
                                    <img src="https://radmin.themicly.com/img/users/4.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Sylvia Harvey</span> <span
                                        class="username">@sylvia</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                                <figure class="user--busy">
                                    <img src="https://radmin.themicly.com/img/users/5.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Marsha Hoffman</span> <span
                                        class="username">@m_hoffman</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                                <figure class="user--offline">
                                    <img src="https://radmin.themicly.com/img/users/1.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Mason Grant</span> <span
                                        class="username">@masongrant</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                                <figure class="user--offline">
                                    <img src="https://radmin.themicly.com/img/users/2.jpg" class="rounded-circle"
                                        alt="">
                                </figure><span><span class="name">Shelly Sullivan</span> <span
                                        class="username">@shelly</span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="chat-panel" hidden>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
                        <span class="user-name">John Doe</span>
                        <button type="button" class="close" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="card-body">
                        <div class="widget-chat-activity flex-1">
                            <div class="messages">
                                <div class="message media reply">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="https://radmin.themicly.com/img/users/3.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Epic Cheeseburgers come in all kind of styles.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="https://radmin.themicly.com/img/users/1.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Cheeseburgers make your knees weak.</p>
                                    </div>
                                </div>
                                <div class="message media reply">
                                    <figure class="user--offline">
                                        <a href="#">
                                            <img src="https://radmin.themicly.com/img/users/5.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Cheeseburgers will never let you down.</p>
                                        <p>They will also never run around or desert you.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="https://radmin.themicly.com/img/users/1.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>A great cheeseburger is a gastronomical event.</p>
                                    </div>
                                </div>
                                <div class="message media reply">
                                    <figure class="user--busy">
                                        <a href="#">
                                            <img src="https://radmin.themicly.com/img/users/5.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>There is a cheesy incarnation waiting for you no matter what you palete
                                            preferences are.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="https://radmin.themicly.com/img/users/1.jpg"
                                                class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>If you are a vegan, we are sorry for you loss.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="javascript:void(0)" class="card-footer" method="post">
                        <div class="d-flex justify-content-end">
                            <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                            <button class="btn btn-icon" type="submit"><i
                                    class="ik ik-arrow-right text-success"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- initiate footer section-->
            <footer class="footer">
                <div class="w-100 clearfix">
                    <span class="text-center text-sm-left d-md-inline-block">
                        v3.5.0 Copyright © 2023 - Bytech
                        <i class="fa fa-heart text-danger"></i>
                    </span>
                    <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">
                        Developed by
                        <a class="text-dark" target="_blank" href="https://themicly.com">Bytech</a>
                        </a>
                        with <i class="fa fa-heart text-danger"></i>
                    </span>
                </div>
            </footer>
        </div>
    </div>

    <!-- initiate modal menu section-->
    <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel"
        aria-hidden="true" data-backdrop="false">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                class="ik ik-x-circle"></i></button>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="quick-search">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <div class="input-wrap">
                                    <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                    <i class="ik ik-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="container">
                        <div class="apps-wrap">
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                            </div>
                            <div class="app-item dropdown">
                                <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ik ik-command"></i><span>Ui</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- initiate scripts-->
    <script src="{{ asset('all.js') }}"></script>
    <!-- Stack array for including inline js or scripts -->
    <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
    <!--server side users table script-->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/form-components.js') }}"></script>
    <script src="{{ asset('dist/js/theme.js') }}"></script>
    {{-- <script src="https://radmin.themicly.com/js/chat.js"></script> --}}
    <script src="{{ asset('js/chat.js') }}"></script>
    @if (Session::has('success'))
    <script>
        $(document).ready(function() {
                // Initialize Toastr
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    // Other options...
                };

                // Display the success message
                toastr.success("{!! Session::get('success') !!}");
            });
    </script>
    @endif

    @if (Session::has('error'))
    <script>
        $(document).ready(function() {
            // Initialize Toastr
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                // Other options...
            };

            // Display the success message
            toastr.error("{!! Session::get('error') !!}");
        });
    </script>
    @endif

</body>

</html>