<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" media="all">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{!! url('storage/pic/ludrive.jpg') !!}"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
</head>

<body id="top">
@guest
    <div>
        @yield('content')
    </div>
@else    
<div class="bgded overlay hero" id="hero" style="background-image:url('http://www.gribustudet.lv/wp-content/uploads/2017/05/cropped-homepage_header-1.jpg');"> 
    <div class="wrapper row1">
        <header id="header" class="hoc clear"> 
            <div id="logo" class="fl_left">
                <h1><a href="{{url('/')}}">LU Drive</a></h1>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear mr-4 unimportant" style="display: inline-block;">
                    <li><a href="{{url('/')}}">Galvenā lapa</a></li>
                    <li><a class="dropdown-toggle" href="{{url('/')}}/directory">Dokumenti</a>
                        <ul>
                            <li><a href="{{url('/')}}/directory">Pēdējie pievienotie dokumenti</a></li>
                            <li><a href="{{url('/')}}/file/create">Pievienot dokumentu</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-toggle">Izvēlies kursu</a>
                        <ul>
                            @for ($index = 1; $index <= 4; $index++)
                                <li><a class="dropdown-toggle">{{$index}}. kurss</a> 
                                    <ul>
                                        @foreach ($directories[$index-1] as $directory)
                                            <li><a href="{{url('/')}}/directory/{{$directory->id}}">{{$directory->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endfor
                        </ul>
                    </li>
                    <li><a href="https://www.df.lu.lv" target="_blank">LU DF mājaslapa</a></li>
                </ul>
                <ul class="clear unimportant" style="display: inline-block;">   
                    <img class="ml-4" src="{{url('storage/pic/'.Auth::user()->image)}}" style="width:40px; height:40px; border-color: black; border-style:solid; border-width:1px; border-radius:50%;">     
                    <li class="ml-2">
                        <a id="navbarDropdown"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul>   
                            @if (Auth::user()->role_id == 2)
                                <li>
                                    <a class="dropdown-item" href="{{url('/')}}/admin">Admina Panelis</a>
                                </li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="{{url('/')}}/profile/{{Auth::user()->id}}">Profils</a>
                            </li>
                            <li>
                                <a id="drp-logout" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();" style="height: 35px; padding: 9px 20px;">
                                    {{ __('Izrakstīties') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div id="hide-cont" class="container-fluid">
                <ul class="clear m-0 p-3 dropdown-toggle">
                    <li><a href="{{url('/')}}" class="dropdown-item">Galvenā lapa</a></li>
                    <li><a href="https://www.df.lu.lv" class="dropdown-item">LU DF mājaslapa</a></li>
                    <li><a class="dropdown-item" href="{{url('/')}}/directory">Dokumenti</a></li>
                    @if (Auth::user()->role_id == 2)
                        <li>
                            <a class="dropdown-item" href="{{url('/')}}/admin">Admina Panelis</a>
                        </li>
                    @endif
                    <li>
                        <a class="dropdown-item" href="{{url('/')}}/profile/{{Auth::user()->id}}">Profils</a>
                    </li>
                    <li>
                        <a id="drp-logout" href="{{ route('logout') }}" class="dropdown-item"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" style="height: 35px; padding: 9px 20px;">
                            {{ __('Izrakstīties') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </header>
    </div>
    @yield('look_up_document')
</div>
<div>
    <main>
        @yield('content')
    </main>
</div>

<div class="bgded overlay" style="background-image:url('http://www.gribustudet.lv/wp-content/uploads/2017/05/cropped-homepage_header-1.jpg');"> 
    <div class="wrapper row4">
        <footer id="footer" class="hoc clear"> 
                <ul class="nospace group ">
                    <li class="one_half first">
                        <div class="btmspace-50 center infobox"><i class="fa fa-envelope-o"></i>
                            <h6 class="heading">Studiju metodiķes</h6>
                            <div class="row border-top">
                                <div class="col-md-12 p-auto">
                                    <h6 class="nospace mt-2"><strong>Ārija Sproģe</strong></h6>
                                    <p class="nospace">tālr. 67034505; (bakalaura programma)</p>
                                    <h6 class="nospace mt-2"><strong>Anita Ermuša</strong></h6>
                                    <p class="nospace">tālr. 67224363; (maģistra un doktora programmas)</p>
                                    <h6 class="nospace mt-2"><strong>Ella Arša</strong></h6>
                                    <p class="nospace">tālr. 67224363; (maģistra programma)</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="one_half">
                        <div class="btmspace-50 center infobox"><i class="fa fa-envelope-o"></i>
                            <h6 class="heading">Fakultāte</h6>
                            <div class="row border-top">
                                <div class="col-md-12 p-auto">
                                    <h6 class="nospace mt-2"><strong>Adrese</strong></h6>
                                    <p class="nospace">Raiņa bulvāris 19, Rīga, LV 1586</p>
                                    <h6 class="nospace mt-2"><strong>Tālrunis</strong></h6>
                                    <p class="nospace">67034488</p>
                                    <h6 class="nospace mt-2"><strong>E-pasts</strong></h6>
                                    <p class="nospace"><a href="mailto:df@lu.lv ">df@lu.lv</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
        </footer>
    </div>
    <nav class="quicklinks row4">
        <ul class="hoc clear">
            <li><a href="{{url('/')}}">DARJA</a></li>
            <li><a href="{{url('/')}}">PLS</a></li>
            <li><a href="{{url('/')}}">ACCEPT</a></li>
            <li><a href="{{url('/')}}">THIS</a></li>
            <li><a href="{{url('/')}}">PROJECT</a></li>
        </ul>
    </nav>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<style>
    #hide-cont {display: none;}

    div.#logo.fl_left {margin: 40px 40px;}

    .infobox {height: 21rem;}

    @media screen and (max-width: 900px) {
        .unimportant {display: none !important;}
        ul li {list-style-type: none;}
        .dropdown-item {color: white;list-style-type: none;}
        .dropdown-item:hover {background-color: rgba(255, 255, 255, 0.5);border-radius: 70%;}
        .dropdown-toggle:after {display:  none;}
    }
    @media screen and (max-width: 900px) {
        #hide-cont {display: inline-block !important; text-align: center;}
        #logo {display: none;}
    }
</style>
@endguest
</body>
</html>