<!doctype html>
<html lang="en">


<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="icon" href="images/favicon.png">
 <title>Scrapable</title>
   <!-- CSS FILES START -->
   <link href="<?= base_url('public/css/style.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/custom.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/color.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/responsive.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/owl.carousel.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/prettyPhoto.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/all.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/slick.css') ?>" rel="stylesheet">
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
               <?php if (!session()->has('user_id')): ?>
                  <li><a class="con font-weight-bold" href="/login">Log in</a></li>
               <?php else: ?>
                  <?php 
                        $name = session()->get('name');
                        $name_parts = explode(' ', $name);
                        $first_name = $name_parts[0];
                  ?>
                  <li><a class="con font-weight-bold" href="javascript:void"><?php echo $first_name; ?></a></li>
               <?php endif; ?>
               <li class="burger font-weight-bold"><a href="javascript:void"><i class="fas fa-bars"></i> Menu</a></li>
            </ul>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             
            </div>
         </nav>
      </header>

   <nav class="sidenav">
    <ul class="main marginright">
        <?php if (session()->get('user_id')): ?>
            <!-- Menu for logged-in users -->
            <li><a href="/dashboard">Home</a></li>
            <li><a href="/location">Change Location</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/orders">My Orders</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="/support">Support</a></li>
            <li><a href="/logout">Logout</a></li>
        <?php else: ?>
            <!-- Menu for non-logged-in users -->
            <li><a href="/">Home</a></li>
            <li><a href="#">How it Work</a></li>
            <li><a href="#success">Our Success</a></li>
            <li><a href="#">Contact Us</a></li>
        <?php endif; ?>
    </ul>
</nav>



