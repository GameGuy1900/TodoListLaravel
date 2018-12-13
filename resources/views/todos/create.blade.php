@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create ToDo Item</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('todos.store')}}" method="post">
                        @csrf
                        Title:<br>
                        <input type="text" name="title"><br><br>
                        Description:<br>
                        <textarea name="description"></textarea><br><br>
                        Deadline:<br>
                        <input type="datetime-local" name="deadline"><br><br>
                        Priority:<br>
                        <select name="priority">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <br><br>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
