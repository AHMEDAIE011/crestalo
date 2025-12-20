<form action="{{ route('admin.hraderIndex.update' , $item->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal fade" id="edit-category-{{ $item->id }}" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category : {{$item->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        Enter title en
                        <input type="text" name="title" value="{{ $item->title }}"
                            placeholder="Enter title en" class="form-control">

                        <br>Enter title ar
                        <input type="text" name="title_ar" value="{{ $item->title_ar }}"
                        placeholder="Enter title ar" class="form-control">
                        <br>Enter title2 en
                        <input type="text" name="title2" value="{{ $item->title2 }}"
                            placeholder="Enter title2 en" class="form-control">

                        <br>Enter title2 ar
                        <input type="text" name="title2_ar" value="{{ $item->title2_ar }}"
                        placeholder="Enter title2 ar" class="form-control">
                        <br>
                    Enter Descripation en
                        <input type="text" name="desc" value="{{ $item->desc }}"
                            placeholder="Enter Descripation en" class="form-control">

                        <br>Enter Descripation ar
                        <input type="text" name="desc_ar" value="{{ $item->desc_ar }}"
                        placeholder="Enter Descripation ar" class="form-control">
                        <br>

                    <div class="form-group">
                        <label for="profile-image">Sub Category Image:</label>
                        <input name="image" type="file" id="profile-image" accept="image/*" />
                    </div>
                    <div class="form-group">
                        <img id="profile_image" class="img-thumbnail"
                        src="{{ asset($item->image) }}" width="80px">
                    </div>
                    <br>
                        <select name="status" class="form-control">
                            <option disabled selected>Select Status</option>
                            <option value="1" @selected($item->status == 1)>Active
                            </option>
                            <option value="0"@selected($item->status == 0)>Not Active
                            </option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </div>
            </div>
        </div>
    </div>
</form>
