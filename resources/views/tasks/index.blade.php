@extends('master_layout')

@section('title')
    | Tasks
@endsection

@section('content')
    <div class="container bg-white shadow">
        <div class="row">
            <div class="col-md-12">
                <h1>Tasks</h1>

                <ul class="list-style-none">
                    @foreach($tasks as $task)
                        <li>{{ $task->id }}. {{ $task->name }}</li>
                    @endforeach
                </ul>
{{--                <p><a href="{{route('tasks.create')}}" class="btn btn-large btn-primary">Create Task</a></p>--}}
            </div>
        </div>
    </div>
@endsection
