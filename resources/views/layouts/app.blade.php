<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DC Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/43febffcb7.js" crossorigin="anonymous"></script>
  </head>
  <body>
    {{-- con include inserisco in pagina i contenuti dei partials --}}
    @include('partials.header')
    {{-- definisco uno yield che fa da placeholder per il contenuto --}}
    @yield('content')

    @include('partials.footer')

  </body>
</html>
