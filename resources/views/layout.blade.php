<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charest="UTF-8">
    <meta name="viewport" content="width=device-with,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kakeibo App</title>
    @yield('styles')
    <link rel="stylesheet" href={{ asset('/css/styles.css') }}>
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">家計簿 App</a>
            <div class="my-navbar-control">
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    @yield('scripts')
</body>

</html>
