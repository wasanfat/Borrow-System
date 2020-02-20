<div class="modal fade" id="deleteModal_<?php echo $row['product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal_<?php echo $row['product_id']; ?>" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_<?php echo $row['product_id']; ?>">คุณต้องการที่จะลบอุปกรณ์หรือไม่?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="delete_data.php" method="post">
                    <p>
                        <h4><?php echo $row['product_id']; ?></h4>
                    </p>
                    <div class="dropdown-divider"></div>
                    <input type="hidden" class="form-control" id="product_id" name="product_id" value="<?php echo $row['product_id']; ?>">
                    <button type="submit" id="delete" name="delete" class="btn btn-danger btn-success">Delete</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>