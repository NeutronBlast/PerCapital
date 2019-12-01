<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Per Capital</title>

    <!-- VUE -->
    <script type="application/javascript" src="../js/app.js" defer></script>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Favico -->
    <link rel="shortcut icon" href="../img/logo/Simbolo-Per-Capital-blanco.png">
    <title>Per Capital</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/icons.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/default.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link href="../css/flag-icon.css" rel="stylesheet">

    <!-- Charts, uncomment this line if you want to make changes to the main page chart -->
    <link href="{{ asset('/css/Chart.min.css') }}" rel="stylesheet">

    
    <style> 
        .navbar-toggler {
            align-self: inherit;
            position: initial;
        }

        /* Media query for collapse button */
        @media (max-width: 990px) {
        .my-bg{
            background-color: #000032;
        }
        
        .navbar .navbar-brand{
            min-height:100px;
        }
        }
        
        @media (min-width: 991px) {
        .my-bg{
            background-color: #000032;
            min-height: 50px;
            max-height: 60px;
        }    
        }
        
        .navbar .navbar-nav .nav-link{
            color:white!important;
        }

        .navbar .navbar-nav{
            margin-top: -20px;
        }

        .navbar .navbar-brand{
            margin-top: -25px;
        }


        .navbar-mine{
            font-family:Gotham;
            font-size:12px;
        }

        .dropdown-mine{
            font-family:Gotham;
            font-size:14px;
        }
        
        .dropdown-item:hover{
            background-color:#868e96 !important;
            color: white !important;
        }

        .dropdown-item:focus{
            background-color:#868e96 !important;
            color: white !important;
        }

        .dropdown-item:active{
            background-color:#868e96 !important; 
            color: white !important;
        }

        .minw-none {
         min-width: 0 !important;
        }
       
        .dropdown:hover>.dropdown-menu {
        display: block;
        }

    </style>

</head>
<body class="landing-page">
    <div id="app">
    <header id="header-mine">
        <Values></Values>
            <div class="my-bg">
            <b-navbar toggleable="lg" fixed class="mx-5 navbar-mine">
                <div class="d-flex align-items-center justify-content-between">
                    <b-navbar-toggle target="nav-collapse" class="navbar-toggler navbar-toggler-left" style="background-color:white"></b-navbar-toggle>

                    <b-navbar-brand href="{{ url('/en') }}" class="ml-5">
                    <b-img fluid src="../img/logo/Logo-Per-Capital-horizontal-original.png" width="220" height="110" class="mt-4 logo-mine"></b-img>
                    </b-navbar-brand>
                </div>

                
                <b-collapse id="nav-collapse" is-nav>
    
                    <b-navbar-nav class="ml-auto nav-items-mine">
                        <b-nav-item-dropdown text="ABOUT US" class="hoverli" right>
                                <b-dropdown-item href="/en/about" class="dropdown-mine">Why PER CAPITAL?</b-dropdown-item>
                                <b-dropdown-item href="/en/about#team" class="dropdown-mine">Team</b-dropdown-item>
                                <b-dropdown-item href="/en/about#corporate" class="dropdown-mine">Corporate Governance</b-dropdown-item>
                                <b-dropdown-item href="/en/#contacto" class="dropdown-mine">Contact</b-dropdown-item>
                                <b-dropdown-item href="/en/about#faq" class="dropdown-mine">FAQ</b-dropdown-item>
                        </b-nav-item-dropdown>
                        <b-nav-item-dropdown text="FUNDS" right>
                                <b-dropdown-item href="/en/mutual" class="dropdown-mine">Mutual Fund</b-dropdown-item>
                                <b-dropdown-item href="#" class="dropdown-mine">Real State Fund</b-dropdown-item>
                                <b-dropdown-item href="#" class="dropdown-mine">Venture Capital</b-dropdown-item>
                        </b-nav-item-dropdown>
                        <b-nav-item href="/en/services">SERVICES</b-nav-item>
                        <b-nav-item-dropdown text="REPORTS" right>
                                <b-dropdown-item href="#" class="dropdown-mine">Annual</b-dropdown-item>
                                <b-dropdown-item href="#" class="dropdown-mine">Quarterly</b-dropdown-item>
                        </b-nav-item-dropdown>
                        <b-nav-item-dropdown text="TOOLS" right>
                            <b-dropdown-item href="/en/calculators" class="dropdown-mine">Calculators</b-dropdown-item>
                            <b-dropdown-item href="/en/strategies" class="dropdown-mine">Strategies</b-dropdown-item>
                            <b-dropdown-item href="/en/#news" class="dropdown-mine">News</b-dropdown-item>
                            <b-dropdown-item href="#" class="dropdown-mine">Calendar</b-dropdown-item>
                        </b-nav-item-dropdown>
                            <b-nav-item-dropdown right>
                            <template slot="button-content">
                                <i class="fa fa-user"></i>
                            </template>
                                <b-dropdown-item href="#" class="dropdown-mine">Institutional</b-dropdown-item>
                                <b-dropdown-item href="#" class="dropdown-mine">Private</b-dropdown-item>
                            </b-nav-item-dropdown>
    
                            <b-nav-item href="/" right> <span class="flag-icon flag-icon-es align-middle"></span> </b-nav-item>
                            <b-nav-item hreft="/en" right> <span class="flag-icon flag-icon-gb align-middle"></span> </b-nav-item>

                        <!-- Authentication Links 
                        @guest
                        <b-nav-item right href="{{ route('login') }}">Login</b-nav-item>
                        @if (Route::has('register'))
                        <b-nav-item right href="{{ route('register') }}">Registro</b-nav-item>
                        @endif
                        @else

                        <b-nav-item-dropdown right text="{{ Auth::user()->name }}">
                            <b-dropdown-item href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</b-dropdown-item>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                    </form>
                        </b-nav-item-dropdown>
                        @endguest
                    </b-navbar-nav>-->
                </b-collapse>
            </b-navbar>
            <br>
            </div>
        </header>

        
        <main class="py-4" id="content">
            @yield('content')
        </main>

        <div class="footer-mine">
            <footer-en></footer-en>
        </div>

        
        <script type="application/javascript" src="../js/jquery.min.js"></script>
        <script type="application/javascript" src="../js/popper.min.js"></script>
        <script type="application/javascript" src="../js/bootstrap.min.js"></script>
        <script type="application/javascript" src="../js/isotope.pkgd.min.js"></script>
        <script type="application/javascript" src="../js/modernizr.js"></script>        
        <!-- Charts, uncomment this line if you want to make changes to the main page chart -->
        <script type="application/javascript" src="{{ asset('js/Chart.min.js') }}" defer></script>
    </div>

</body>
</html>
