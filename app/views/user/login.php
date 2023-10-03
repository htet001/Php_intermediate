<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>


<div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            <div class="card bg-light p-5">
                <!-- Login Form Start -->
                <?php flash('register_success'); ?>
                <?php flash('login_fail'); ?>
                <h1 class="english text-info text-center mb-3">Login To Post</h1>
                <form action="<?php echo URLROOT . 'user/login' ?>" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
                        <input type="email" class="form-control <?php echo !empty($data['email_err']) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <span class="text-danger"><?php echo !empty($data['email_err']) ? $data['email_err'] : ''; ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                        <input type="password" class="form-control <?php echo !empty($data['password_err']) ? 'is-invalid' : ''; ?>" id="exampleInputPassword1" name="password">
                        <span class="text-danger"><?php echo !empty($data['password_err']) ? $data['password_err'] : ''; ?></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo URLROOT . 'user/register' ?>" class="english">You don't have an account,
                            Please
                            Register</a>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
                <!-- Login Form End -->
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . "/views/inc/footer.php"; ?>