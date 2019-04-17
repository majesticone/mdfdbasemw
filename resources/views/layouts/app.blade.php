<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MDF AIDS DATABASE') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- jquerymobile
	<link rel="stylesheet" href="{{ asset('css/default/jquery.mobile-1.4.5.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/default/main.css')}}">
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/jquery.mobile-1.4.5.min.js')}}"></script>
     -->
	<style>
		#custom-border-radius .ui-btn-icon-notext.ui-corner-all {
			-webkit-border-radius: .3125em;
			border-radius: .3125em;
		}
	</style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div data-role="page" class="jqm-demos">
            @include('inc.navbar')           
            <main class="py-4">            
                <div class="ui-content" role="main">
                    @include('inc.messages')
                    @yield('content')                     
                </div>               
            </main>
    </div>
</body>
</html>
