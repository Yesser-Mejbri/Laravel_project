
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
                    Topics
                </h3>
            </div>
        </div>

        <div class="container mb-5">

            <h3>Urban Topics</h3>

            <ol class="list-group list-group-numbered mb-5">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">New data & sensors for urban area remote sensing</div>
                        SAR, InSAR, Airborne and terrestrial LiDAR, UAV, VHR optical orbital and airborne sensors and data, Hyperspectral sensors and data
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Structure detection and characterization in urban areas</div>
                        Change detection, Classification, Multitemporal analysis, Feature extraction methods, Calibration and correction approaches
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Algorithms and techniques for remotely sensed data interpretation in urban areas</div>
                        Building extraction and reconstruction, Road and road network extraction, Vehicle detection and traffic monitoring, Urban area extraction, Land use and land cover mapping, Data mining
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Algorithms and techniques for urban area applications</div>
                        Urban modeling, Urban area trend monitoring, Urban heat island monitoring, Urban atmosphere monitoring, GIS & remote sensing data fusion
                    </div>
                </li>
            </ol>

            <h3>URS Topics</h3>

            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Urban climatology, geology, and geohazards</div>
                        Urban heat island effects, Air quality assessment, Subsidence, Hydrology, Earthquake/Volcanic falling, landslide and debris flow geological hazards, Coastal hazards, Environmental monitoring (soil, groundwater contaminant studies)
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">RS applications to social science</div>
                        Applications to vital statistics, RS and health, RS and GIS applications to social science, Applications to security and emergency, Applications to “World Expo” and “Olympic Games”, RS and GIS applications in archaeology
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">RS applications to urban planning and conservation</div>
                        Urban planning, Transportation planning, Digital city, Urban conservation, Urban simulation based on RS, Cultural heritage
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Urban development and growth pattern</div>
                        Urban development modeling, Contributions to urban trajectory theory, Detailed structure change, Smart growth
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Urban and peri-urban ecology</div>
                        Urban and peri-urban landscape ecology, Urban and peri-urban ecological process modeling, Comparative studies
                    </div>
                </li>
            </ol>

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
