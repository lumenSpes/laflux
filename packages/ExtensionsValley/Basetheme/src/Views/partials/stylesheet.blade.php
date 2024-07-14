    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    @if(\WebConf::get('fav_icon') != "")
        <link rel="shortcut icon" href="{{URL::to('/')}}/{{ \WebConf::get('fav_icon') }}"/>
    @endif

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset("$themeHelper->active_template_path/css/animate.css")}}?v={{ \WebConf::$version}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset("$themeHelper->active_template_path/css/icomoon.css")}}?v={{ \WebConf::$version}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset("$themeHelper->active_template_path/css/owl.carousel.min.css")}}?v={{ \WebConf::$version}}">
    <link rel="stylesheet" href="{{asset("$themeHelper->active_template_path/css/owl.theme.default.min.css")}}?v={{ \WebConf::$version}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset("$themeHelper->active_template_path/css/magnific-popup.css")}}?v={{ \WebConf::$version}}">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset("$themeHelper->active_template_path/css/style.css")}}?v={{ \WebConf::$version}}">
    <!-- Modernizr JS -->
    <script src="{{asset("$themeHelper->active_template_path/js/modernizr-2.6.2.min.js")}}?v={{ \WebConf::$version}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset("$themeHelper->active_template_path/js/respond.min.js")}}?v={{ \WebConf::$version}}"></script>
    <![endif]-->
