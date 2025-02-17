<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{-- tangkap nilai dari @section('title') --}}
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('bootstrap-magazine-template') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('bootstrap-magazine-template') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    @include('layouts.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('layouts.navbar')
    <!-- Navbar End -->


    @yield('konten')


    @include('layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bootstrap-magazine-template') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('bootstrap-magazine-template') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('bootstrap-magazine-template') }}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ asset('bootstrap-magazine-template') }}/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('bootstrap-magazine-template') }}/js/main.js"></script>
</body>

</html>
