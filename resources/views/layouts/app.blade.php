<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DC Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <header>
      <div class="header-top">

      </div>
      <div class="header-bottom">

      </div>
    </header>
    {{-- definisco uno yield che fa da placeholder per il contenuto --}}
    @yield('content')

    <footer>
      <div class="footer-top">

      </div>
      <div class="footer-bottom">

      </div>
    </footer>
  </body>
</html>
