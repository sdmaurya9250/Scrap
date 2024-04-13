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
    <!-- CSS FILES START -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/color.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/all.min.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">
    <!-- CSS FILES End -->
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
    <nav class="sidenav">
        <ul class="main marginright">
            <li><a href="/dashboard">Home</a></li>
            <li><a href="/location">Change Location</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="/orders">My Orders</a></li>
            <li><a href="#">Wallet</a></li>
            <li><a href="#">Notifications</a></li>
            <li><a href="#">Refer & Earn</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>
    <div class="overlay"></div>
    </div>
    <!--   JS Files Start  -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>s
    <script src="/js/isotope.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/scroll.js"></script>
    <script src="/js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 100,
            duration: 1000,
        });
    </script>
</body>

</html>