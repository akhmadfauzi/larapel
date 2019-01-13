@extends('layout')

@section('navbar')

@section('content')
<div class="title m-b-md">
    carikonveksi
    <ul>
        @foreach ($tasks as $task)
            {{ $task }}
        @endforeach
    </ul>
</div>


@endsection