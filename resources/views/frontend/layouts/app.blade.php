<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta name="description" content="Carbon and Environmental Research Indonesia (CER Indonesia) adalah badan yang bergerak di bidang lingkungan. Program dan kegiatan yang berkaitan dengan pembangunan ekonomi dan lingkungan tersebut menjadi perhatian utama kami.">
  <meta content="cerindo,environmental,consultancy,company,CER Indonesia" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/favicon.png') }}" rel="apple-touch-icon">

  @stack('styles')

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/vendor-view/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/vendor-view/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
</head>

<body>
  
<body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0">
  @include('frontend.layouts.header')
  <div class="-mt-0 overflow-x-hidden">
    <main class="min-h-screen">
      @yield('content')
      @include('frontend.layouts.footer')
    </main>
  </div>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/vendor-view/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/vendor-view/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
  
  <script>
   function toggleLanguage(event, lang) {
    event.preventDefault();  // Prevent the default link behavior
    
    var currentPath = window.location.pathname;  // Get the current path (e.g., /en/services)
    
    // Replace the current language code with the new language code
    var newPath = currentPath.replace(/^\/[a-z]{2}/, '/' + lang);
    
    // Redirect to the new path with the updated language
    window.location.href = newPath;
  }
  </script>

    <!-- Custom Script -->
    @stack('scripts')

</body>

</html>