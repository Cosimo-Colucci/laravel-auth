@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Progect Start</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Owner</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>
                            {{$project->id}} 
                        </th>
                        <td>
                            {{$project->title}} 
                        </td>
                        <td>
                            {{$project->project_start}}    
                        </td>
                        <td>
                            {{$project->slug}}
                        </td>
                        <td>
                            {{$project->owner}}
                        </td>
                        <td>
                            <a href="" class="btn btn-sm button-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
