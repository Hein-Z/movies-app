<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased" style=" font-family: 'Nunito'">
<div class="app">
    <nav class="text-white bg-gray-900 font-sans border-gray-700 border-b-2">
        <div class="flex container sm:flex-row flex-col  items-center justify-between py-6 mx-auto">
            <ul class="flex items-center sm:flex-row flex-col">
                <li class="text-xl md:text-2xl hover:text-blue-200 cursor-pointer"><a href="{{route('home')}}"><i
                            class="fas fa-film"></i>
                        Movie App</a></li>
                <li class="ml-6 sm:ml-10 md:ml-16 hover:text-blue-200"><a href="">Movies</a></li>
                <li class="ml-6 sm:ml-10 md:ml-16 hover:text-blue-200"><a href="">TV Show</a></li>
                <li class="ml-6 sm:ml-10 md:ml-16 hover:text-blue-200"><a href="">Actors</a></li>
            </ul>
            <div class="flex items-center relative mr-3 mt-4 sm:mt-0">
                <img src="https://scontent.frgn11-1.fna.fbcdn.net/v/t1.0-9/91157631_1168695170188791_4282732158239375360_o.jpg?_nc_cat=106&ccb=2&_nc_sid=09cbfe&_nc_ohc=UE7TmMKYVv4AX8MoGLx&_nc_ht=scontent.frgn11-1.fna&oh=fb54945e1bf38e917f34c517b1b53387&oe=600B7815" class="h-8 mx-3 rounded-full" alt="">
                <input type="search"
                       class="rounded-full focus:outline-none bg-gray-600 pl-3  lg:w-52 sm:w-44 w-40 focus:shadow-md"
                       placeholder="Search">
                <i class="fa fa-search absolute top-2 right-2 bg-gray-600"></i>
            </div>
        </div>
    </nav>
    @yield('content')
</div>
</body>
</html>
