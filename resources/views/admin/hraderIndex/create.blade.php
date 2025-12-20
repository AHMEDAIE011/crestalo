 <!-- Modal -->
 <form action="{{ route('admin.hraderIndex.store') }}" method="post"enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="form-group">
                        Enter title en
                        <input type="text" name="title" 
                            placeholder="Enter title en" class="form-control">

                        <br>Enter title ar
                        <input type="text" name="title_ar" 
                        placeholder="Enter title ar" class="form-control">
                        <br>Enter title2 en
                        <input type="text" name="title2" 
                            placeholder="Enter title2 en" class="form-control">

                        <br>Enter title2 ar
                        <input type="text" name="title2_ar" 
                        placeholder="Enter title2 ar" class="form-control">
                        <br>
                    Enter Descripation en
                        <input type="text" name="desc" 
                            placeholder="Enter Descripation en" class="form-control">

                        <br>Enter Descripation ar
                        <input type="text" name="desc_ar" 
                        placeholder="Enter Descripation ar" class="form-control">
                        <br>

                    <div class="form-group">
                        <label for="profile-image">Sub Category Image:</label>
                        <input name="image" type="file" id="profile-image" accept="image/*" />
                    </div>
                    <br>
                <select name="status" class="form-control">
                    <option disabled selected>Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">Not Active</option>
                </select>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create Categories</button>
            </div>
        </div>
    </div>
</div>
</form>
