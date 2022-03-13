@extends('layouts.default')

@section('content')


{{--  Qui ci sara il contenuto dei fumetti --}}


<div class="main-card-box">
  <div class="main-card-box-inner">
<div class="current-series"><h3>Current Series</h3></div>
@foreach($comics as $comic)
<div class="comic-card">
<div class="comic-cover">
  <img src="{{$comic["thumb"] }}"/>
</div>

<span>{{ $comic["series"] }}</span>
</div>
@endforeach
</div>
<span class="more-comics">Load More</span>
</div>

@endsection
