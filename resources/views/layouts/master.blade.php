<!DOCTYPE html>
<html lang="ar" dir="rtl">
@include('layouts.head')

<body>
    @include('layouts.navbar')
    
    @yield('content')
    
    @include('layouts.footer')
    @include('partials.back-to-top')
    
    <script src="script.js"></script>
    @stack('scripts')
</body>
</html>
