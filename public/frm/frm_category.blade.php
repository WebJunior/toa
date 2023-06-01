<form method="POST" action="{{ route('admin.category.add') }}">
    @csrf
    @method('PUT')
    <div class="frm">
        <div class="header">
            <p><i class="fa-solid fa-user-plus"></i> Add Product Type</p>
        </div>
        <div class="body">
            <div class="box">
                <div class="left">
                    <h6>ID :</h6>
                </div>
                <div class="right">
                    <input type="text" class="form-control" id="id" name="id" readonly>
                    <input type="hidden" class="form-control" id="edit-id" name="edit-id" value="0">
                    <input type="hidden" name="_token">
                </div>
            </div>
            <div class="box">
                <div class="left">
                    <h6>Name :</h6>
                </div>
                <div class="right">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="box">
                <div class="left">
                    <h6>OD :</h6>
                </div>
                <div class="right">
                    <input type="text" class="form-control" id="od" name="od">
                </div>
            </div>
            <div class="box">
                <div class="left">
                    <h6>Status :</h6>
                </div>
                <div class="right">
                    <select class="form-select" id="status" name="status">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>
            </div>
            <div class="box">
                <div class="left"></div>
                <div class="right">
                    <button type="submit" class="btn btn-outline-primary" id="add">Add</button>
                    <button type="button" class="btn btn-outline-danger" id="cancel">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>