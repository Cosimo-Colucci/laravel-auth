@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            
            <div class="card">
                <h4 class="card-header">{{$project->id}}-{{$project->slug}}</h4>
                <div class="card-body">
                    <h4 class="card-title">{{$project->title}}</h4>
                    <h5>{{$project->owner}}</h5>
                    <img class="card-img-top" src="{{$project->image}}" alt="{{$project->title}}">
                    <p class="card-text">{{$project->content}}</p>
                    <h6>{{$project->project_start}}</h6>
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    <a href="#" class="btn btn-sm btn-warning">Soft Deleted</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
