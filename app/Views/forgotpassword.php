<?php include(APPPATH . 'Views/components/header.php'); ?>
        <section class="vh-100">
            <img src="images/bgimg/bg.jpg" alt="" style="width: 20%;">
            <section class="vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex align-items-center justify-content-center h-100 img-aligns">
                        <div class="col-md-8 col-lg-7 col-xl-6 mb-3">
                            <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="img-fluid" alt="Phone image"> -->
                            <img src="images/how its work/work.png" alt="">
                        </div>
                        <!-- Display success message if it exists -->
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
                        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                            <form class="login" id="Login" action="/loginform" method="POST">
                                <!-- Login form -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginEmail">OTP</label>
                                    <input type="tel" name="otp" id="otp" class="form-control form-control-lg" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Reset Password</button>
                            </form>


                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!--   JS Files Start  -->
        <?php include(APPPATH . 'Views/components/footer.php'); ?>