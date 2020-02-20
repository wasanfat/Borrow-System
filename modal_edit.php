<!-- modal edit -->
<div class="modal fade" id="edit_<?php echo $row['product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="edit_<?php echo $row['product_id']; ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_<?php echo $row['product_id']; ?>">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="edit_data.php" method="post">
                    <div class="form-group">
                        <label for="product_id">Product ID : <?php echo $row['product_id']; ?></label>
                        <input type="hidden" class="form-control" id="product_id" name="product_id" value="<?php echo $row['product_id']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="product_name">Product Name : </label>
                        <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>">
                    </div>

                    <div class="select">

                        <select class="custom-select" name="product_status" id="product_status">
                            <option value="ว่าง"> ว่าง </option>
                            <option value="ไม่ว่าง"> ไม่ว่าง </option>
                            <option value="ซ่อมแซม"> ซ่อมแซม </option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" id="edit" name="edit" class="btn btn-success" value="submit">Submit</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>