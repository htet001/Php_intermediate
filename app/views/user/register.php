<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>

<div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            <div class="card bg-light p-5">
                <!-- Register Form Start -->
                <h1 class="english text-info text-center mb-3">Register To Post</h1>
                <form action="<?php echo URLROOT . '/user/register' ?>" method="post" autocomplete="off">
                    <div class="mb-3">
                        <label for="username" class="form-label "><b>Username</b></label>
                        <input type="text"
                            class="form-control <?php echo !empty($data['name_err']) ? 'is-invalid' : ''; ?>"
                            name="name">
                        <span
                            class="text-danger"><?php echo !empty($data['name_err']) ? $data['name_err'] : ''; ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label "><b>Email
                                address</b></label>
                        <input type="email"
                            class="form-control <?php echo !empty($data['email_err']) ? 'is-invalid' : ''; ?>"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <span
                            class="text-danger"><?php echo !empty($data['email_err']) ? $data['email_err'] : ''; ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label "><b>Password</b></label>
                        <input type="password"
                            class="form-control <?php echo !empty($data['password_err']) ? 'is-invalid' : ''; ?>"
                            id="exampleInputPassword1" name="password">
                        <span
                            class="text-danger"><?php echo !empty($data['password_err']) ? $data['password_err'] : ''; ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label "><b>Confirm
                                Password</b></label>
                        <input type="password"
                            class="form-control <?php echo !empty($data['confirm_password_err']) ? 'is-invalid' : ''; ?>"
                            id="exampleInputPassword1" name="confirm_password">
                        <span
                            class="text-danger"><?php echo !empty($data['confirm_password_err']) ? $data['confirm_password_err'] : ''; ?></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo URLROOT . 'user/login' ?>" class="english">Already Register, Please
                            Login</a>
                        <div class="mt-3">
                            <button class="btn btn-primary">Register</button>
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