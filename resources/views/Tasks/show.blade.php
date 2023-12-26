@extends('Master.layouts')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Task Details</h3>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="nk-tb-list is-separate mb-3">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col"><span class="sub-text">Title</span></div>
                                <div class="nk-tb-col tb-col-mb"><span class="sub-text">Description</span></div>
                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Due Date</span></div>
                            </div>
                            <div class="nk-tb-item">
                                <div class="nk-tb-col">
                                    <div>
                                        <label>{{ $task->title }}</label>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-mb"><span class="tb-amount">{{ $task->description }}</span>
                                </div>
                                <div class="nk-tb-col tb-col-md"><span>{{ $task->due_date }}</span></div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <a href="{{ route('home') }}" class="btn btn-info">Back to Tasks</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
