
<!DOCTYPE html>
<html dir="ltr" lang="en-US" style="position: relative; min-height: 100%;">
    <head>
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BD3C8E34SP"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-BD3C8E34SP');
        </script>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="assets/css/bootstrap.css" >
        <link rel="stylesheet" href="assets/css/style.css" >
        <link rel="stylesheet" href="assets/css/dark.css" >
        <link rel="stylesheet" href="assets/css/font-icons.css" >
        <link rel="stylesheet" href="assets/css/animate.css" >
        <link rel="stylesheet" href="assets/css/magnific-popup.css" >
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/css/custom.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="img/favicon.ico">

        <title> - Joint Urban Remote Sensing Event</title>

    </head>
    <body class="stretched">

       
         @include('nav')  
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Social Events
                </h3>
            </div>
        </div>

        <div class="py-1">
            <div class="container">

                <p>
                    The JURSE 2025 program will host social events, which are addressed to all registered participants and accompanying persons.
                </p>

                <h4 class="mb-3 mt-2">Ice Breaker (May 16)</h4>

                <p>
                    This welcome event will take place at the <a class="text-decoration-underline" href="venue.html" target="_blank">conference venue</a> and will include snack buffet and beverages. 
                    This event is ideal for networking among participants in a hospitable setting, while participants 
                    will also have the chance to register in advance for the conference.
                </p>

                <h4 class="mb-3 mt-2">Cultural Tour (May 17)</h4>

                <p>
                    A guided cultural tour at the <a class="text-decoration-underline" href="https://www.knossospalace.gr/" target="_blank">Knossos Palace</a> has been planned including 
                    transport with bus from/to the conference venue. Visitors will learn about the 
                    thriving Minoan civilization and will wander across the ruins of this unique 
                    archaeological site. The tour will end with a buffet and beverages on-site.
                </p>

                <h4 class="mb-3 mt-2">Gala Dinner (May 18)</h4>

                <p>
                    A visit to the <a class="text-decoration-underline" href="https://www.lyrarakis.com/en/home" target="_blank">Lyrarakis winery</a> at the Heraklion outskirts with bus from/to the 
                    conference venue has been organized. Visitors will have the chance to taste different local wine 
                    varieties and delectable cuisine at a site surrounded by the natural beauty of the island. 
                    During the dinner, the result of the student contest will be announced too.
                </p>

                <div class="row mb-5 mt-5">
                    <div class="col-lg-6">
                        <img src="images/knossos.png" alt="">
                    </div>
                    <div class="col-lg-6">
                        <img src="images/winery.png" alt="">
                    </div>
                </div>

            </div>
        </div>

        @include('footer')


        <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();
        </script>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/plugins.min.js"></script>
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/venue.js"></script>

    </body>
</html>
