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
                            <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-sm btn-success">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$projects->links()}}
        </div>
    </div>
</div>
@endsection
