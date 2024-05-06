<?php include(APPPATH . 'Views/components/header.php'); ?>
        <section class="vh-100">
            <img src="/images/bgimg/bg.jpg" alt="" style="width: 20%;">
            <section class="vh-100">
                <div class="container py-5 h-100">
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
                    <div class="row d-flex align-items-center justify-content-center h-100 img-aligns">
                        <div class="col-md-8 col-lg-7 col-xl-6 mb-3">
                            <img src="/images/how its work/work.png" alt="">
                        </div>
                        <!-- Display success message if it exists -->

                        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                            <form class="login" id="Login" action="<?php echo base_url('login'); ?>" method="POST">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginEmail">Email address</label>
                                    <input type="email" required name="email" id="loginEmail" class="form-control form-control-lg" value="<?= old('email') ?>" />
                                    <?php if (isset($validation) && $validation->hasError('email')) : ?>
                                        <p class="text-danger"><?= $validation->getError('email') ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginPassword">Password</label>
                                    <input type="password" required name="password" id="loginPassword" class="form-control form-control-lg" />
                                    <?php if (isset($validation) && $validation->hasError('password')) : ?>
                                        <p class="text-danger"><?= $validation->getError('password') ?></p>
                                    <?php endif; ?>
                                </div>



                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                                <p class=" mt-3" style="text-align: center;">Don't have an Account?
                                    <a href="/register">Sign Up</a>
                                </p>
                                <div class="d-flex justify-content-around align-items-center mb-4">
                                    <a href="/forgot-password">Forgot password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    <?php include(APPPATH . 'Views/components/footer.php'); ?>