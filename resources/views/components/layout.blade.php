<!DOCTYPE html>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&family=Rosarivo:ital@0;1&display=swap" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.tailwindcss.com"></script>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/mainStyles.css', 'resources/js/app.js'])
        @endif
    </head>



    <body>
        

      <div class="header pt-3">

        <span>
          <a class="mainTitle m-5" href="/">Elder Pages Book Emporium</a>
        </span>
        <nav class="w-full flex flex-wrap justify-between items-center px-4 py-2">

              <a href="/">Home</a>

              <a href="{{ route('events') }}">Special Events</a>

              <a href="{{ route('featured') }}">Featured Titles</a>

              <a href="{{ route('browse') }}">Browse</a>

              <a href="{{ route('contact') }}">Contact Us</a>

              @guest
                <a href="{{ route('login') }}">Employee Login</a>
              @endguest

              @auth
                <a href="{{ route('login.employee') }}">Employee-Only</a>

                <span class="text-indigo-600">Hello, {{ Auth::user()->name }}</span>

                <span class="underline border-solid">
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="underline border-solid bg-indigo-700 text-white p-2 rounded">Log Out</button>
                  </form>
                </span>
              @endauth
        </nav>
      </div>


      <div class=" border-8 border-indigo-700">
        <div class="border-8 border-green-700 p-4">
            <main>
                {{ $slot }}
            </main>
        </div>
      </div>


      <div class="footer flex flex-row gap-10 p-3 content-center justify-center">    
        <h2>Elder Pages Book Emporium &copy</h2>
        <span class="self-center">Anderson Morris, Fall 2025</span>

        <a href="https://www.facebook.com/" class="self-center">
            Facebook
        </a>

        <a href="https://www.twitter.com/" class="self-center">
            X/Twitter
        </a>

        <a href="https://www.linkedin.com/login" class="self-center">
            LinkedIn
        </a>

        <a href="https://www.youtube.com/" class="self-center">
            YouTube
        </a>

    </div>
    </body>
</html>