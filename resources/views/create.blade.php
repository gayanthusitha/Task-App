@extends('layout')
@section('content')

<form action="/task" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="comment">Tasks:</label>
      <textarea class="form-control" rows="5" id="comment" name="task"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/" class="btn btn-danger"> Cancel </a>
  </form>

@endsection