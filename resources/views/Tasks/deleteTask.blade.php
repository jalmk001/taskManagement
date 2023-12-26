@foreach ($tasks as $task)
    <div class="modal" id="delete-{{ $task->id }}"data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Task</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-dismiss="modal"
                        aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete this task?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <a href="{{ route('delete.task', $task->id) }}" type="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
