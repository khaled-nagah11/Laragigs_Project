@extends('layout')

@section('content')
@include('partials.search')
<h2>
    {{$listing->title}}
</h2>

<p>
    {{$listing->description}}
</p>
@endsection
