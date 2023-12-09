<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>AMAN SULAWESI SELATAN </title>
    <link rel="icon" type="image/x-icon" href="../src/assets/img/favicon.ico"/>
    <link href="{{ asset('cork-v3/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('cork-v3/layouts/vertical-light-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('cork-v3/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->


    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('cork-v3/src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork-v3/src/assets/css/light/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('cork-v3/src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork-v3/src/assets/css/dark/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('cork-v3/src/plugins/src/table/datatable/datatables.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('cork-v3/src/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('cork-v3/src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('cork-v3/src/plugins/css/dark/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('cork-v3/src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css') }}">

    <!-- END PAGE LEVEL STYLES -->

    <!-- date time picker -->
    <link href="{{ asset('cork-v3/src/plugins/src/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork-v3/src/plugins/src/noUiSlider/nouislider.min.css') }}" rel="stylesheet" type="text/css">
    <!-- END THEME GLOBAL STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('cork-v3/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/src/plugins/css/light/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('cork-v3/src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/src/plugins/css/dark/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
    <!--  END date time picker  -->

    {{-- icon --}}
    <link rel="stylesheet" href="{{ asset('cork-v3/src/plugins/src/font-icons/fontawesome/css/regular.css') }}">

    <link rel="stylesheet" href="{{ asset('cork-v3/src/plugins/src/font-icons/fontawesome/css/fontawesome.css') }}">

    <link href="{{ asset('cork-v3/src/assets/css/light/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork-v3/src/assets/css/dark/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    {{-- end icon --}}


    
    <link href="{{ asset('cork-v3/src/assets/css/light/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/src/assets/css/dark/users/user-profile.css') }}" rel="stylesheet" type="text/css" />

    
    <link rel="stylesheet" type="text/css" href="{{ asset('cork-v3/src/plugins/css/light/tomSelect/custom-tomSelect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cork-v3/src/plugins/css/dark/tomSelect/custom-tomSelect.css') }}">

    {{-- apexcharts --}}
    <script src="{{ asset('apxcharts/dist/apexcharts.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('apxcharts/dist/apexcharts.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class=" layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">

        @include('admin.navbar')

    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            @include('admin.sidebar')

        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!--  BEGIN BREADCRUMBS  -->
                    <div class="secondary-nav">
                        <div class="breadcrumbs-container" data-page-heading="Sales">
                            <header class="header navbar navbar-expand-sm">
                                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                </a>
                                <div class="d-flex breadcrumb-content">
                                    <div class="page-header">

                                        <div class="page-title">
                                        </div>
                        
                                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                            </ol>
                                        </nav>
                        
                                    </div>
                                </div>
                                <ul class="navbar-nav flex-row ms-auto breadcrumb-action-dropdown">
                                    <li class="nav-item more-dropdown">
                                        <div class="dropdown  custom-dropdown-icon">
                                            <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span>Settings</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down custom-dropdown-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                            </a>
                        
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">

                                                <a class="dropdown-item" data-value="Settings" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-settings&quot;><circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;></circle><path d=&quot;M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z&quot;></path></svg>" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings
                                                </a>

                                                <a class="dropdown-item" data-value="Mail" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-mail&quot;><path d=&quot;M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z&quot;></path><polyline points=&quot;22,6 12,13 2,6&quot;></polyline></svg>" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Mail
                                                </a>

                                                <a class="dropdown-item" data-value="Print" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-printer&quot;><polyline points=&quot;6 9 6 2 18 2 18 9&quot;></polyline><path d=&quot;M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2&quot;></path><rect x=&quot;6&quot; y=&quot;14&quot; width=&quot;12&quot; height=&quot;8&quot;></rect></svg>" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> Print
                                                </a>

                                                <a class="dropdown-item" data-value="Download" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-download&quot;><path d=&quot;M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4&quot;></path><polyline points=&quot;7 10 12 15 17 10&quot;></polyline><line x1=&quot;12&quot; y1=&quot;15&quot; x2=&quot;12&quot; y2=&quot;3&quot;></line></svg>" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download
                                                </a>

                                                <a class="dropdown-item" data-value="Share" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-share-2&quot;><circle cx=&quot;18&quot; cy=&quot;5&quot; r=&quot;3&quot;></circle><circle cx=&quot;6&quot; cy=&quot;12&quot; r=&quot;3&quot;></circle><circle cx=&quot;18&quot; cy=&quot;19&quot; r=&quot;3&quot;></circle><line x1=&quot;8.59&quot; y1=&quot;13.51&quot; x2=&quot;15.42&quot; y2=&quot;17.49&quot;></line><line x1=&quot;15.41&quot; y1=&quot;6.51&quot; x2=&quot;8.59&quot; y2=&quot;10.49&quot;></line></svg>" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share
                                                </a>
                                                
                                            </div>
                        
                                        </div>
                                    </li>
                                </ul>
                            </header>
                        </div>
                    </div>
                    <!--  END BREADCRUMBS  -->                    

                    <div class="row layout-top-spacing">

                        @yield('content')
    
                    </div>

                </div>

            </div>
            <!--  BEGIN FOOTER  -->

            @include('admin.footer')

            <!--  END CONTENT AREA  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('cork-v3/src/plugins/src/global/vendors.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('cork-v3/layouts/vertical-light-menu/app.js') }}"></script>
    <script src="{{ asset('cork-v3/src/assets/js/custom.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/custom_miscellaneous.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('cork-v3/src/assets/js/dashboard/dash_2.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    {{-- date time picker --}}
    <script src="{{ asset('cork-v3/src/plugins/src/flatpickr/flatpickr.js') }}"></script>

    <script src="{{ asset('cork-v3/src/plugins/src/flatpickr/custom-flatpickr.js') }}"></script>
    
    {{-- end date time picker --}}

    {{-- icon --}}
    <script src="{{ asset('cork-v3/src/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/font-icons/feather/feather.min.js') }}"></script>
    <script>
        feather.replace();
    </script>
    {{-- end icon --}}

    <script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js" integrity="sha256-UnTxHm+zKuDPLfufgEMnKGXDl6fEIjtM+n1Q6lL73ok=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    @if (session()->has('success'))
    <script>
        swal("Berhasil!","{!!Session::get('success')!!}","success",{
            button:"ok"
        })
    </script>
    @endif

    @if (session()->has('gagal'))
        <script>
            swal("Oopss!","{!!Session::get('gagal')!!}","error",{
                button:"ok"
            })
        </script>
    @endif

    <script>
        $('.show-confirm').click(function(event) {
            // ambil form terdekat dari class confirm-delete
            let form =  $(this).closest("form");
            //nge ran swal dulu
            event.preventDefault();
            swal({
                title: `Apakah Anda Yakin Ingin Menghapus Data Ini ?`,
                text: "Jika anda menghapusnya, akan terhapus selamanya",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                form.submit();
                }
            });
        });
    </script>

    <script src="{{ asset('cork-v3/src/plugins/src/tomSelect/tom-select.base.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/tomSelect/custom-tom-select.js') }}"></script>

    

</body>
</html>