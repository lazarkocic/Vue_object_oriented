@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <form method="POST" action="/projects">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="body">Project name:</label>
                <input type="text" name="name" class="form-control"></input>
              </div>
              <div class="form-group">
                <label for="body">Project description:</label>
                <input type="text" name="description" class="form-control"></input>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>

            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @foreach ($projects as $project)
              <p>{{ $project->name }}, {{ $project->description }}</p>
            @endforeach

        </div>
    </div>
</div>
@endsection
