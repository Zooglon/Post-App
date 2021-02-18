<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Post App</title>
      <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body class="bg-blue-600">
    <nav class="p-6 bg-yellow-300 flex justify-between mb-6">
      <ul class="flex items-center">
        <li>
          <a href="/" class="p-3 font-bold">HOME</a>
        </li>
        <li>
          <a href="{{ route('dashboard') }}" class="p-3 font-bold">DASHBOARD</a>
        </li>
        <li>
          <a href="{{ route('posts') }}" class="p-3 font-bold">POST</a>
        </li>
      </ul>


      <img src="{{ asset('img/createcorp.png') }}" alt="companylogo">



      <ul class="flex items-center">
        @if (auth()->user())
          <li>
            <a href="" class="p-3 font-bold">{{ auth()->user()->name }}</a>
          </li>
          <li>
            <form action="{{ route('logout') }}" method="post" class="p-3 inline">
              @csrf
              <button type="submit" class="font-bold">Logout</button>
            </form>
          </li>
        @else
          <li>
            <a href="{{ route('login') }}" class="p-3 font-bold">Login</a>
          </li>
          <li>
            <a href="{{ route('register') }}" class="p-3 font-bold">Register</a>
          </li>
        @endif
      </ul>
    </nav>
    @yield('content')
  </body>
</html>
