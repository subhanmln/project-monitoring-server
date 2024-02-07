<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{$title}} | Daskrimti </title>
    <link rel="icon" type="image/x-icon" href="assets/image/kejaksaan.png"/>
    <link href="assets/html//layouts/horizontal-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="assets/html//layouts/horizontal-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/html//layouts/horizontal-light-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="assets/html//src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/html//layouts/horizontal-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/html//src/assets/css/light/authentication/auth-cover.css" rel="stylesheet" type="text/css" />

    <link href="assets/html//layouts/horizontal-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/html//src/assets/css/dark/authentication/auth-cover.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

      <!--  BEGIN CUSTOM STYLE FILE ALERT -->
      <link rel="stylesheet" type="text/css" href="assets/html/src/assets/css/light/elements/alert.css">
      <link rel="stylesheet" type="text/css" href="assets/html/src/assets/css/dark/elements/alert.css">
      <!--  END CUSTOM STYLE FILE  -->

</head>
<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                    <div class="auth-cover-bg-image"></div>
                    <div class="auth-overlay"></div>

                    <div class="auth-cover">

                        <div class="position-relative">

                            <img src="assets/html/src/assets/img/auth-cover.svg" alt="auth-img">

                            <h2 class="mt-5 text-white font-weight-bolder px-2">Sistem Informasi Monitoring Server</h2>
                            <p class="text-white px-2">Pusat Data Statistik Kriminal dan Teknologi Informasi Kejaksaan Republik Indonesia</p>
                        </div>

                    </div>

                </div>

                @yield('content')

            </div>

        </div>

    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/html//src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //message with toastr
        @if(session()->has('success'))

            Swal.fire({
            title: "Good job!",
            text: "{{ session('success') }}",
            icon: "success"
            });

        @elseif(session()->has('error'))

            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "{{ session('error') }}",
            footer: '<a href="#">Why do I have this issue?</a>'
            });

        @endif
    </script>


</body>
</html>
