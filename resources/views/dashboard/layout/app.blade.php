<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Oct 2022 11:00:26 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Dashboard Admin</title>

    <link rel="canonical" href="pages-blank.html" />
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <!-- <link href="css/light.css" rel="stylesheet"> -->
    <!-- <link href="css/dark.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
{{--    <link class="js-stylesheet" href="{{ asset('lightbox/ekko-lightbox.css') }}" rel="stylesheet">--}}
{{--    <script src="{{ asset('lightbox/ekko-lightbox.js') }}"></script>--}}

    <link class="js-stylesheet" href="{{ asset('lightbox/lightbox.css') }}" rel="stylesheet">
    <script src="{{ asset('lightbox/lightbox.js') }}"></script>

    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-j43rVg9X1wdpZIpm4v4sW6BB8l6U4xn6AKsTzTewWCDPH8QXZDxJZ+j2vawtvW0Y8q3VL0bz6hTxvapohKz99A==" crossorigin="anonymous" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-sMNL7xpbawGKQa8hWupD3qCkMJfikKzvC8us99wbRSbXfZ/6G1AfgV7ACkKj0o5i5ueF2Q2Vz0M0J3Kx1/kc0A==" crossorigin="anonymous"></script>--}}

    <!-- Remove this after purchasing -->
    <link class="js-stylesheet" href="{{ asset('admin-assets/css/light.css') }}" rel="stylesheet">
    <!-- END SETTINGS -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2120269,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Q3ZYEKLQ68');
    </script>
</head>
<!--
  HOW TO USE:
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
    <div class="wrapper">
        @include('dashboard.layout.sidebar')
        <div class="main">
            @include('dashboard.layout.navbar')

            @yield('content')

            @include('dashboard.layout.footer')
        </div>
    </div>

    <script src="{{ asset('admin-assets/js/app.js') }}"></script>
    @yield('script')
    <script>
        @if(Session::has('success'))
        Swal.fire({
            text: "{{ Session::get('success') }}",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
        @endif
        @if(Session::has('error'))
        Swal.fire({
            text: "{{ Session::get('error') }}",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok!",
            customClass: {
                confirmButton: "btn btn-danger"
            }
        });
        @endif
    </script>
</body>


<!-- Mirrored from appstack.bootlab.io/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Oct 2022 11:00:26 GMT -->

</html>
