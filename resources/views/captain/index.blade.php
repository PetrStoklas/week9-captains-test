@extends('common.layout')

@section('content')
<h1>The captain roster</h1>
@foreach($captains as $captain)
<h2> {{ $captain->name }}</h2>
@endforeach
@endsection