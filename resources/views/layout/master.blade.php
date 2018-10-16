<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <nav>
        <a href="/laravel/blog/public/">home</a>
      </nav>
    </header>
    <br>
    @yield('content')
    <br>
    <footer>
      <p>&copy; MaarifCorp</p>
      <a href="https://zuragan.com/"><img src="{{ asset('img/zuragan.png')}}" alt=""></a>
    </footer>
  </body>
</html>
