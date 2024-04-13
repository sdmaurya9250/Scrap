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
                    <li class="burger font-weight-bold"> <a href="#"><i class="fas fa-bars"></i> Menu</a> </li>
                </ul>
            </nav>
        </header>
    </div>
    <!-- ------- end header ----- -->

    <section class="container">
        <div class="row">
            <div class="col-md-12 margintop" data-aos="zoom-in-up">
                <div class="c-info text-center shadow-lg border border-warning backcolor" id="addressInfo">
                    <i class="size_i3 fa-solid fas fa-map-marker-alt"></i>
                    <h6 class="p-3">Add Your Address</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="container" id="your_address">
        <div class="row">
            <div class="col-md-4 mt-5" data-aos="zoom-in-up">
                <div class="card shadow-lg c-info border border-warning address-card">
                    <div class="card-body">
                        <h5 class="card-title">You Address</h5>
                        <p class="card-text">123 Main Street, Cityville, Country</p>
                        <p class="card-text">Postal Code: 12345</p>
                        <p class="card-text">Phone: +1234567890</p>
                        <p class="card-text">Email: example@example.com</p>
                        <span class="delete-icon"><i class="fas fa-trash-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container shadow-lg mt-5 mb-5">
        <div id="addressForm" style="display: none;">
            <form id="addressFormContent">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-outline mb-4">
                            <label class="form-label mt-5" for="gpsaddress">GPS Address</label>
                            <textarea id="gpsaddress" class="form-control form-control-lg"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="city">City</label>
                            <select id="city" class="form-control form-control-lg">
                                <option value="">Select City</option>
                                <option value="New York">New York</option>
                                <option value="Los Angeles">Los Angeles</option>
                                <option value="Chicago">Chicago</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="area">Select Area</label>
                            <select id="area" class="form-control form-control-lg">
                                <option value="">Select Area</option>
                                <option value="New York">New York</option>
                                <option value="Los Angeles">Los Angeles</option>
                                <option value="Chicago">Chicago</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="sabarea">Select Sub Area</label>
                            <select id="sabarea" class="form-control form-control-lg">
                                <option value="">Select Sub Area</option>
                                <option value="New York">New York</option>
                                <option value="Los Angeles">Los Angeles</option>
                                <option value="Chicago">Chicago</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="building">Building Name</label>
                            <input type="building" id="building" class="form-control form-control-lg" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="Wing">Wing/Flat No.</label>
                            <input type="Wingno" id="Wing" class="form-control form-control-lg" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="Landmark">Nearby Landmark</label>
                            <input type="Landmark" id="Landmark" class="form-control form-control-lg" />
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="address_save">Save</button>
                </div>
            </form>
        </div>
    </section>










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