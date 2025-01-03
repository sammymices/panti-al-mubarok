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
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <title>Dashboard Get-Magang</title>

    <link rel="canonical" href="pages-blank.html" />
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <!-- <link href="css/light.css" rel="stylesheet"> -->
    <!-- <link href="css/dark.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->



    <link class="js-stylesheet" href="<?php echo e(asset('lightbox/lightbox.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('lightbox/lightbox.js')); ?>"></script>

    


    <!-- Remove this after purchasing -->
    <link class="js-stylesheet" href="<?php echo e(asset('admin-assets/css/light.css')); ?>" rel="stylesheet">
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
        <?php echo $__env->make('dashboard.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main">
            <?php echo $__env->make('dashboard.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('dashboard.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <script src="<?php echo e(asset('admin-assets/js/app.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
    <script>
        <?php if(Session::has('success')): ?>
        Swal.fire({
            text: "<?php echo e(Session::get('success')); ?>",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
        Swal.fire({
            text: "<?php echo e(Session::get('error')); ?>",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok!",
            customClass: {
                confirmButton: "btn btn-danger"
            }
        });
        <?php endif; ?>
    </script>
</body>


<!-- Mirrored from appstack.bootlab.io/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Oct 2022 11:00:26 GMT -->

</html>
<?php /**PATH C:\Users\LENOVO\Downloads\panti-asuhan (1)\panti-asuhan\resources\views/dashboard/layout/app.blade.php ENDPATH**/ ?>