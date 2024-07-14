@extends('Basetheme::default.home')
@section('content-main')

@includeIf('Basetheme::partials.pagetitle',['title' => $page->title])
<div id="fh5co-main">

        <div class="container">
            <div class="row">
                @if($page->layout == 'full-width')
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    @yield('page-content')
                    </div>
                @endif
                @if($page->layout == 'left-side-bar')
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        @includeIf('Basetheme::position.loadview',['position'=> 'left-sidebar'])
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
                    @yield('page-content')
                    </div>
                @endif
                @if($page->layout == 'right-side-bar')
                    <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
                    @yield('page-content')
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        @includeIf('Basetheme::position.loadview',['position'=> 'right-sidebar'])
                    </div>
                @endif
                @if($page->layout == 'both-side-bar')
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        @includeIf('Basetheme::position.loadview',['position'=> 'left-sidebar'])
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        @yield('page-content')
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        @includeIf('Basetheme::position.loadview',['position'=> 'right-sidebar'])
                    </div>
                @endif

            </div>
        </div>
    </div>
@stop
