
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
                <h3 class="titular-title gradient-horizon gradient-text mb-4">Deep learning approaches for multi-temporal and multi-modal data processing and analysis for urban areas</h3>
                <small><i><b>Germain Forestier</b>, Universite de Haute-Alsace, IRIMAS, France</i></small><br>
                <small><i><b>Jonathan Weber</b>, Universite de Haute-Alsace, IRIMAS, France</i></small><br>
                <small><i><b>Camille Kurtz</b>, Universite Paris Cite, LIPADE, France</i></small><br>
                <small><i><b>Sylvain Lobry</b>, Universite Paris Cite, LIPADE, France</i></small><br>
                <small><i><b>Charlotte Pelletier</b>, Universite Bretagne Sud, IRISA, France</i></small>

                <div class="my-5 w-75 mx-auto">
                    <p align="start" class="mb-3 h5">
                        <b>Abstract</b>
                    </p>
                    <p align="justify">
                        Current remote sensing missions produce a large amount of data on a daily basis, 
                        leading to significant challenges in designing processing chains adapted to their analysis. 
                        Modern sensors are now able to offer images of the same scene with improved revisit 
                        time frequencies (e.g. Sentinel, Venμs), and with increasing spatial and spectral resolutions, 
                        sensed and acquired from different types of signals, such as radar, optical, LiDAR and DSM. 
                        This data also provides complementary information (e.g. observation scales, physical properties of soils) 
                        for the analysis of imaged territories and their temporal evolution, particularly in an urban context.
                    </p>
                    <p align="justify">
                        Computer vision, image processing and artificial intelligence techniques therefore play an 
                        important role to process such an amount of multi-temporal and multi-modal data. Deep neural 
                        network approaches are currently revolutionizing the field of machine learning with 
                        techniques such as unsupervised, self-supervised and supervised approaches. Along with 
                        strategies like domain adaptation, transfer learning, time series analysis, image registration 
                        and fusion, these approaches are increasingly used nowadays to tackle challenging remote sensing tasks, 
                        especially for ever-growing urban environments at the landscape level, 
                        such as object detection / extraction, semantic segmentation, classification, 
                        land cover mapping and object tracking for Earth observation and urban monitoring.
                    </p>
                    <p align="justify">
                        The aim of this special session is to popularize the use of these promising approaches. 
                        Indeed, although these methods have become very popular in computer vision over the last 
                        ten years, they must be adapted to take advantage of the multi-modal and multi-temporal 
                        specificity of the remote sensing data and the underlying tasks, especially in the context 
                        of urban environment analysis. Our objectives are to gather both computer scientists 
                        (academics and professionals) familiar with multi-temporal and multi-modal heterogeneous 
                        data analysis and end-users close to geographical and environmental sciences who could 
                        give sense to raw data.We are also targeting potential new users interested in these 
                        approaches in order to stimulate deeper multidisciplinary interactions on this topic.
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
