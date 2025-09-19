<?php if(isset($_GET['msg']) && !empty($_GET['msg'])) { ?>
    <div class="alert alert-success left-icon-alert" role="alert">
        <strong>Success!</strong> <?php echo htmlentities($_GET['msg']); ?>
    </div>
<?php } elseif(isset($_GET['error']) && !empty($_GET['error'])) { ?>
    <div class="alert alert-danger left-icon-alert" role="alert">
        <strong>Error!</strong> <?php echo htmlentities($_GET['error']); ?>
    </div>
<?php } ?>
