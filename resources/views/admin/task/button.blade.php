<button type="button" class="btn btn-warning btn-sm edit-button" value="{{$item->id}}" data-id="{{$item->id}}" data-bs-toggle="modal" data-bs-target="#studentEdit">
    <i class="fas fa-edit"></i> <span> Edit </span>
</button>

<button type="button" class="btn btn-danger btn-sm tooltip1" data-id="'.$row->id'">
    <i class="fas fa-trash-alt"></i><span>Delete</span>
</button>