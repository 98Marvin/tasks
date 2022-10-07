@extends('layouts.main')

@section('content')
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <!-- Tasks -->
            <div class="orders">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Tasks </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Progress</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tasks as $task)
                                                <tr>
                                                    <td class="serial">{{ $task->id }}</td>
                                                    <td> <span class="name"> {{ $task->title }}</span> </td>
                                                    <td> <span class="product">{{ $task->description }}</span> </td>
                                                    <td> <span class="count">{{ $task->progress }}</span> </td>
                                                    <td>
                                                        <span class="badge badge-complete">{{ $task->status }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning"><a class="text-white" href="{{ route('tasks.edit', $task->id) }}">Edit</a></span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div> <!-- /.col-lg-8 -->

                </div>
            </div>
            <!-- /.tasks -->
        </div>
    </div>
@endsection
