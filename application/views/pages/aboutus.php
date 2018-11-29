<?php
$this->load->view('layout/header');
?>


<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="    background: url(<?php echo base_url(); ?>assets/images/shop2.jpg);
     background-size: cover;
     background-position: 459px -1031px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>About Us</h1>
                    <ul>
                        <li><a href="#">Home</a> /</li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Contact Us Page Area Start Here -->
<!-- Single Blog Page Area Start Here -->
<div class="single-blog-page-area" style="padding: 50px 0 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <img alt="Single Blog" src="<?php echo base_url(); ?>assets/images/aboutus.jpg" class="img-responsive" style='border: 3px solid #000;'>
                </center>
            </div>
            <div class="col-md-12">
                <div class="single-blog-details-content" style="margin-top: 50px;">


                    <p>
                        Octopuscart is an e-commerce venture that provides your daily need items at your doorstep. We shall continue to strive hard to innovate and discover efficient means to create value for our customers, employees and community.              </p>

                    <p>
                        We don't only just make the process of Online products ordering easy and fun but also make sure the prices are unbeatable.                           </p>
                    <p>
                        <b>Parent Company of  www.octopuscart.com is <a href="http://costcointernational.com" target="_blank">Costco International Ltd</a></b>
                    </p>
                </div>


            </div>

        </div>
    </div>
</div>
<!-- Single Blog Page Area End Here -->
<!-- Contact Us Page Area End Here -->






<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>