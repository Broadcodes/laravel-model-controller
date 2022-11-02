@extends('shared.app')

@section('sectionHome')
@foreach ($movies as $item)
    <div>
        {{$item}}
    </div>
@endforeach
@endsection
