@extends('layouts.app')

@section('content')
@if(count($surats))
@foreach($surats as $surat)
{{$surat->id}}
@endforeach
@else
no data
@endif
@endsection