<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="padding: 10px">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/') ?>"><img src="<?= base_url('images/mole.png') ?>" style="width: 100px; height: auto;"></a>
                </li>
                <div>
                    <li class="nav-item midNav">
                        <a class="nav-link" href="<?php echo site_url('heroes') ?>">Heroes</a>
                    </li>
                </div>
                <div>
                    <li class="nav-item midNav">
                        <a class="nav-link" href="<?php echo site_url('recommend') ?>">Recommendation</a>
                    </li>
                </div>
                <div>
                    <li class="nav-item midNav">
                        <a class="nav-link" href="<?php echo site_url('about') ?>">About</a>
                    </li>
                </div>
            </ul>
            <form class="d-flex">
                <a class="btn btn-light" type="button" href="<?php echo site_url('login_view') ?>">Admin Login</a>
            </form>
        </div>
    </div>
</nav>