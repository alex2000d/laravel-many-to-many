@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5 text-center">benvenuto nell'area progetti</h1>
                <p class="text-center my-5">Qui puoi vedere tutti i progetti aggiungerne di nuovi, modificare quelli esistenti o cancellarli se non vanno bene</p>
            </div>
            <div class="col-12 text-end my-4">
                <a class="btn btn-sm btn-primary" href="{{route('admin.projects.create')}}">aggiungi progetto</a>
            </div>
            <table class="table table-striped">
               <thead>
                 <tr>
                   <th>name_project</th>
                   <th>slug</th>
                   <th>name</th>
                   <th>surname</th>
                   <th>github</th>
                   <th>strumenti</th>
                 </tr>
               </thead>
               <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->name_project}}</td>
                        <td>{{$project->slug}}</td>
                        <td>{{$project->name}}</td>
                        <td>{{$project->surname}}</td>
                        <td>{{$project->github}}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-sm btn-primary my-2">Scopri +</a>
                            <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}" class="btn btn-sm btn-warning">modifica</a>
                            <form action="{{route('admin.projects.destroy', ['project' => $project->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('sei sicuro di voler cancellare questo progetto?')" class="btn btn-sm btn-danger mt-3 delete-project">cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
               </tbody>
            </table>
        </div>
    </div>
    @include('admin.projects.partials.modal_delete')
@endsection