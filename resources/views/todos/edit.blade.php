@extends('layouts.app')


@section('title')
New Todos
@endsection

@section('content')

    <h1 class="text-center">Create Todos</h1>

    <div class="row justify-content-center">

        <div class="col-md-6">
        
            <div class="card card-default">
                <div class="card-header">
                    Create New Todo
                </div>
                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('todos') }}/{{ $todo->id }}/update_todos " method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $todo->name }}">
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Description" name="description" cols="5" rows="5">{{ $todo->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Update Todo</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        
        </div>
    
    </div>

@endsection