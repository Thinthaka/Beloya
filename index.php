<?php 
    require 'headerHome.php'; 
?> 

<main>

    <?php
    if(isset($_SESSION['uId'])){
       // echo '<p> You are log in </p>';
    }
    else{
       // echo '<p> Yo are logged Out </p> ';
    }
    ?>
    <?php
    include 'slider.php';
    ?>
    
      <!-- Product view --> 
      <?php 
      include 'homeproduct.php';
      ?>

      <!------ Service ----->
    
    <section class="servicehed">

    <div>
        <div class="border-start border-5 border-primary ps-5 mb-5">
            <h2 class="display-5 text-uppercase mb-0">Our Service</h2>
        </div>

        <div class="row">
            <div class="servicecon">
                <h3 class="Cat2">Product Development</h3>
                <p class="Cat">We offer innovative and agile product development services from the ideation to the commercialization phase for developing new or improving existing product range by focusing on customers' needs.</p>
            </div>
            <div class="servicecon">
                <h3 class="Cat2">Retail Packaging</h3>
                <p class="Cat">Our customized retail packaging covers it all. We provide the best quality food products in flexible retail packaging under your own brand name, tailored to the unique requirements.</p>
            </div>
            <div class="servicecon">
                <h3 class="Cat2">Export Logistics</h3>
                <p class="Cat">We make transportation and logistics easier than ever before. Your ordered products will be in your hands in the right quantity and quality at the right time.</p>
            </div>

        </div>
    </div>

    </section>

    
</main>

<?php 
    require 'footer.php';
?>

