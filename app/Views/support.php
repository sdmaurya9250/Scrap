<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="images/logo.png">
     <title>Scrapable</title>
<!-- CSS links -->
<link href="<?= base_url('public/css/style.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/custom.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/color.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/responsive.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/owl.carousel.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/prettyPhoto.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/all.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/slick.css') ?>" rel="stylesheet">
<!-- Add other CSS links as needed -->
    <style>
        body {
            background-color: #00e3ff14;
        }
    </style>
</head>

<body>
    <div class="wrapper home1">
        <!--Header Start-->
        <header class="header-style-1">
            <nav class="navbar navbar-expand-lg shadow-lg">
                <a class="logoo navbar-brand" href="/"><img src="/images/logo.png" class="logos" alt=""></a>
                <ul class="float-left topside-menu">
                    <li> <a class="con font-weight-bold" href="#"><?php echo session()->get('name'); ?></a> </li>
                    <li class="burger font-weight-bold"> <a><i class="fas fa-bars"></i> Menu</a> </li>
                </ul>
            </nav>
        </header>
    </div>
    <!-- ------- end header ----- -->

    <div class="row text-center">
            <div class="col mt-1">
                <h3 class="margintop mx-auto">Schedule Pickup</h3>
            </div>
        </div>
    
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form class="login" id="Login" action="<?php echo base_url('supports'); ?>" method="POST">
                        <div class="form-outline mb-4">
                        <label class="form-label" for="name">Name</label>
                                <input type="text" required id="name" name="name" class="form-control form-control-lg" />
                              
                                    <?php if(isset($validation) && $validation->hasError('name')): ?>
                                <p class="text-danger"><?= $validation->getError('name') ?></p>
                            <?php endif; ?>
                            </div>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                                <input type="text"  required id="email" name="email" class="form-control form-control-lg" />
                              
                                    <?php if(isset($validation) && $validation->hasError('email')): ?>
                                <p class="text-danger"><?= $validation->getError('email') ?></p>
                            <?php endif; ?>
                            </div>
                        
                            <div class="form-outline mb-4">
                            <label class="form-label" for="contact">Mobile Number</label>
                                <input type="tel" required id="contact" name="contact" class="form-control form-control-lg" />
                              
                                <?php if(isset($validation) && $validation->hasError('contact')): ?>
                                <p class="text-danger"><?= $validation->getError('contact') ?></p>
                            <?php endif; ?>
                            </div>
                        
                            <div class="form-outline mb-4" id="otpInputField" >
                            <label class="form-label" for="otp">Message</label><br>
                                <!-- <input type="text" id="otp" name="otp" class="form-control form-control-lg" /> -->
                                <textarea name="message" required id="message"  class="form-control form-control-lg"></textarea><br>
                                <?php if(isset($validation) && $validation->hasError('message')): ?>
                                <p class="text-danger"><?= $validation->getError('message') ?></p>
                            <?php endif; ?>
                            </div>
                        

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Support</button>
                         
                        </form>
            </div>
        </div>
    </section>







    <!-- --------- end ------------ -->
    <?php include(APPPATH . 'Views/components/menu.php'); ?>
    <div class="overlay"></div>
    </div>
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
<script src="<?= base_url('public/js/script.js') ?>"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 100,
            duration: 1000,
        });
    </script>
</body>

</html>