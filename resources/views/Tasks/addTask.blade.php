<div class="modal" tabindex="-1" role="dialog" id="create">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="name" class="col-sm col-form-label">Title</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name="title" id="name"
                                placeholder="Enter Title here..">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mt-1">
                        <label class="col-sm col-form-label">Description</label>
                        <div class="col-sm">
                            <textarea class="form-control" name="description" id="description" placeholder="Type here.." required></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="col-sm col-form-label">Due Date</label>
                        <div class="col-sm">
                            <input type="Text" class="form-control datepicker" id="date" name="date">
                            @error('due_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
