@extends('master_layout')

@section('title')
    | Tasks
@endsection

@section('content')
    <div class="container container-fluid text-center">
        <div class="row">
            <a class="col-md-4" href="/">
                <img src="{{ asset('images/logo.png') }}" width="200" height="80" alt="MLP">
            </a>
        </div>

        <div class="row" style="padding-top:50px">
            <div class="col-md-5">
                <form method="POST" action="{{route('task.store')}}">
                    {{ csrf_field() }}
                    <div class="form-group" style="display:inline-block;">
                        <label for="taskName"></label>
                        <input type="text" id="taskName" name="taskName" placeholder="Insert task name" style="width: 400px"><br><br>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="width: 400px">Add</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7 bg-white">
                <table class="table table-strped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    @if ($tasks)
                        @foreach ($tasks as $task)
                            <tr>
                                <td>
                                    {{-- Do we want this to be the ID or a basic numbered count of the items 1-4 ??--}}
                                    {{ $task->id }}
                                </td>
                                <td>
                                    {{ $task->name }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa-solid fa-check"></i>
                                    </button>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('task.destroy', ['task' => $task])}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-danger btn-sm" value="X">
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="centeredTitleText" colspan="9">
                                No Data Found
                            </td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection
