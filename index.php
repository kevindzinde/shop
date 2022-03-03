<?php
    session_start();
    include("includes/db.php");
    include("includes/header.php");
    include("includes/navbar.php");
    include("functions/functions.php");

?>
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner">
                <div class="carousel-item active">
                        <div class="container ">
                            <div class="row p-5">
                                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                   <img class="img-fluid" src="./assets/img/bb1.jpg" alt="">
                                </div>
                                <div class="col-lg-6 mb-0 d-flex align-items-center">
                                    <div class="text-align-left align-self-center text-dark">
                                        <h1 class="h1"><b class="text-success">Beers &</b>Ciders</h1>
                                        <h3 class="h2">We have a variety visit store</h3>
                                        <p>
                                            <a href="shop.php"><button class="btn btn-success">shop now</button></a>
                                        
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/bb2.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left text-dark">
                                    <h1 class="h1"><b class="text-warning">Whiskey</b></h1>
                                <h3 class="h2">We have a variety of whiskies in store .Shop online or visit store</h3>
                                <p>
                                        <a href="shop.php"><button class="btn btn-warning">shop now</button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right "></i>
        </a>
    </div>
    <!-- End Banner Hero -->



    <!-- Start Featured Product -->
    
    <section  class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Products</h1>
                   
                </div>
            </div>
            <div class="row">
            <?php
                getPro();
             ?>
            </div>
            
        </div>
    </section>
    <!-- End Featured Product -->

<!--Footer-->
<?php
    include("includes/footer.php");
?>
<!--End Footer-->
   

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>