<!doctype html>
<html lang="en" xmlns:div="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Document</title>
</head>
<body class="bg-black text-white">
<div class="bg-white/5 bg-opacity-70">
    <nav class="flex justify-between py-3 px-2">

        <div class="ml-5">
            <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="logo">
        </div>
        <div class="space-x-8 m-auto">
            <x-navlink href="/" class="text-white">Careers</x-navlink>
            <x-navlink href="/" class="text-white">Jobs</x-navlink>
            <x-navlink href="/" class="text-white">Salary</x-navlink>
            <x-navlink href="/" class="text-white">Companies</x-navlink>
        </div>
        <div class=" justify-end flex items-center gap-6">

            @guest
                <x-navlink href="/" class="text-white">Login</x-navlink>
                <x-navlink href="/" class="text-white">Register</x-navlink>
            @endguest
            @auth()
                    <x-navlink href="/" class="text-white">Post a Job</x-navlink>
            <form method="POST" action="/logout">
                @csrf

                    <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Log Out
                    </button>
            </form>
            @endauth
        </div>

    </nav>
</div>
<main class="mt-10 max-w-[986px] m-auto">
    {{$slot}}
</main>
</div>
</body>
</html>
