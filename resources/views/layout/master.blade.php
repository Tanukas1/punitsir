<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Modular kitchens at Best prices</title>
    <link rel='stylesheet' id='wp-block-library-css'
        href='wp-includes/css/dist/block-library/style.min1eb7.css?ver=6.0.3' type='text/css' media='all' />
    <link rel='stylesheet' href='wp-content/themes/sr_hacker/css/bootstrap.minf748.css?ver=0.3' type='text/css'
        media='' />
    <link rel='stylesheet' href='wp-content/themes/sr_hacker/css/bootstrap-theme.minf748.css?ver=0.3' type='text/css'
        media='' />
    <link rel='stylesheet' href='wp-content/themes/sr_hacker/css/owl.carousel.minf748.css?ver=0.3' type='text/css'
        media='' />
    <link rel='stylesheet' href='../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min2608.css?ver=0.4'
        type='text/css' media='' />

    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700%2C800%2C900&amp;display=swap&amp;ver=0.4'
        type='text/css' media='' />
    <link rel='stylesheet' href='wp-content/themes/sr_hacker/css/animate2608.css?ver=0.4' type='text/css' media='' />
    <link rel='stylesheet' href='wp-content/themes/sr_hacker/nivo-lightbox/nivo-lightbox2608.css?ver=0.4'
        type='text/css' media='' />
    <link rel='stylesheet' href='wp-content/themes/sr_hacker/nivo-lightbox/themes/default/default2608.css?ver=0.4'
        type='text/css' media='' />
    <link rel='stylesheet' href='wp-content/themes/sr_hacker/css/owl.theme.default.min2608.css?ver=0.4' type='text/css'
        media='' />
    <link rel='stylesheet' href='wp-content/themes/sr_hacker/style1eb7.css?ver=6.0.3' type='text/css' media='all' />

    <link href="{{asset('assets')}}/css/mycss.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X0KEMDTKK9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-X0KEMDTKK9');
    </script> 
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-89B97L16F2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-89B97L16F2');
    </script>


    <style>
        /* The Modal (background) */
        .modal {
            position: fixed; /* Stay in place */
            z-index: 9999999; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.7); /* Black w/ opacity */
            animation: fadeIn 0.3s ease-in-out; /* Fade in animation */
        }

/* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: 2% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 40%; /* Could be more or less, depending on screen size */
            text-align: center;
            animation: slideIn 0.3s ease-in-out; /* Slide in animation */
        }

/* The Close Button */
        .close {
            color: black;
            float: right;
            font-size: 28px;
            font-weight: bold;
            transition: color 0.3s; /* Smooth color transition */
        }

.close:hover,
.close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        /* Animation Keyframes */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
            }

            to {
                transform: translateY(0);
            }
        }

        @media only screen and (max-width: 600px) { /* Adjust max-width as needed */
            .modal-content {
                width: 80%;
            }
        }

   
    </style>

    @yield('css')
</head>

<body>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>

            <img src="{{asset('assets')}}/img/adds.jpg" class="img-responsive" />
            <a href="query.html" class="btn btn-primary" style="margin-top:10px;">Get Offer<i class="fas fa-arrow-right "></i></a>
        </div>
    </div>

    <div id="page" class="site">

        <header id="mymasthead" class="mysite-header">
            @include('include.header')
        </header>

        <!-- #masthead -->
        <div class="clearfix"></div>
        <div id="content" class="site-content ">

            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    @yield('body')
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->


        </div>
        <!-- #content -->

        <footer id="colophon" class="site-footer">
            @include("include.footer")
        </footer>
      
        <!-- #colophon -->
    </div>
    <!-- #page -->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/skip-link-focus.js"></script>
    <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/js/wow.min.js"></script>
    <script src="{{asset('assets')}}/js/nivo-lightbox.min.js"></script>
    <script src="{{asset('assets')}}/js/custom.js"></script>

    <script>

        $(function () {

            $('#mymasthead').load('menubar.html');
            $('#colophon').load('footer.html');

            // Display the modal on page load
            $("#myModal").css("display", "block");

            // Close the modal when clicking on the close button
            $(".close").click(function () {
                $("#myModal").css("display", "none");
            });
        })

        function gtm() {


            $('.navbar').addClass('shownvarbar');

        }

        function gtmclose() {

            $('.navbar').removeClass('shownvarbar');

        }
    </script>
    @yield('js')
</body>
</html>