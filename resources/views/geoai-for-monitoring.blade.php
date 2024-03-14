
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

        <title> Joint Urban Remote Sensing Event</title>

    </head>


    <body class="stretched">

        @include('nav')
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Special Sessions
                </h3>
            </div>
        </div>

        <div class="container mb-5">
            
            <div class="text-center mt-2">
                <h3 class="titular-title gradient-horizon gradient-text mb-4">GeoAI for Monitoring Rapid Urbanization Processes</h3>
                <small><i><b>Claudio Persello</b>, University of Twente, The Netherlands</i></small><br>
                <small><i><b>Dalton Lunga</b>, Oak Ridge National Laboratory, USA</i></small><br>
                <small><i><b>Monika Kuffer</b>, University of Twente, The Netherlands</i></small>

                <div class="my-5 w-75 mx-auto">
                    <p align="start" class="mb-3 h5">
                        <b>Abstract</b>
                    </p>
                    <p align="justify">
                        Rapid urbanization is a global phenomenon that is reshaping the urban environment all over the world. 
                        This process is associated with significant socio-economic and demographic transformations, 
                        such as gentrification, but also the proliferation of deprived and vulnerable urban neighbourhoods. 
                        Studying this phenomenon is often hindered by the lack of updated spatial information, 
                        preventing a global understanding of the ongoing transformations and the potential design of effective interventions.
                    </p>
                    <p align="justify">
                        GeoAI technologies such as the combination of remote sensing data with machine learning offer the opportunity to systematically monitor these rapid developments, 
                        providing relevant information for better understanding urbanization processes in different parts of the world. 
                        Advances in deep learning can largely contribute to mapping urban land cover, 
                        land use, and identifying informal and vulnerable areas. 
                        Automated techniques to analyze temporal image series can reveal vital information about urban growth patterns and morphological changes.
                    </p>
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

    </body>
</html>
