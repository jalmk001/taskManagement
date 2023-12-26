<!-- Update Task Modal -->
@foreach ($tasks as $task)
    <div class="modal" tabindex="-1" role="dialog" id="updateTaskModal{{ $task->id }}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="title" class="col-sm col-form-label">Title</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ $task->title }}">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-1">
                            <label for="description" class="col-sm col-form-label">Description</label>
                            <div class="col-sm">
                                <textarea class="form-control" name="description" id="description">{{ $task->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-1">
                            <label for="due_date" class="col-sm col-form-label">Due Date</label>
                            <div class="col-sm">
                                <input type="text" class="form-control datepicker" id="due_date" name="due_date"
                                    value="{{ $task->due_date_formatted }}">
                                @error('due_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
