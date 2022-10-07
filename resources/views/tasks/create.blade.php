@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="animated fadeIn">


            <div class="row">


                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">Create Tasks</div>
                        <div class="card-body card-block">
                            <form action="{{ route('tasks.store') }}" method="post" class="">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" id="title" name="title" placeholder="Title"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" id="description" name="description" placeholder="Description"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" id="progress" name="progress" placeholder="Progress %"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="form-control" name="status" id="status">
                                            <option value="in progress">In Progress</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions form-group"><button type="submit"
                                        class="btn btn-success btn-sm">Save</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
