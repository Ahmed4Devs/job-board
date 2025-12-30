<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Board {{ isset($title) ? '| ' . $title : '' }}</title>
  @vite('resources/css/app.css')
</head>

<body class="h-full">
  <div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0">
              <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                alt="Your Company" class="size-8" />
            </div>
            <div class=" sm:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->

                <x-nav-link href="/" aria-current="page" :active="request()->is('/')">Dashboard</x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
              </div>
            </div>
          </div>
          <div class="sm:block">
            <div class="ml-4 flex items-center md:ml-6">
                @auth
                    <span class="text-white mr-4">{{Auth::user()->name}}</span>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="bg-gray-800 text-gray-400 hover:text-white">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="/signup" class="text-gray-400 px-2 hover:text-white">Sign Up</a>
                    <a href="/login" class="text-gray-400 px-2 hover:text-white">Login</a>
                @endauth
            </div>
          </div>
        </div>
      </div>
    </nav>

    @if (isset($title))
      <header class="relative bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $title ?? 'Dashboard' }}</h1>
        </div>
      </header>
    @endif
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
  </div>

</body>

</html>
