<form action="{{ route('admin.categories.update' , $category->id) }}" method="post"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal fade" id="edit-category-{{ $category->id }}" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category : {{$category->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        Enter Category Name en 
                         <input type="text" name="name" value="{{ $category->name }}"
                            placeholder="Enter Category Name en" class="form-control">
                        <br>

                        Enter Category Name ar 
                        <input type="text" name="name_ar" value="{{ $category->name_ar }}"
                        placeholder="Enter Category Name ar" class="form-control">
                        <br>

                        Enter Category Describtion en 
                        <input type="text" name="desc" value="{{ $category->desc }}"
                        placeholder="Enter Category Describtion en" class="form-control">
                        <br>

                        Enter Category Describtion ar                         
                        <input type="text" name="desc_ar" value="{{ $category->desc_ar }}"
                        placeholder="Enter Category Describtion ar" class="form-control">



                    <br>
                        
                    <div class="form-group">
                        <label for="profile-image">Sub Category Image:</label>
                        <input name="image" type="file" id="profile-image" accept="image/*" />
                    </div>
                    <div class="form-group">
                        <img id="profile_image" class="img-thumbnail"
                        src="{{ asset($category->image) }}" width="80px">
                    </div>
                    <br>
                        <select name="status" class="form-control">
                            <option disabled selected>Select Status</option>
                            <option value="1" @selected($category->status == 1)>Active</option>
                            <option value="0"@selected($category->status == 0)>Not Active
                            </option>
                        </select>
                        
                    <br>
                        <select name="one_category_id" class="form-control">
                            <option  selected value="{{ $category->oneCategory->id }}">{{ $category->oneCategory->name }}</option>
                            @foreach ($OneCategory as $categor)
                            @if ( $category->oneCategory->id  != $categor->id)

                            <option value="{{ $categor->id }}">{{ $categor->name }}</option>
                            @endif
                            @endforeach
                           
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
