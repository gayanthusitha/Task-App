@extends('layout')
@section('content')

<h4 class="mb-3">All Task</h4>

@foreach ( $todos as $todo)
<div class="card mb-5 text-center">

    @if($todo->isCompleted())
    <div class="card-body bg-info text-black">
        <p class="card-text"> {{$todo->task}} <span class="badge rounded-pill bg-success">Completed</span> </p>
            <form action="/delete/{{$todo->id}}" method='POST'>
            @csrf
            @method('DELETE')
            <button type='submit' class="btn btn-danger"> Delete </button>
        </form>

    </div>

    @else
    <div class="card-body bg-warning text-black">
        <p class="card-text"> {{$todo->task}} <span class="badge rounded-pill bg-info">Pendeing</span> </p>

        <form action="/update/{{$todo->id}}" method='POST'>
            @csrf
            @method('PATCH')
            <button type='submit' class="btn btn-primary"> Completed ? </button>
        </form>

    </div>

    @endif
</div>
@endforeach
<a href="/create-task" class="btn btn-success"> Add a Task </a>
@endsection