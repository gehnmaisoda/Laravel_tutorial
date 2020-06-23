<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle">*メニュー</h2>
    <ul>
      <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
      @yield('content')
    </div>
    <footer class="footer">
    @yield('footer')
    </footer>
  </body>
</html>