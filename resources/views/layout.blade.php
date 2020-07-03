<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Webforest</title>
  {{-- CSS FILES START --}}
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/flag-icon.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/hover-min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/fontawesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/solid.min.css')}}" rel="stylesheet" type="text/css" />
  {{-- CSS FILES END --}}
</head>

<body>
  <div id="app">
    <App></App>
  </div>
  <script src="{{ asset('js/app.js') }}" defer>
  </script>
  <script src="{{asset('js/typeit.min.js')}}">
  </script>
  <script src="{{asset('js/anime.min.js')}}"></script>
</body>

</html>