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
    <title>ECO HTML</title>
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
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> -->

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
                    <li class="burger font-weight-bold"> <a href="#"><i class="fas fa-bars"></i> Menu</a> </li>
                </ul>
            </nav>
        </header>
    </div>
    <!-- ------- end header ----- -->

    <!-- <section class="container">
        <div class="row">
            <div class="col-md-6 margintop" data-aos="zoom-in-up">
                <a href="javascript:void" onclick="toggleNoOrderList()">
                    <div class="c-info text-center shadow-lg border border-info backcolor">
                        <i class="size_i fa-solid fas fa-calendar-alt"></i>
                        <h6 class="p-3">Upcoming</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-6 margintop" data-aos="zoom-in-up">
                <a href="javascript:void" onclick="toggleNoOrderList()">
                    <div class="c-info text-center shadow-lg border border-primary backcolor">
                        <i class="size_i2 fa-solid fas fa-clipboard-check"></i>
                        <h6 class="p-3">Completed</h6>
                    </div>
                </a>
            </div>
        </div>
    </section> -->
    <section class="container">
    <div class="row">
        <div class="col-md-6 margintop" data-aos="zoom-in-up">
            <a href="#" onclick="fetchAndPopulateData('N')">
                <div class="c-info text-center shadow-lg border border-info backcolor">
                    <i class="size_i fa-solid fas fa-calendar-alt"></i>
                    <h6 class="p-3">Upcoming</h6>
                </div>
            </a>
        </div>
        <div class="col-md-6 margintop" data-aos="zoom-in-up">
            <a href="#" onclick="fetchAndPopulateData('A')">
                <div class="c-info text-center shadow-lg border border-primary backcolor">
                    <i class="size_i2 fa-solid fas fa-clipboard-check"></i>
                    <h6 class="p-3">Completed</h6>
                </div>
            </a>
        </div>
    </div>
</section>


    <section class="container" id="your_address" style="display:none;">
        <div class="row justify-content-center">
            <div class="col-md-4 margintop" data-aos="zoom-in-up">
                <div class="card shadow-lg c-info border  address-card ">
                    <div class="card-body text-center">
                        <!-- <h5 class="card-title text-white">No Order List</h5> -->
                        <table class="table table-striped-columns" id="example">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pickup Address</th>
                            <th scope="col">Scrap Type</th>
                            <th scope="col">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>











    <!-- --------- end ------------ -->
    <nav class="sidenav">
        <ul class="main marginright">
            <li><a href="/dashboard">Home</a></li>
            <li><a href="/location">Change Location</a></li>
            <li><a href="/profile">Profile</a></li>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function fetchAndPopulateData(id) {
        $.ajax({
            url: '<?php echo base_url('fetch_my_order'); ?>',
            type: 'GET',
            dataType: 'json',
            data: { type: id },
            success: function(data) {
                console.log(data);
                $('#your_address').show();
                // Populate the table with the received data
                var tableBody = $('#your_address table tbody');
                tableBody.empty(); // Clear existing rows
                $.each(data, function(index, item) {
                    tableBody.append('<tr><th scope="row">' + (index + 1) + '</th><td>' + item.pickup_address + '</td><td>' + item.type + '</td><td>' + item.created_at + '</td></tr>');
                });
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
    $(document).ready(function() {
    $('#example').DataTable();
});

</script>

</body>

</html>