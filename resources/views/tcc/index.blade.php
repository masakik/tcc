@extends('layouts.app')

@section('content')
    
<h2>Tccs</h2>

@foreach($tccs as $tcc)

<div>
    <a href="tcc/{{$tcc->id}}">  {{ $tcc->nome }}</a> - {{ $tcc->titulo }}
</div>

@endforeach


@endsection