
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
        <title>- Joint Urban Remote Sensing Event</title>

    </head>

    <body class="stretched">

        @include('nav') 
           
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Call for Papers
                </h3>
            </div>
        </div>

        <div class="container mb-5">

            <p>
                JURSE is an excellent opportunity for meeting researchers, practitioners and students 
                in urban remote sensing. This event introduces new methodologies and technological 
                resources to investigate urban environments through orbital and airborne remote sensing.
            </p>

            <p>
                Prospective authors are invited to contribute by submitting a full paper in English of no 
                more than 4 pages double-column, including illustrations, results and references.
            </p>

            <p>
                The accepted papers will be included in the JURSE 2023 Proceedings published in the IEEE Xplore Digital Library. 
                IEEE policy requires that all accepted papers must be checked for 
                plagiarism and all authors of accepted papers must transfer copyright to IEEE for publishing them.
            </p>

            <div class="divider divider-center"><i class="icon-globe-africa"></i></div>
            
            <p>
                Submissions should be formatted in accordance with the IEEE guidelines.
            </p>

            <p>
                <b>The template for  final version for IEEE conference proceedings can be found here:</b>
            </p>
            
            <i class="icon-line-download"></i> <a class="text-decoration-underline" href="templates/word.zip">Word Template</a> <br>
            <i class="icon-line-download"></i> <a class="text-decoration-underline" href="templates/latex.zip">LaTeX Template</a>

            <p class="mt-4">
                <b>Please use these templates to ensure IEEE Xplore compatibility.</b>
            </p>

            <div class="divider divider-center"><i class="icon-globe-africa"></i></div>

            <p>
                <b>The submission of paper should be done through Easychair, following <a class="text-decoration-underline" href="https://easychair.org/conferences/?conf=jurse2023" target="_blank">this link <i class="icon-line-external-link"></i></a>.</b><br>
                Authors will be able to choose among the JURSE 2023 general topics and special 
                sessions. Please note that the final allocation of papers within special 
                sessions will depend on the global list of accepted papers.
            </p>

            <p>
                Deadline for submitting papers is 9 December 2022.
            </p>
            
            <p>
                Deadline for submitting camera-ready papers is 7 April 2023.
            </p>

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
