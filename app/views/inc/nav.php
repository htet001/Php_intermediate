<div class="container-fluid bg-secondary">
    <nav class="container navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand text-white english" href="<?php echo URLROOT ?>">
            <img src="<?php echo URLROOT . "assets/imgs/pkt.png" ?>" alt="" width="30" height="24" class="rounded">
            <span class="english" id="pkt">P K T</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" id="navright">
                <?php if (getUserSession()) : ?>
                <li class="nav-item">
                    <a class="nav-link text-white english" href="<?php echo URLROOT . 'admin/home' ?>">Admin Panel</a>
                </li>
                <?Php endif; ?>

                <li class="nav-item">
                    <a class="nav-link text-white english" href="#">Link</a>
                </li>

                <div class="dropdown">
                    <button class="english btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php if (getUserSession() != false) : ?>
                        <?php echo getUserSession()->name; ?>
                        <?php else : ?>
                        Member
                        <?php endif; ?>
                    </button>
                    <ul class="dropdown-menu">
                        <?php if (getUserSession() != false) : ?>
                        <li><a class="dropdown-item english" href="<?php echo URLROOT . 'user/logout' ?>">Logout</a>
                        </li>
                        <?php else : ?>
                        <li><a class="dropdown-item english" href="<?php echo URLROOT . 'user/login' ?>">Login</a></li>
                        <li><a class="dropdown-item english" href="<?php echo URLROOT . 'user/register' ?>">Register</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="english btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Languages
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item english" href="#">PHP</a></li>
                        <li><a class="dropdown-item english" href="#">PYTHON</a></li>
                        <li><a class="dropdown-item english" href="#">MEAN</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>
</div>