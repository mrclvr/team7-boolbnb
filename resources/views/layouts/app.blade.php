<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" sizes="76x76" type="image/x-icon" href="https://a0.muscache.com/airbnb/static/logotype_favicon-21cc8e6c6a2cca43f061d2dcabdf6e58.ico">
    <title>{{ config('app.name', 'BoolBnB') }}</title>
    
    <!-- Scripts -->    
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('script-head')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm my-navbar">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/home') }}">                    
                    <svg width="256px" height="276px" viewBox="0 0 256 276" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                        <g>
                            <path d="M238.04054,223.122821 C236.10911,237.466648 226.457473,249.879044 212.942976,255.395053 C206.322113,258.150302 199.152955,258.979632 191.981042,258.150302 C185.087409,257.323727 178.19102,255.116773 171.021862,250.983899 C161.091945,245.46238 151.162028,236.915598 139.578961,224.227676 C157.782891,201.888117 168.812153,181.477232 172.950537,163.278812 C174.881966,154.726519 175.157491,147.003556 174.330917,139.831643 C173.228817,132.93801 170.746338,126.592672 166.883478,121.076663 C158.333941,108.667021 143.99287,101.495108 127.995894,101.495108 C111.998918,101.495108 97.6578467,108.942546 89.108309,121.076663 C85.2454499,126.592672 82.7657258,132.93801 81.6608709,139.831643 C80.5587713,147.003556 80.8342962,155.002044 83.0412507,163.278812 C87.1768794,181.477232 98.4844214,202.163642 116.412827,224.500446 C105.105285,237.191123 94.8998425,245.74066 84.969925,251.256669 C77.800767,255.395053 70.9043787,257.602007 64.0107457,258.425827 C56.5633076,259.255157 49.3913943,258.150302 43.0488111,255.670578 C29.5343146,250.154569 19.8826773,237.739417 17.9512477,223.398346 C17.124673,216.504713 17.6757228,209.61108 20.4337271,201.888117 C21.2603018,199.127357 22.6406816,196.374864 24.0183061,193.063054 C25.9497357,188.651901 28.1566901,183.959712 30.3608893,179.270278 L30.6391695,178.721983 C49.6669192,137.624689 70.077804,95.7035748 91.3152635,54.8873158 L92.1418382,53.2286559 C94.3487927,49.0957823 96.5529919,44.6846287 98.7627016,40.5462446 C100.966901,36.1323357 103.44938,31.9939517 106.482909,28.4066174 C112.274443,21.785754 119.997406,18.201175 128.546944,18.201175 C137.096481,18.201175 144.819444,21.785754 150.610978,28.4066174 C153.644507,31.9939517 156.126986,36.1323357 158.333941,40.5462446 C160.540895,44.6846287 162.745094,49.0957823 164.952049,53.2286559 L165.781379,54.8873158 C186.740558,95.9790997 207.151443,137.900214 226.181948,178.997508 L226.181948,179.270278 C228.388902,183.684187 230.317577,188.651901 232.524531,193.063054 C233.904911,196.374864 235.282535,199.127357 236.10911,201.888117 C238.316065,209.057275 239.142639,215.956418 238.04054,223.122821 L238.04054,223.122821 Z M127.995894,210.159374 C113.103773,191.40715 103.44938,173.754269 100.140326,158.864903 C98.7627016,152.519565 98.4844214,147.003556 99.3137514,142.038598 C99.8648012,137.624689 101.520706,133.76183 103.724905,130.45002 C108.965389,123.010848 117.790451,118.313148 127.995894,118.313148 C138.201336,118.313148 147.301924,122.729812 152.266882,130.45002 C154.471082,133.76183 156.126986,137.624689 156.678036,142.038598 C157.504611,147.003556 157.229086,152.79509 155.851461,158.864903 C152.542407,173.481499 142.888015,191.131625 127.995894,210.159374 L127.995894,210.159374 Z M252.381611,195.818303 C251.003986,192.509249 249.623607,188.92467 248.245982,185.891141 C246.039028,180.928938 243.832073,176.236749 241.900644,171.82284 L241.625119,171.55007 C222.597369,130.177251 202.186484,88.2561367 180.6735,46.8915831 L179.846925,45.2329232 C177.639971,41.0945392 175.433016,36.6806302 173.228817,32.2694766 C170.468057,27.3017626 167.710053,22.0667894 163.298899,17.0990754 C154.471082,6.06705835 141.785915,0 128.271419,0 C114.481397,0 102.071756,6.06705835 92.9684129,16.5507809 C88.8327841,21.5129844 85.7992549,26.753468 83.0412507,31.721182 C80.8342962,36.1323357 78.6273417,40.5462446 76.4203873,44.6846287 L75.5938126,46.3350228 C54.3591083,87.7050869 33.6726987,129.628956 14.6421937,170.99902 L14.3666688,171.55007 C12.4352392,175.961224 10.2282847,180.647902 8.02133027,185.615616 C6.64370576,188.651901 5.263326,191.960955 3.88570148,195.545534 C0.298367256,205.748221 -0.803732353,215.402613 0.573892159,225.329776 C3.61017658,246.016185 17.4001979,263.393541 36.4307029,271.113749 C43.5998609,274.150033 51.047299,275.527658 58.770262,275.527658 C60.9772165,275.527658 63.7352208,275.252133 65.9421752,274.973852 C75.0427628,273.868998 84.4188752,270.840979 93.5194627,265.59774 C104.82976,259.255157 115.586252,250.154569 127.720369,236.915598 C139.854486,250.154569 150.886503,259.255157 161.91852,265.59774 C171.021862,270.840979 180.397975,273.868998 189.498562,274.973852 C191.705517,275.252133 194.463521,275.527658 196.670476,275.527658 C204.393439,275.527658 212.113646,274.150033 219.010035,271.113749 C238.316065,263.393541 251.830561,245.74066 254.86409,225.329776 C257.071045,215.675383 255.96619,206.026501 252.381611,195.818303 L252.381611,195.818303 Z" fill="#ff385c"></path>
                        </g>
                    </svg>                    
                    <strong class="color-brand ml-2">BoolBnB</strong>                    
                </a>
                
                <div class="header-user navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fas fa-bars"></i>
                    @guest
                    <i class="far fa-user"></i>                    
                    @else
                    <img class="header-avatar" src="{{ asset('storage/'. Auth::user()->profile_pic) }}" alt="pic">
                    @endguest
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link {{Route::currentRouteName() == 'admin.home' ? 'active' : '' }}" href="{{ route('admin.home') }}">Dashboard</a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link {{Route::currentRouteName() == 'admin.houses.index' ? 'active' : '' }}" href="{{ route('admin.houses.index') }}">Le mie strutture</a>
                            </li>                            
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        
                            @if (Route::currentRouteName() == 'login' )
                                <li class="nav-item">
                                    <a class="bnb-a bnb-btn bnb-btn-white bnb-btn-resp" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                                </li> 
                            @else
                                <li class="nav-item">
                                    <a class="bnb-btn bnb-btn-brand bnb-btn-resp" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                                </li> 
                            @endif
                        @else

                            <li class="pr-2">
                                <img class="header-avatar d-none d-md-block" 
                                src=" 
                                    @if (Auth::user()->profile_pic)
                                        {{ asset('storage/'. Auth::user()->profile_pic) }}
                                    @else
                                        {{ asset('images/default-user.png') }}
                                    @endif
                                " alt="pic">
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }}                                    
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="log-out bnb-a" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Esci dal tuo account') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>

        <main class="py-4">
            @yield('content')            
        </main>
    </div>
    @yield('script')
</body>
</html>
