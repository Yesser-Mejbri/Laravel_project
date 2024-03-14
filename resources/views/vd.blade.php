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
      @include('nav', ['/' => app(\App\Http\Controllers\Home::class)->index()])
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Videos & Photos
                </h3>
            </div>
        </div>

        <div class="container mb-5">

            <h3>Videos</h3>

            <div class="row justify-content-center">
               @foreach($video as $item)
                <div class="col-lg-4 mb-4">
                {{$item->vpayh}}
                </div>
                @endforeach
    
            </div>

            <h3>Photos</h3>
            @foreach($photo as $item)
            <div class="d-flex align-items-stretch row col-mb-50">
            {{$item->vpayh}}
            </div>
            @endforeach
            <div id="loadMoreButton" class="text-center">
                <a class="button button-3d button-large button-rounded button-purple mt-5" onclick="handleLoadMore()">Load More</a>
            </div>

        </div>

        @include('footer')


        <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();
        </script>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/plugins.min.js"></script>
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/code.js"></script>
        <script src="assets/js/load-more.js"></script>

    </body>
</html>
