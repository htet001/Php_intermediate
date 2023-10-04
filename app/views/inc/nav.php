<div class="container-fluid" style="background-color: blueviolet;">
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
                <li class="nav-item">
                    <a class="nav-link text-white english" href="#">Contact </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white english" href="#">About</a>
                </li>
                <li>
                    <div class="dropdown" style="margin-right: 10px;">
                        <button class="english btn btn-secondary dropdown-toggle" style="background-color: purple;"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if (getUserSession() != false) : ?>
                            <?php echo getUserSession()->name; ?>
                            <?php else : ?>
                            Member
                            <?php endif; ?>
                        </button>
                        <ul class="dropdown-menu" style="background-color: blueviolet;">
                            <?php if (getUserSession() != false) : ?>
                            <?php if (getUserSession()->admin === 1) : ?>
                            <a class="dropdown-item text-warning english"
                                href="<?php echo URLROOT . 'admin/home' ?>">Admin
                                panel</a>
                            <?php elseif (getUserSession()->admin === 0) : ?>
                            <a class="dropdown-item text-warning  english"
                                href="<?php echo URLROOT . 'user/member/1' ?>">Member
                                panel</a>
                            <?php endif; ?>
                            <li><a class="dropdown-item text-warning english"
                                    href="<?php echo URLROOT . 'user/logout' ?>">Logout</a>
                            </li>
                            <?php else : ?>
                            <li><a class="dropdown-item text-warning english"
                                    href="<?php echo URLROOT . 'user/login' ?>">Login</a>
                            </li>
                            <li><a class="dropdown-item text-warning english"
                                    href="<?php echo URLROOT . 'user/register' ?>">Register</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="english btn btn-secondary dropdown-toggle" style="background-color: purple;"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Languages
                        </button>
                        <ul class="dropdown-menu" style="background-color: blueviolet;">
                            <li><a class="dropdown-item text-warning english" href="#">PHP</a></li>
                            <li><a class="dropdown-item text-warning english" href="#">PYTHON</a></li>
                            <li><a class="dropdown-item text-warning english" href="#">MEAN</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>