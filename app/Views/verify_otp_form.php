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
<?php if(session()->has('success')): ?>
    <div class="alert alert-success">
        <?= session('success') ?>
    </div>
<?php endif; ?>

<!-- Display error message if it exists -->
<?php if(session()->has('error')): ?>
    <div class="alert alert-danger">
        <?= session('error') ?>
    </div>
<?php endif; ?>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form class="login" action="<?php echo base_url('process_otp_verification'); ?>" method="POST">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="otp">OTP</label>
                            <input type="text" required id="otp" required name="otp" class="form-control form-control-lg" />
                            <?php if(isset($validation) && $validation->hasError('otp')): ?>
                                <p class="text-danger"><?= $validation->getError('otp') ?></p>
                            <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Verify OTP</button>
                            <p class=" mt-3" style="text-align: center;">Have an Account?
                                <a href="/login">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--   JS Files Start  -->
   <!-- JavaScript links -->
<script src="<?= base_url('public/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('public/js/jquery-migrate-1.4.1.min.js') ?>"></script>
<script src="<?= base_url('public/js/popper.min.js') ?>"></script>
<script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('public/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('public/js/jquery.prettyPhoto.js') ?>"></script>
<script src="<?= base_url('public/js/isotope.min.js') ?>"></script>
<script src="<?= base_url('public/js/slick.min.js') ?>"></script>
<script src="<?= base_url('public/js/custom.js') ?>"></script>
<script src="<?= base_url('public/js/scroll.js') ?>"></script>
<!-- Add other JavaScript links as needed -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 100,
            duration: 1000,
        });
    </script>


</body>

</html>