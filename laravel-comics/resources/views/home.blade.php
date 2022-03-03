@extends('layouts.default')

@section('content')


{{--  Qui ci sara il contenuto dei fumetti --}}

@dump($comics)

<ul>
  @foreach($comics as $comic)
    <li>{{ $comic["title"] }}</li>
  @endforeach
</ul>




@endsection
