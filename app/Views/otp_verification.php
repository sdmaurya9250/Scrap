<?php include(APPPATH . 'Views/components/header.php'); ?>
    <!-- ------- end header ----- -->

    <div class="row text-center">
            <div class="col mt-1">
                <h3 class="margintop mx-auto">Change Password</h3>
            </div>
        </div>
    
    <section class="container mt-5">
    <?php if (session()->has('success')) : ?>
                        <div class="alert alert-success">
                            <?= session('success') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Display error message if it exists -->
                    <?php if (session()->has('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session('error') ?>
                        </div>
                    <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form class="login" action="<?php echo base_url('password_change'); ?>" method="POST">
                    <div class="form-outline mb-4">
                                    <label class="form-label" for="loginEmail">Email</label>
                                    <input type="tel" name="email" id="email" class="form-control form-control-lg" readonly value="<?= session()->get('email') ?>" />
                                    <?php if(isset($validation) && $validation->hasError('email')): ?>
                                <p class="text-danger"><?= $validation->getError('email') ?></p>
                            <?php endif; ?>
                                </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="otp">OTP</label>
                            <input type="text" required id="otp" required name="otp" class="form-control form-control-lg" />
                            <?php if(isset($validation) && $validation->hasError('otp')): ?>
                                <p class="text-danger"><?= $validation->getError('otp') ?></p>
                            <?php endif; ?>
                            </div>
                            <div class="form-outline mb-4" id="passwordInputField">
                                    <label class="form-label" for="registerPassword">New Password</label>
                                    <input type="password" required name="password" id="registerPassword" class="form-control form-control-lg" />
                                    <?php if (isset($validation) && $validation->hasError('password')) : ?>
                                        <p class="text-danger"><?= $validation->getError('password') ?></p>
                                    <?php endif; ?>
                                </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Change Password</button>
                            <p class=" mt-3" style="text-align: center;">Have an Account?
                                <a href="/login">Login</a>
                            </p>
                        </form>
            </div>
        </div>
    </section>

    <?php include(APPPATH . 'Views/components/footer.php'); ?>