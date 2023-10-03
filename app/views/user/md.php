<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>

<div class="container-fluid">
    <div class="container my-5">
        <?php flash('pes');  ?>
        <div class="d-flex justify-content-between my-3">
            <a href="<?php echo URLROOT . "user/member/" . $data['post']->cat_id; ?>" class="btn btn-primary">Back</a>
        </div>
        <div class="col-md-12">
            <div class="card bg-light p-5">
                <div class="card-header">
                    <h6 class="english"><?php echo $data['post']->title; ?></h6>
                </div>
                <div class="card-body">
                    <img src="<?php echo URLROOT . 'assets/uploads/' . $data['post']->image; ?>" alt="" class="img-fluid">
                    <p>
                        <?php echo $data['post']->content; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . "/views/inc/footer.php"; ?>