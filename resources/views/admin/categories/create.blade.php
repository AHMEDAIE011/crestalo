 <!-- Modal -->
 <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
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
                        Enter Category Name en 
                         <input type="text" name="name" 
                            placeholder="Enter Category Name en" class="form-control">
                        <br>

                        Enter Category Name ar 
                        <input type="text" name="name_ar" 
                        placeholder="Enter Category Name ar" class="form-control">
                        <br>

                        Enter Category Describtion en 
                        <input type="text" name="desc" 
                        placeholder="Enter Category Describtion en" class="form-control">
                        <br>

                        Enter Category Describtion ar                         
                        <input type="text" name="desc_ar" 
                        placeholder="Enter Category Describtion ar" class="form-control">



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
                        
                    <br>
                        <select name="one_category_id" class="form-control">
                            <option disabled selected >Select Category</option>
                            @foreach ($OneCategory as $categor)

                            <option value="{{ $categor->id }}">{{ $categor->name }}</option>
                            @endforeach
                           
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create Category</button>
            </div>
        </div>
    </div>
</div>
</form>
