<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>

<div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            <div class="card bg-light p-5">
                <!-- Register Form Start -->
                <h1 class="english text-info text-center mb-3">Register To Post</h1>
                <form action="<?php echo URLROOT . 'user/mc' ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="cat_id" class="form-label "><b>Post Category</b></label>
                        <select class="form-select" id="cat_id" name="cat_id" aria-label="Example select with button addon">
                            <?php foreach ($data['cats'] as $cat) : ?>
                                <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label "><b>Title</b></label>
                        <input type="text" class="form-control <?php echo !empty($data['title_err']) ? 'is-invalid' : ''; ?>" name="title">
                        <span class="text-danger"><?php echo !empty($data['title_err']) ? $data['title_err'] : ''; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="desc">
                            <b>Post Description</b>
                        </label>
                        <textarea class="form-control <?php echo !empty($data['desc_err']) ? 'is-invalid' : ''; ?>" id="desc" name="desc" rows="3"></textarea>
                        <span class="text-danger"><?php echo !empty($data['desc_err']) ? $data['desc_err'] : ''; ?></span>
                    </div>
                    <div class="row form-group my-3">
                        <label for="file">
                            <b>Input File</b>
                        </label>
                        <input type="file" class="form-control-file mt-2 <?php echo !empty($data['file_err']) ? 'is-invalid' : ''; ?>" id="file" name="file">
                        <span class="text-danger"><?php echo !empty($data['file_err']) ? $data['file_err'] : ''; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="content">
                            <b>Post Content</b>
                        </label>
                        <textarea class="form-control <?php echo !empty($data['content_err']) ? 'is-invalid' : ''; ?>" id="content" name="content" rows="5"></textarea>
                        <span class="text-danger"><?php echo !empty($data['content_err']) ? $data['content_err'] : ''; ?></span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="mt-3">
                            <button class="btn btn-primary">Post</button>
                            <button class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
                <!-- Register Form End -->
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . "/views/inc/footer.php"; ?>