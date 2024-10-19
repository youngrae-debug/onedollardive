<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

<!-- Header -->
<header class="bg-white shadow-md py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6">
        <a href="/" class="text-2xl font-bold text-gray-900">One Dollar Dive</a>

        <nav>
            <ul class="flex space-x-4">
                <li><a href="/" class="text-gray-600 hover:text-gray-900">Home</a></li>
                <li><a href="/about" class="text-gray-600 hover:text-gray-900">About</a></li>
                <li><a href="/marketinsights" class="text-gray-600 hover:text-gray-900">Market Insights</a></li>
                <li><a href="/subscription" class="text-gray-600 hover:text-gray-900">Subscription</a></li>
                @auth
                    <!-- 로그인된 사용자를 위한 로그아웃 버튼 -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content -->
<main class="w-full">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto text-center">
        <p>&copy; {{ date('Y') }} One Dollar Dive. All rights reserved.</p>
        <!-- <p class="mt-2">Follow us on
            <a href="#" class="text-blue-400">Twitter</a>,
            <a href="#" class="text-blue-400">LinkedIn</a>
        </p> -->
    </div>
</footer>

</body>
</html>
