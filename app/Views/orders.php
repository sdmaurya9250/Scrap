<?php include(APPPATH . 'Views/components/header.php'); ?>

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



<?php include(APPPATH . 'Views/components/footer.php'); ?>
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