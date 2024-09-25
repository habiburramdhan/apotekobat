<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apotek App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        {{-- {{ asset() : mengambil file yang ada di folder public}} --}}
        <link rel="icon" href="{{ asset('assets/images/ApotekLogo.png') }}">
    @stack('style')
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">APOTEK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{-- Route::is('name_route') => mengecek name route yang sedang diakses --}}
                        <a class="nav-link {{ Route::is('landing_page') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        {{-- pemanggilan href/link
                        1. path (/) jika name route gaada
                        2. pake {{ route('name_nya') }} jika routenya ada name --}}
                        <a class="nav-link {{ Route::is('data_obat') ? 'active' : ''}}" href="{{ route('data_obat') }}">Data Obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Data Pembelian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Data Pengguna</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @stack('script')
</body>

</html>
