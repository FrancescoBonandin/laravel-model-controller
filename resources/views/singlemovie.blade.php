@extends('Layout.singlemovie-layout')

@section('page')
    Movies|{{$singlemovie->title}}
@endsection

@section('h1')
    {{$singlemovie->title}}
@endsection

