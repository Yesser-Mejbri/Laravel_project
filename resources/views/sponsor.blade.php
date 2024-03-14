
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
    @csrf
@include('nav')
       
           
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Sponsors
                </h3>
            </div>
        </div>

        <div class="py-1">
            <div class="container mb-5">

                The following organizations are supporting us:

                <div class="justify-content-center">
                    <ul class="clients-grid grid-4 grid-sm-2 grid-xm-2 grid-md-4 my-5 mb-5">
                        @foreach($sponsor as $item)   
                        <li class="grid-item mx-auto"><a href="{{$item->alt}}"><img src="images/sponsors/{{$item->src}}" alt=""></a></li>
                        @endforeach                   
                    </ul>
                </div>

                If your organization/society/company is interested to support the JURSE 2023 event, please contact us at <a class="text-decoration-underline" href="mailto:zedd2@iacm.forth.gr">zedd2@iacm.forth.gr</a>

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
