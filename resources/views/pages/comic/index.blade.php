@extends('layouts.app')
@section('title-page', 'welcome')
@section('main-content')
    <h1>Comic</h1>
    @if (session('rimozione'))
        <div class="alert alert-primary">
            {{ session('rimozione') }}
        </div>
    @endif

    <div>
        <a class="btn btn-primary" href="{{ route('comics.create') }}">Create</a>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">thumb</th>
                    <th scope="col">price</th>
                    <th scope="col">series</th>
                    <th scope="col">sale_date</th>
                    <th scope="col">type</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $elem)
                    <tr>
                        <td>{{ $elem->id }}</td>
                        <td>{{ $elem->title }}</td>
                        <td>{{ $elem->description }}</td>
                        <td><a href="{{ route('comics.show', $elem->id) }}"><img src="{{ $elem->thumb }}"
                                    alt="{{ $elem->title }}" width="150px"></a></td>
                        <td>{{ $elem->price }}</td>
                        <td>{{ $elem->series }}</td>
                        <td>{{ $elem->sale_date }}</td>
                        <td>{{ $elem->type }}</td>
                        <td class="d-flex">
                            <form action="{{ route('comics.destroy', $elem->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="border border-0" type="submit">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </form>
                            <button class="border border-0">
                                <a href="{{route('comics.edit', $elem->id)}}">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            </button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $comics->links() }}
    </div>
@endsection
