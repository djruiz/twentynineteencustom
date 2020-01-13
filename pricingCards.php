<?php
/* Template Name: Pricing */
/**
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css"/>
<script src="https://js.chargebee.com/v2/chargebee.js" data-cb-site="contentcucumber" ></script>

<div style="margin-top: 50px;" class="container">
  <div class="row" style="margin-bottom: 50px;">
  
    <div class=" col s12">
      <div class="card">
    
        <div class="card-content center" style="height: 650px;">
          
       
          <!-- features
        <ul class='collection center'>
              <li class='collection-item'>
                <strong>2</strong> Units
          </li>
              <li class='collection-item'>
                <strong>30GB</strong> Data
          </li>
        </ul>
-->
        
        
        <div  class="card-content center">
            <h4 class=''><small>$</small>490 per Month</h4>
            <a style="margin: 30px 0;" class="btn green darken-2" href = "javascript:void(0)"  data-cb-type = "checkout"  data-cb-plan-id = "content-cucumber-subscription" > Sign Up Now </a>
            </div>
        <div class="row">
                <div class="col s12 m4">
                    <img src="http://localhost/wordpress/wp-content/uploads/2019/12/604155_Pricing-visuals_05_Unlimited-requests_Op03_121119.png" alt="" class="pricing-icons">
                    <?php echo wp_get_attachment_image( 29, array('75', '75'), "", array( "class" => "img-responsive" ) );  ?>
                    <h5>Unlimited Requests</h5>
                    <h6>Add requests as soon as inspiration strikes</h6>
                </div>
                <div class="col s12 m4">
                    <img src="http://localhost/wordpress/wp-content/uploads/2019/12/604155_Pricing-visuals_04_Stock-images-included_Op01_121119.png" alt="" class="pricing-icons">
                    <?php echo wp_get_attachment_image( 28, array('75', '75'), "", array( "class" => "img-responsive" ) );  ?>
                    <h5>Stock Images Included</h5>
                    <h6>Add a creative element to your projects.</h6>
                </div>
                <div class="col s12 m4">
                    <img src="http://localhost/wordpress/wp-content/uploads/2019/12/604155_Pricing-visuals_04_Stock-images-included_Op01_121119.png" alt="" class="pricing-icons">
                    <?php echo wp_get_attachment_image( 706, array('75', '75'), "", array( "class" => "img-responsive" ) );  ?>
                    <h5>15 Day Gurantee</h5>
                    <h6>Love it or get a full refund with no questions asked</h6>
                </div>
                </div>
                <div class="col s12">
              <div class="row">
                <div class="col s12 m4">
                    <img src="http://localhost/wordpress/wp-content/uploads/2019/12/fastturnaround.png" alt="" class="pricing-icons">
                    <?php echo wp_get_attachment_image( 707, array('75', '75'), "", array( "class" => "img-responsive" ) );  ?>
                    <h5>Fast Turnaround</h5>
                    <h6>Writers work every business day</h6>
                </div>
                <div class="col s12 m4">
                    <img src="http://localhost/wordpress/wp-content/uploads/2019/12/604155_Pricing-visuals_03_Flat-rate-billing_Op01_121119.png" alt="" class="pricing-icons">
                    <?php echo wp_get_attachment_image( 27, array('75', '75'), "", array( "class" => "img-responsive" ) );  ?>
                    <h5>Flat-rate Billing</h5>
                    <h6>Writers work every business day</h6>
                </div>
                <div class="col s12 m4">
                    
                    <img src="http://localhost/wordpress/wp-content/uploads/2019/12/pricing.png" alt="" class="pricing-icons">
                    <?php echo wp_get_attachment_image( 708, array('75', '75'), "", array( "class" => "img-responsive" ) );  ?>
                    <h5>Free Revisions</h5>
                    <h6>We'll keep writing until it's perfect!</h6>
                </div>
              </div>
              
              </div>
              <!--
            <ul class='collection center'>
              <li class='collection-item'>
                <strong>Unlimited requests</strong>
          </li>
              <li class='collection-item'>
                <strong>Fast turnaround</strong>
                
                
          </li>
          
        </ul>
-->

        </div>
          
          </div>
        </div>
      </div>
      <div class="row center-align">
      <div class="col">
        <h5>
        Content Cucumber has helped over 100 businesses write awesome blogs. Schedule a demo today to learn how we can help you! 
        </h5>
        <p style="margin: 30px 0;"><a href="https://calendly.com/chriscucumber/30min" class="btn green darken-2 read-more-button">Schedule a Demo</a></p>
      </div>
    </div>
    <style>
      .pricing-icons{
        height: 75px;
        width: 75px;
      }
      
      </style>
    
    
    
    <!--
      
    <div class=" col s12 m6">
      <div class="card">
    
        <div class="card-content center">
          <h5 class=''>Annual</h5>
        </div>
          <div class="card-content center">
            <h4 class=''><small>$</small>5,390</h4>
          </div>

 Featrues Section
        <ul class='collection center'>
              <li class='collection-item'>
                <strong>5</strong> Units
          </li>
              <li class='collection-item'>
                <strong>100GB</strong> Data
          </li>
        </ul>
        <div class="card-content center">
          <div class="row">

            <div class="col s12">
            
            <a class="btn green" href = "javascript:void(0)"  data-cb-type = "checkout"  data-cb-plan-id = "yearly-subscription" > Sign Up Now</a>
            </div>
            -->
          </div>
          
        </div>
        
      </div>
    </div>
    </div>
    
        
      </div>
    </div>
    
   
    
    
    </div>
    <?php
get_footer();
?>
</div>

<style>

body{
  background:#f9f9f9;
}

.card{
  border-radius:0.3em;
}

a:hover{
  color: white !important;
}
</style>