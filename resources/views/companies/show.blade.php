@extends('layouts.app')

@section('content')

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="col-md-9 col-lg-9">

          <div class="col-md-12">
          <div class="jumbotron">
              <div class="container">
                  <h1 class="display-5">{{ $company->name }}</h1>
                  <p>{{ $company->description }}</p>
                  {{-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> --}}
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row bg-white">
                @foreach($company->projects as $project)
                <div class="col-md-4">
                    <h3>{{ $project->name }}</h3>
                    <p>{{ $project->description }}</p>
                    <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View Project »</a></p>
                </div>
                @endforeach
            </div>
            <hr>
        </div> <!-- /container -->

    </div>

    <div class="col-md-3 col-lg-3">
        <div class="card">
            <div class="card-header text-white bg-primary">Actions</div>
            <ul class="list-group">
            <li class="list-group-item list-group-item-action"><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
                <li class="list-group-item list-group-item-action"><a href="#">Delete</a></li>
                <li class="list-group-item list-group-item-action"><a href="#">Add new member</a></li>
            </ul>
        </div>
        
        {{-- <div class="card">
            <div class="card-header text-white bg-primary">Members</div>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action"><a href="#">Edit</a></li>
                <li class="list-group-item list-group-item-action"><a href="#">Delete</a></li>
                <li class="list-group-item list-group-item-action"><a href="#">Add new member</a></li>
            </ul>
        </div> --}}
    </div>

@endsection