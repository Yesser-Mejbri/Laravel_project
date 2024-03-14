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

        <section id="slider" class="slider-element vh-50" style="background: url('images/cccc1.png') center center; background-size: cover;"></section>
           
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Conference Venue
                </h3>
            </div>
        </div>


        <div class="py-1 mb-3">
            <div class="container">
                
                <p>
                    The conference will take place at the <a class="text-decoration-underline" href="https://www.cccc.gr/en" target="_blank">Cultural Conference Center of Heraklion</a> in Crete, Greece.
                </p>

                <div class="row">

                    <div class="col-md-9 mt-0">
                        <h4 class="mb-4">About</h4>
                        <p>
                            A place of excellent possibilities and 
                            infrastructure, a center of promotion as well as production of culture, that gives space to artistic expression 
                            in all the arts and cultures. The fruit of a long and multi-faceted effort, the Cultural and Conference Center 
                            of Heraklion (PSKI) is a boast and a cultural stake for the municipal council which supported all stages of this project since 1975, starting from the decision and reaching the completion of its 
                            construction and its delivery to the citizens of Heraklion, Crete, Greece, the Mediterranean. 
                        </p>
                    </div>

                    <div class="col-md-3">
                        <img src="images/cccc3.png" alt="">
                    </div>

                </div>

            </div>
        </div>

        <div class="py-1 mb-5">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <img id="venue-image" src="images/hall.png" alt="">
                    </div>

                    <div class="col-md-9 mt-0">
                        <h4 class="mb-0">Facilities</h4>
                        <p>
                            <ul class="my-list">
                                <li> <i class="icon-ok-sign"></i>&nbsp; The <b class="underline" onclick="showVenueImage('images/hall.png')">Concert Hall</b> has a capacity of 215 seats, and includes the required stage space and technical equipment.</li>
                                <li> <i class="icon-ok-sign"></i>&nbsp; The <b class="underline" onclick="showVenueImage('images/stage.png')">Experimental Stage</b> with 180 seats and a stage dedicated to movie screenings, chamber music concerts, recitals, plays, lectures and other presentations.</li>
                                <li> <i class="icon-ok-sign"></i>&nbsp; The <b class="underline" onclick="">Seminar Room</b> with 180 seats and equipment supporting the organization of conferences, workshops, exhibitions, etc., with the ability to be divided into two sections of equal capacity.</li>
                            </ul>
                        </p>
                    </div>

                </div>


                <div style="text-decoration:none; overflow:hidden;max-width:100%;width:1200px;height:500px;">
                    <div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;">
                    <iframe style="height:100%;width:100%;border:0;" frameborder="0" 
                    src="https://www.google.com/maps/embed/v1/place?q=Ramada+Plaza+Hotel+Tunis&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                    <a class="googl-ehtml" href="https://www.bootstrapskins.com/themes" id="enable-map-data">
                    premium bootstrap themes</a>
                    <style>#embedded-map-display .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style>
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
