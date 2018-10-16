<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <nav>
        <a href="/semua/laravel/blog/public">home</a>
      </nav>
    </header>
    <br>
    @yield('content')
    <br>
    <footer>
      <p>&copy; MaarifCorp</p>
    </footer>
  </body>
</html>
