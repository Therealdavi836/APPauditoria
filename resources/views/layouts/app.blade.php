<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AuditoUN</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        :root {
            --apple-blue: #0071e3;
            --apple-blue-hover: #0077ed;
            --apple-dark: #1d1d1f;
            --apple-light: #f5f5f7;
            --apple-gray: #86868b;
            --apple-lighter-gray: #d2d2d7;
            --apple-card-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Inter', 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--apple-light);
            color: var(--apple-dark);
            line-height: 1.5;
            font-weight: 400;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        #app {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .apple-navbar {
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 0.75rem 0;
        }
        
        .apple-navbar .container {
            max-width: 1200px;
            padding: 0 1.5rem;
        }
        
        .apple-brand {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--apple-dark);
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .apple-brand:hover {
            color: var(--apple-dark);
        }
        
        .apple-nav {
            display: flex;
            align-items: center;
        }
        
        .apple-nav-item {
            margin-left: 1.5rem;
        }
        
        .apple-nav-link {
            font-size: 0.9375rem;
            font-weight: 500;
            color: var(--apple-dark);
            padding: 0.5rem 0;
            position: relative;
            text-decoration: none;
        }
        
        .apple-nav-link:hover {
            color: var(--apple-blue);
        }
        
        .apple-nav-link.active {
            color: var(--apple-blue);
        }
        
        .apple-nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--apple-blue);
        }
        
        .apple-button {
            font-size: 0.9375rem;
            font-weight: 500;
            color: white;
            background-color: var(--apple-blue);
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        .apple-button:hover {
            background-color: var(--apple-blue-hover);
            color: white;
        }
        
        .apple-button-outline {
            background-color: transparent;
            color: var(--apple-blue);
            border: 1px solid var(--apple-blue);
        }
        
        .apple-button-outline:hover {
            background-color: rgba(0, 113, 227, 0.1);
        }
        
        .apple-dropdown {
            border: none;
            border-radius: 8px;
            box-shadow: var(--apple-card-shadow);
            padding: 0.5rem 0;
            margin-top: 0.5rem;
        }
        
        .apple-dropdown-item {
            font-size: 0.9375rem;
            padding: 0.5rem 1rem;
            color: var(--apple-dark);
        }
        
        .apple-dropdown-item:hover {
            background-color: var(--apple-light);
            color: var(--apple-dark);
        }
        
        .apple-dropdown-divider {
            border-top: 1px solid var(--apple-lighter-gray);
            margin: 0.25rem 0;
        }
        
        main {
            flex: 1;
            padding: 2rem 0;
        }
        
        .apple-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        @media (max-width: 768px) {
            .apple-navbar .container {
                padding: 0 1rem;
            }
            
            .apple-nav {
                padding: 1rem 0;
            }
            
            .apple-nav-item {
                margin-left: 0;
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="apple-navbar navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="apple-brand" href="{{ url('/') }}" style="color: white;">
                    AuditoUN
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="apple-nav navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="apple-nav-item nav-item">
                                    <a class="apple-nav-link nav-link {{ request()->routeIs('login') ? 'active' : '' }}" 
                                       href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="apple-nav-item nav-item">
                                    <a class="apple-button apple-button-outline ms-2" 
                                       href="{{ route('register') }}">{{ __('Crea una acuenta') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="apple-nav-item nav-item dropdown">
                                <a id="navbarDropdown" class="apple-nav-link nav-link dropdown-toggle" href="#" 
                                   role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                   style="color: white;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="apple-dropdown dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="z-index: 9999; position: relative; right: 20; left: auto;">
                                    <a class="apple-dropdown-item dropdown-item" href="#">Perfil</a>
                                    <a class="apple-dropdown-item dropdown-item" href="#">Configuración</a>
                                    <div class="apple-dropdown-divider"></div>
                                    <a class="apple-dropdown-item dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="apple-container">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>