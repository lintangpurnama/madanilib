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
                        <h1 class="auth-title">Sign Up</h1>
                        <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                        <form action="index.html">
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text" class="form-control form-control-xl" placeholder="Username">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text" class="form-control form-control-xl" placeholder="Email">
                                <div class="form-control-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" class="form-control form-control-xl" placeholder="Password">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" class="form-control form-control-xl" placeholder="Confirm Password">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                        </form>
                        <div class="text-center mt-5 text-lg fs-4">
                            <p class='text-gray-600'>Already have an account? <a href="<?= base_url('auth') ?>" class="font-bold">Log
                                    in</a>.</p>
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