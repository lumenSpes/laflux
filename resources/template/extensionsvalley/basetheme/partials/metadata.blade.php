    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}} | {{ \WebConf::get('site_name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ \WebConf::get('meta_desc')}}" />
    <meta name="keywords" content="{{ \WebConf::get('meta_keywords')}}" />
    <meta name="generator" content="LaFlux {{ \WebConf::$version}}" />
<!-- Facebook and Twitter integration -->
    <meta property="og:title" content="{{ \WebConf::get('meta_title')}}"/>
    <meta property="og:image" content="{{url('/')}}/{{ \WebConf::get('site_logo')}}"/>
    <meta property="og:url" content="{{url('/')}}/"/>
    <meta property="og:site_name" content="{{ \WebConf::get('site_name')}}"/>
    <meta property="og:description" content="{{ \WebConf::get('meta_desc')}}"/>
    <meta name="twitter:title" content="{{ \WebConf::get('meta_title')}}" />
    <meta name="twitter:image" content="{{url('/')}}/{{ \WebConf::get('site_logo')}}" />

