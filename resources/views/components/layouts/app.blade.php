<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hr Xpert</title>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">    
    <link rel="stylesheet" href="{{ asset('css/app.css?v=' . filemtime(public_path('css/app.css'))) }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/phosphor-icons"></script>
    <link rel="stylesheet" href="{{ asset('css/employee.css?v=' . filemtime(public_path('css/employee.css'))) }}">
</head>

@guest
<livewire:hrlogin />
@else

<body>
    <section id="main">
        @livewire('main-layout')
        <div> {{$slot}} </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @livewireScripts
    <script src="{{ asset('js/admin-dash.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script>
        function toggleSidebar() {
            document.body.classList.toggle('sidebar-toggled');
        }
    </script>
</body>

@endguest

</html>
