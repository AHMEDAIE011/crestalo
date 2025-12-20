<form action="{{ route('admin.team.update' , $item->id) }}" method="post" enctype="multipart/form-data">
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
                        Enter name
                        <input type="text" name="name" value="{{ $item->name }}"
                            placeholder="Enter name" class="form-control">

                        <br>Enter jop
                        <input type="text" name="jop" value="{{ $item->jop }}"
                        placeholder="Enter jop" class="form-control">
                        <br>Enter phone
                        <input type="number" name="phone" value="{{ $item->phone }}"
                        placeholder="Enter phone" class="form-control">
                        <br>Enter facebook
                        <input type="text" name="facebook" value="{{ $item->facebook }}"
                            placeholder="Enter facebook" class="form-control">

                        <br>Enter twitter
                        <input type="text" name="twitter" value="{{ $item->twitter }}"
                        placeholder="Enter twitter" class="form-control">
                        <br>
                    Enter Gmail
                        <input type="text" name="email" value="{{ $item->email }}"
                            placeholder="Enter Gmail" class="form-control">

                        <br>Enter insagram
                        <input type="text" name="insagram" value="{{ $item->insagram }}"
                        placeholder="Enter insagram" class="form-control">
                        <br>

                    <div class="form-group">
                        <label for="profile-image"> Image:</label>
                        <input name="image" type="file" id="profile-image" accept="image/*" />
                    </div>
                    <div class="form-group">
                        <img id="profile_image" class="img-thumbnail"
                        src="{{ asset($item->image) }}" width="50px">
                    </div>
                     <br>
                        <select name="show" class="form-control">
                            <option disabled selected>Show in home page	</option>
                            <option value="1" @selected($item->show == 1)>Active
                            </option>
                            <option value="0"@selected($item->show == 0)>Not Active
                            </option>
                        </select>
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
                    <button type="submit" class="btn btn-primary">Update </button>
                </div>
            </div>
        </div>
    </div>
</form>
