<!DOCTYPE html>
<html>
    <head>
        <title>JQM PAGES</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="assets/css/themes/mycolors.css" />
        <link rel="stylesheet" href="assets/css/themes/jquery.mobile.icons.min.css" />
        <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
        <link rel="stylesheet" href="assets/css/jquery.mobile.structure-1.4.5.min.css" /> 
        <script src="assets/js/jquery-1.11.1.min.js"></script> 
        <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>

        <div data-role="page" id="page_home">
            <div data-role="header"  data-position="fixed">
                <h1>Cities</h1>
            </div>
            <div data-role="content">
                <a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#page_city" data-transition="slide">Zur CITY</a>
            </div>
            <div data-role="footer" data-position="fixed">
                <h5>&copy; 2018</h5>
            </div>
        </div>
        <div data-role="page" id="page_city">
            <div data-role="header" data-position="fixed">
                <h1>City</h1>
            </div>
            <div data-role="content">
                <h2>Regensburg</h2>
                <p>
                    Eine wunderschöne Stadt ...
                </p>
                <a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#page_gallery" data-transition="flip">Galerie</a>
            </div>
            <div data-role="footer" data-position="fixed">
                <h5>&copy; 2018</h5>
                <a class="ui-btn ui-btn-icon-left ui-icon-carat-l" href="#page_home" data-transition="slide" data-direction="reverse">zurück</a>
            </div>
        </div>
        <div data-role="page" id="page_gallery">
            <div data-role="header" data-position="fixed">
                <h1>Galerie</h1>
            </div>
            <div data-role="content">
                <p>
                    <img src="assets/images/city1.jpg" alt="" width="300" heigth="300" />
                </p>
                <a class="ui-btn ui-btn-icon-left ui-icon-carat-l" href="#page_home" data-transition="slidedown" data-direction="reverse">HOME</a>
            </div>
            <div data-role="footer" data-position="fixed">
                <a class="ui-btn ui-btn-icon-left ui-icon-carat-l" href="#page_city" data-transition="flow">City</a>
                <h5>&copy; 2018</h5>
            </div>
        </div>
        

    </body>
</html>