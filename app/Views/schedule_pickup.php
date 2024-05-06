<?php include(APPPATH . 'Views/components/header.php'); ?>

    <div class="row text-center">
            <div class="col mt-1">
                <h3 class="margintop mx-auto">Schedule Pickup</h3>
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
                <form action="<?php echo base_url('schedule-pickup'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="type">Scrap Type</label>
                        <select name="type" id="type" required class="form-control form-control-lg">
                            <option value="PAPER">PAPER</option>
                            <option value="METAL">METAL</option>
                            <option value="E-WASTE">E-WASTE</option>
                            <option value="CLOTHS">CLOTHS</option>
                            <option value="PLASTIC">PLASTIC</option>
                        </select> <br />
                        <?php if(isset($validation) && $validation->hasError('type')): ?>
                                <p class="text-danger"><?= $validation->getError('type') ?></p>
                            <?php endif; ?>
                        <!-- <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Enter your name"> -->
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" required class="form-control form-control-lg" name="pickup_address" id="pickup_address" placeholder="Enter your address">
                        <?php if(isset($validation) && $validation->hasError('pickup_address')): ?>
                                <p class="text-danger"><?= $validation->getError('pickup_address') ?></p>
                            <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Schedule</button>
                </form>
            </div>
        </div>
    </section>







    <!-- --------- end ------------ -->
    <?php include(APPPATH . 'Views/components/menu.php'); ?>
    <div class="overlay"></div>
    </div>
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
<script src="<?= base_url('public/js/script.js') ?>"></script>
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