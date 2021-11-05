<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('layouts.header')
                <!-- Topbar -->
                @yield('content')
            </div>
            <!-- Footer -->
            @include('layouts.footer')
</body>

</html>
