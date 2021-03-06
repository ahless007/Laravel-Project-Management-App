@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3">
        <div class="card">
            <div class="card-header text-white bg-dark">Companies</div>
            <ul class="list-group list-group-flush">
                @foreach($companies as $company)
            <li class="list-group-item"><a href="/companies/{{$company->id}}">{{$company->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection