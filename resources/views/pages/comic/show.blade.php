@extends('layouts.app')
@section('title-page', 'welcome')
@section('main-content')
<h1>{{$comic->title}}</h1>
<p>{{$comic->description}}</p>
@endsection
