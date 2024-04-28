  
      <div class="overlay"></div>
      <br><br>
   </div>
   <script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
      }, function(err) {
        console.log('ServiceWorker registration failed: ', err);
      });
    });
  }
</script>

   <!--   JS Files Start  -->
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
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
      AOS.init({
         offset: 100,
         duration: 1000,
      });
   </script>

<script>
    // window.onload = () => {
    //     'use strict';
      
    //     alert('Window loaded');
      
    //     if ('serviceWorker' in navigator) {
    //         navigator.serviceWorker
    //             .register('<?php echo base_url('public/sw.js'); ?>')
    //             .then(registration => {
    //                 alert('Service Worker registered');
    //                 console.log('Service Worker registered:', registration);
    //             })
    //             .catch(error => {
    //                 alert('Service Worker registration failed');
    //                 console.error('Service Worker registration failed:', error);
    //             });
    //     } else {
    //         alert('Service Worker not supported');
    //     }
    // }
</script>
</body>
</html>