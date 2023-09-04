<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/main/app.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/pages/auth.css">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/logo/favicon.png" type="image/png">
</head>

<body>
    <div id="auth">
        <div class="container ">
            <div class=" row d-flex justify-content-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <div id="auth-left">

                        <h3 class="auth-title mb-5">Madani Library</h3>
                        <!-- <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p> -->
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('auth/proses_login') ?>" method="POST">
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="email" class="form-control form-control-xl" placeholder="Email" name="email">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>
                            <div class="form-check form-check-lg d-flex align-items-end">
                                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                    Keep me logged in
                                </label>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                        </form>
                        <div class="text-center mt-5 text-lg fs-4">
                            <p class="text-gray-600">Don't have an account? <a href="<?= base_url('auth/regist') ?>" class="font-bold">Sign
                                    up</a>.</p>
                            <p><a class="font-bold" href="<?= base_url('auth/forgot') ?>">Forgot password?</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div id="auth-right">

                    </div>
                </div>
            </div>

        </div>


    </div>
</body>

</html>