<?php
/* Template Name: Sign Up */

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
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css" />
<script src="https://js.chargebee.com/v2/chargebee.js" data-cb-site="contentcucumber"></script>

<div style="" class="container">
  <div class="row">

    <div class="center-align col s12">
      <div class="">
          <?php echo wp_get_attachment_image(756, array('350', '400'), "", array("class" => "responive-img"));  ?>
      </div>
      <div class="col s12">
      <a style="" class="btn green darken-2" href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="content-cucumber-subscription"> Sign Up Now </a>
      </div>
  </div>

            



</div>
<?php
get_footer();
?>
</div>

<style>
  body {
    background: #f9f9f9;
  }

  .card {
    border-radius: 0.3em;
  }

  a:hover {
    color: white !important;
  }
</style>
</div>