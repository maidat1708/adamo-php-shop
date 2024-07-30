<!DOCTYPE html>
<html lang="en">
@include('components.meta')
<body>
    @include('components.nav')
    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
    @include('components.scripts')
</body>
</html>
