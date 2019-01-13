@extends('layout')
@section('content')
    <div>
        <form action="/projects/{{ $project->id }}" method="post">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div>
                <input type="text" name="title" value="{{$project->title}}">
            </div>
            <div>
                <textarea name="description" id="" cols="30" rows="10">{{ $project->description}}</textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>

    <form action="/projects/{{ $project->id }}" method="post">
        {{ method_field('DELETE')}}
        {{ csrf_field() }}
        <div>
            <button type="submit"> delete </button>
        </div>
    </form>
    </div>
@endsection