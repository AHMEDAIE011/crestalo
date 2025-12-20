 <!-- Modal -->
 <form action="{{ route('admin.team.store') }}" method="post"enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                  <div class="modal-body">
                    <div class="form-group">
                        
                        <input type="text" name="name" 
                            placeholder="Enter name" class="form-control">

                        <br>
                        <input type="text" name="jop" 
                        placeholder="Enter jop" class="form-control">
                        <br>
                        
                        <input type="number" name="phone" 
                        placeholder="Enter  phone" class="form-control">
                        <br>
                        <input type="text" name="facebook" 
                            placeholder="Enter facebook" class="form-control">

                        <br>
                        <input type="text" name="twitter" 
                        placeholder="Enter twitter" class="form-control">
                        <br>
                    
                        <input type="text" name="email" 
                            placeholder="Enter Gmail" class="form-control">

                        <br>
                        <input type="text" name="insagram" 
                        placeholder="Enter insagram" class="form-control">
                        <br>

                    <div class="form-group">
                        <label for="profile-image"> Image:</label>
                        <input name="image" type="file" id="profile-image" accept="image/*" />
                    </div>
                    
                     <br>
                        <select name="show" class="form-control">
                            <option disabled selected>Show in home page	</option>
                            <option value="1" >Active
                            </option>
                            <option value="0">Not Active
                            </option>
                        </select>
                    <br>
                        <select name="status" class="form-control">
                            <option disabled selected>Select Status</option>
                            <option value="1" >Active
                            </option>
                            <option value="0" >Not Active
                            </option>
                        </select>
                        
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create </button>
            </div>
        </div>
    </div>
</div>
</form>
