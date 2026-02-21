<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
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
