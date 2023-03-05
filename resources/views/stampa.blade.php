@extends('templates.template')

@section('title', 'stampa')
    
@section('body')
    <h1>stampa dei dati</h1>
    {{-- <h3>{{$tuttiCampi}}</h3> --}}
    @php print_r($tuttiCampi)
    @endphp
@endsection