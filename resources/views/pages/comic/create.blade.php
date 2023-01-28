@extends('layouts.app')
@section('title-page', 'welcome')
@section('main-content')
<h1>Create</h1>

{{-- @if ($errors->any())
    <div class="alert alert-danger my-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="">Title</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title">
        @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Description</label>
       <textarea class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
       @error('description')
       <div class="alert alert-danger">
           {{$message}}
       </div>
   @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Thumb</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb">
        @error('thumb')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Price</label>
        <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" step="0.01">
        @error('price')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Series</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" name="series">
        @error('series')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Sales Date</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date">
        @error('sale_date')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Type</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="type">
        @error('type')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
    </div>
    <button class="btn btn-primary" type="submit">Creazione</button>
</form>
@endsection
