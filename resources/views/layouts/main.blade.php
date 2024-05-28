<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:10:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <title>Mpandaguta | Primary </title>


    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">

    <link rel="stylesheet" href="../../css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="../../css/feather.css">

    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Add this in your HTML head section -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Add this in your HTML head section -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>


</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header" header-theme="theme2">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="index.html">
                            <img class="img-fluid" src="../../logo.png" alt="Mpandaguta " />
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                                    class="waves-effect waves-light" data-cf-modified-d8424a08d31b5b8b406fded2-="">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-red">5</span>
                                    </div>

                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- <img src="jpg/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> -->
                                        <span> {{ Auth::user()->name }}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                            <a href="auth-sign-in-social.html" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">


                                                <i class="feather icon-log-out"></i> {{ __('Logout') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                        <a href="{{'/dashboard'}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>
									@can('assignment-list')
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Students</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{'/students'}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Students</span>
                                                </a>
                                            </li>
											@can('role-list')
                                            <li class="">
                                                <a href="{{'/new_students'}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Create New</span>
                                                </a>
                                            </li>
											@endcan
                                        </ul>
                                    </li>
									@endcan
									@can('role-list')
                                   <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Notices</span>
                                        </a>
                                        <ul class="pcoded-submenu">
										<li class="">
                                                <a href="{{'/notices'}}"  class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Notices</span>
                                                </a>
</li>
                                            <li class="">
                                                <a href="{{'/new_notices'}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Create New</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
									@endcan
									@can('role-list')
									<li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Events</span>
                                        </a>
                                        <ul class="pcoded-submenu">
										<li class="">
                                                <a href="{{'/events'}}"  class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Events</span>
                                                </a>
</li>
                                            <li class="">
                                                <a href="{{'/new_events'}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Create New</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
									@endcan
									@can('role-list')
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Alumni</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{'/testimonies'}}"  class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Testimonies</span>
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="{{'/new_testimonies'}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Create New</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> 
									@endcan
									<li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Archivements</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{'/archivements'}}"  class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Archivements</span>
                                                </a>
                                            </li>
											@can('role-list')
                                            <li class="">
                                                <a href="{{'/new_archivement'}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Create New</span>
                                                </a>
                                            </li>
											@endcan
                                        </ul>
                                    </li>  
									@can('role-list')
									<li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Fees Payments</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{'/payments'}}"  class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Fees Payments</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{'/new_payment'}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Create New</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>  
									@endcan
									@can('role-list')
									<li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">School Payments</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{'/expenditures'}}"  class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Payments</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{'/new_expenditure'}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Create New</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> 
									@endcan
									@can('role-list')
									<li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Manage</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{ route('users.index') }}"  class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Users</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('roles.index') }}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Roles</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> 
									@endcan
									@can('assignment-submission')
									<li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Assignments</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{ route('users.index') }}"  class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Assignments</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('roles.index') }}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">My submissions</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> 
									@endcan
                                </ul>

                            </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                        @endif
                                        @if(session()->has('error'))
                                        <div class="alert alert-warning">
                                            {{ session()->get('error') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>

	<script>
	$(document).ready(function() {
    $('#dt-nested-object').DataTable({
        dom: 'Bfrtip', 
        buttons: [
            {
                extend: 'excel',
                className: 'btn btn-success',
                text: '<i class="fas fa-download"></i> Download Excel Report',
                title: 'Your Title Here'
            }
        ]
    });
});

</script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.2/css/buttons.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>

    <script type="f4c05bba83ecdbe432a0ba7a-text/javascript" src="../../js/jquery.min.js"></script>
    <script type="f4c05bba83ecdbe432a0ba7a-text/javascript" src="../../js/jquery-ui.min.js"></script>
    <script type="f4c05bba83ecdbe432a0ba7a-text/javascript" src="../../js/popper.min.js"></script>
    <script type="f4c05bba83ecdbe432a0ba7a-text/javascript" src="../../js/bootstrap.min.js"></script>

    <script src="../../js/waves.min.js" type="f4c05bba83ecdbe432a0ba7a-text/javascript"></script>

    <script type="f4c05bba83ecdbe432a0ba7a-text/javascript" src="../../js/jquery.slimscroll.js"></script>

    <script type="f4c05bba83ecdbe432a0ba7a-text/javascript" src="../../js/modernizr.js"></script>
    <script type="f4c05bba83ecdbe432a0ba7a-text/javascript" src="../../js/css-scrollbars.js"></script>
    <script src="../../js/pcoded.min.js" type="f4c05bba83ecdbe432a0ba7a-text/javascript"></script>
    <script src="../../js/vertical-layout.min.js" type="f4c05bba83ecdbe432a0ba7a-text/javascript"></script>
    <script src="../../js/jquery.mcustomscrollbar.concat.min.js" type="f4c05bba83ecdbe432a0ba7a-text/javascript"></script>
    <script type="f4c05bba83ecdbe432a0ba7a-text/javascript" src="../../js/script.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="f4c05bba83ecdbe432a0ba7a-text/javascript"></script>
    <script type="f4c05bba83ecdbe432a0ba7a-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    <script src="../../js/rocket-loader.min.js" data-cf-settings="f4c05bba83ecdbe432a0ba7a-|49" defer=""></script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:10:10 GMT -->

</html>