<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h1 class="my-4">PRODUCTS</h1>
            <div class="list-group">
                <?php foreach ($category as $row) { ?>
                    <a href="<?php echo base_url('category/' . $row['_id']) ?>" class="list-group-item"><?php echo $row['name'] ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>