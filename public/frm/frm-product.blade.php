<form class="upl">
    <div class="frm" style="width:1400px">
        <div class="header">
            <p><i class="fa-solid fa-user-plus"></i> Add Product</p>
            <!-- <a><i class="fa-solid fa-xmark"></i></a> -->
        </div>
        <div class="body">
            <div class="box1">
                <div class="box" style="margin-top: 10px">
                    <div class="left">
                        <h6>ID :</h6>
                    </div>
                    <div class="right">
                        <input type="email" class="form-control" id="id" name="id" readonly style="cursor:pointer;">
                        <input type="hidden" class="form-control" id="edit-id" name="edit-id" value="0">
                    </div>
                </div>
                <div class="box">
                    <div class="left">
                        <h6>CATEGORY :</h6>
                    </div>
                    <div class="right">
                        <select class="form-select" id="category" name="category">
                            <option value="">1</option>
                        </select>
                    </div>
                </div>
                <div class="box">
                    <div class="left">
                        <h6>Name :</h6>
                    </div>
                    <div class="right">
                        <input type="email" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="box">
                    <div class="left">
                        <h6>BARCODE :</h6>
                    </div>
                    <div class="right">
                        <input type="email" class="form-control" id="barcode" name="barcode">
                    </div>
                </div>
                <div class="box">
                    <div class="left">
                        <h6>Type :</h6>
                    </div>
                    <div class="right">
                        <select class="form-select" id="type" name="type">
                            <option value="Image">Image</option>
                            <option value="Video">Video</option>
                        </select>
                    </div>
                </div>
                <div class="box">
                    <div class="left">
                        <h6>Location :</h6>
                    </div>
                    <div class="right">
                        <input type="email" class="form-control" id="location" name="location">
                    </div>
                </div>
                <div class="box">
                    <div class="left">
                        <h6>OD :</h6>
                    </div>
                    <div class="right">
                        <input type="email" class="form-control" id="od" name="od">
                    </div>
                </div>
                <div class="box">
                    <div class="left">
                        <h6>STATUS :</h6>
                    </div>
                    <div class="right">
                        <select class="form-select" id="status" name="status">
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                    </div>
                </div>
                <div class="box" style="margin-bottom:20px; ">
                    <div class="left">
                        <h6>PHOTO :</h6>
                    </div>
                    <div class="photo">
                        <input type="file" name="txt-img" id="txt-img" class="txt-img">
                        <input type="hidden" name="txt-img-name" id="txt-img-name">    
                    </div>
                </div>
            </div>
            <div class="box2">
                <div class="box">
                    <div class="left" style="width:100%">
                        <h6>Description :</h6>
                    </div>
                    <div class="right" style="width:100%">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="box">
                    <div class="left"></div>
                    <div class="right" style="float: right;">
                        <button type="button" class="btn btn-outline-danger" id="cancel">Cancel</button>
                        <button type="button" class="btn btn-outline-primary" id="add">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>