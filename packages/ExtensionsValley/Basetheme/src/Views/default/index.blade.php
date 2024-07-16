@extends('Basetheme::default.home')
@section('content-main')

@includeIf('Basetheme::position.loadview',['position'=> 'home-banner'])
@if(!empty($page))
    {!! $page->content !!}
@else
    @includeIf('Basetheme::default.homecontent')
@endif

@stop
