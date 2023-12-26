@extends('Master.layouts')
@section('content')
@if(session()->has('message'))
<p>{{session()->get('message')}}</p>
@endif
    <div class="nk-content ">
        @if ($errors->any())
            @error('title')
                <div id="error-message" class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('description')
                <div id="error-message" class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('due_date')
                <div id="error-message" class="alert alert-danger">{{ $message }}</div>
            @enderror
        @endif


        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">
                                    Tasks</h3>
                                <div class="nk-block-des text-soft">
                                </div>
                            </div>

                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                        class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em
                                            class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="more-options">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt"><button
                                                    class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal"
                                                    data-target="#create"><em class="icon ni ni-plus"></em><span>Add
                                                        Task</span></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="nk-tb-list is-separate mb-3">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col tb-col-mb text-center"><span class="sub-text">Title</span></div>
                                <div class="nk-tb-col tb-col-mb text-center"><span class="sub-text">Description</span></div>
                                <div class="nk-tb-col tb-col-md text-center"><span class="sub-text">Due Date</span></div>
                                <div class="nk-tb-col tb-col-md text-center"><span class="sub-text">Action</span></div>
                            </div>
                            @foreach ($tasks as $task)
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col tb-col-mb text-center">
                                        <span class="tb-lead">{{ $task->title }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb text-center">
                                        <span class="tb-amount">{{ $task->description }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md text-center">
                                        <span>{{ $task->getDueDateFormattedAttribute() }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-primary"><i
                                                    class="fa fa-eye"></i></a>
                                            <button type="button" class="btn btn-secondary" data-toggle="modal"
                                                data-target="#updateTaskModal{{ $task->id }}"><i class="fa fa-edit"></i>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#delete-{{ $task->id }}"><i class="fa fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{ $tasks->links() }}
                </div>
            </div>
        </div>
    </div>
    @include('Tasks.addTask')
    @include('Tasks.updateTask')
    @include('Tasks.deleteTask')
@endsection
