<?php
namespace ExtensionsValley\Basetheme\Events;


\Event::listen('website.template.positions', function ($collection) {

    $collection->put('extensionsvalley.basetheme', [
            '0' => [
                'title' => "Header Menu"
                ,'position' => 'header-menu'
                , 'layout' => 'Basetheme::partials.menuitem'
            ],
            '1' => [
                 'title' => "Home Banner"
                ,'position' => 'home-banner'
                , 'layout' =>  'Basetheme::partials.homebanner'
            ],
            '2' => [
                'title' => "Home Banner"
                ,'position' => 'home-banner'
                , 'layout' =>  'Basetheme::default.homecontent'
            ],
            '3' => [
                 'title' => "Left Side Bar"
                ,'position' => 'left-sidebar'
                , 'layout' =>  'Basetheme::partials.leftsidebar'
            ],
            '4' => [
                 'title' => "Right Side Bar"
                ,'position' => 'right-sidebar'
                , 'layout' =>  'Basetheme::partials.rightsidebar'
            ],
            '5' => [
                 'title' => "Footer Menu 1"
                ,'position' => 'footer-menu1'
                , 'layout' =>  'Basetheme::partials.footermenuitem1'
            ],
            '6' => [
                 'title' => "Footer Menu 2"
                ,'position' => 'footer-menu2'
                , 'layout' =>  'Basetheme::partials.footermenuitem2'
            ],
            '7' => [
                 'title' => "Footer Menu 3"
                ,'position' => 'footer-menu3'
                , 'layout' =>  'Basetheme::partials.footermenuitem3'
            ],
            '8' => [
                 'title' => "Footer Widget"
                ,'position' => 'footer-widget'
                , 'layout' =>  'Basetheme::partials.footerwidget'
            ],

    ]);


});

\Event::listen('website.template.layout', function ($collection) {

    $collection->put('extensionsvalley.basetheme', [
                'full-width' => 'Full Width'
                ,'left-side-bar' => 'Left Side Bar'
                ,'right-side-bar' => 'Right Side Bar'
                ,'both-side-bar' => 'Both Side Bar'
    ]);


});
