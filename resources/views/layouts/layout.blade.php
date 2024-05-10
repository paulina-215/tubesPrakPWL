<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Kanvas Kuliner</title>
</head>
<body>


{{-- navbar --}}
  @include('layouts.navbar')
  {{-- akhir navbar --}}

  {{-- content --}}
  @yield('content')
  {{-- akhir content --}}

  {{-- foother --}}
  @include('layouts.footer')
  {{-- akhir foother --}}


</body>
</html>