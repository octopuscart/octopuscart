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
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="single-blog-details-content">
<!--                   <img class="img-responsive" src="<?php echo base_url() . 'assets/images/logo73.png'; ?>" alt="logo" style="  margin: 0px auto 34px;
    background: black;
    height: 53px;">-->

                    <p>
                        As one of Hong Kong's leading custom tailors, we are proud of our international reputation for making the highest quality tailored clothing. Since past three decades, we are known across the globe for professionally hand-crafted suits, shirts, leather jackets, sports jackets and ladies dresses from Hong Kong.
                    </p>

                    <p>
                        Our master tailors work with a group of over 250 professionally trained Shanghainese tailors to deliver each garment to utter satisfaction of clients. Our garments are hand-cut and hand-stitched to ensure the best quality outcome.                           
                    </p>
                    
                     <p>
Our overseas sales team travels across the globe with wide range of fabrics and styles to provide door-to-door services, office tours, or hotel exhibitions as per clients' requests.                    </p>


                       <p>
We stock over 20,000 fabrics in our showroom in Hong Kong. Our fabrics include brands like Ermenegildo Zegna, Loro Piana, Vitale Barberis Canonico, Dormeuil, Hugo Collections and many other prestigious fabrics from Italy, United Kingdom and France.                    </p>
                </div>
               

            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <img alt="Single Blog" src="<?php echo base_url(); ?>assets/images/shop1.jpg" class="img-responsive" style='border: 3px solid #000;'>

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